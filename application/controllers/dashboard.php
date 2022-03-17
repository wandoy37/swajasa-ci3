<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('m_data');

		// cek session yang login, 
		// jika session status tidak sama dengan session telah_login, berarti pengguna belum login
		// maka halaman akan di alihkan kembali ke halaman login.
		if ($this->session->userdata('status') != "telah_login") {
			redirect(base_url() . 'login?alert=belum_login');
		}
	}


	public function index()
	{
		$data['kontak'] = $this->m_data->get_data('kontak')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_index', $data);
		$this->load->view('dashboard/v_footer');
	}

	public function update_kontak()
	{
		// Wajib isi nama dan deskripsi website
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('nohp', 'Nohp', 'required');
		$this->form_validation->set_rules('nowa', 'Nowa', 'required');
		$this->form_validation->set_rules('instagram', 'Instagram', 'required');
		$this->form_validation->set_rules('facebook', 'Facebook', 'required');
		$this->form_validation->set_rules('twitter', 'twitter', 'required');
		$this->form_validation->set_rules('linkedin', 'Linkedin', 'required');

		if ($this->form_validation->run() != false) {
			$alamat = $this->input->post('alamat');
			$email = $this->input->post('email');
			$nohp = $this->input->post('nohp');
			$nowa = $this->input->post('nowa');
			$instagram = $this->input->post('instagram');
			$facebook = $this->input->post('facebook');
			$twitter = $this->input->post('twitter');
			$linkedin = $this->input->post('linkedin');

			$where = array();

			$data = array(
				'alamat' => $alamat,
				'email' => $email,
				'nohp' => $nohp,
				'nowa' => $nowa,
				'instagram' => $instagram,
				'facebook' => $facebook,
				'twitter' => $twitter,
				'linkedin' => $linkedin,
			);
			// update pengaturan
			$this->m_data->update_data($where, $data, 'kontak');
			redirect(base_url() . 'dashboard?alert=update_success');
		} else {
			redirect(base_url() . 'dashboard?alert=gagal_update');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}

	public function messages()
	{
		$data['messages'] = $this->m_data->get_data('messages')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_messages', $data);
		$this->load->view('dashboard/v_footer');
	}

	public function messages_hapus($id)
	{
		$where = array(
			'messages_id' => $id
		);

		$this->m_data->delete_data($where, 'messages');

		redirect(base_url() . 'dashboard/messages');
	}

	public function ganti_password()
	{
		$data['pengguna'] = $this->m_data->get_data('pengguna')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_ganti_password');
		$this->load->view('dashboard/v_footer');
	}

	public function change_password()
	{
		// form validasi
		$this->form_validation->set_rules('password_lama', 'Password Lama', 'required');
		$this->form_validation->set_rules('password_baru', 'Password Baru', 'required|min_length[8]');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password Baru', 'required|matches[password_baru]');

		// cek validasi
		if ($this->form_validation->run() != false) {
			// menangkap data dari form
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru');
			$konfirmasi_password = $this->input->post('konfirmasi_password');

			// cek kesesuaian password lama dengan id pengguna yang sedang login dan password lama
			$where = array(
				'pengguna_id' => $this->session->userdata('id'),
				'pengguna_password' => md5($password_lama)
			);
			$cek = $this->m_data->cek_login('pengguna', $where)->num_rows();

			// cek kesesuaikan password lama
			if ($cek > 0) {
				// update data password pengguna
				$w = array(
					'pengguna_id' => $this->session->userdata('id')
				);
				$data = array(
					'pengguna_password' => md5($password_baru)
				);
				$this->m_data->update_data($where, $data, 'pengguna');

				// alihkan halaman kembali ke halaman ganti password
				redirect('dashboard/ganti_password?alert=berhasil_ganti_password');
			} else {
				// alihkan halaman kembali ke halaman ganti password
				redirect('dashboard/ganti_password?alert=gagal_ganti_password');
			}
		} else {
			// alihkan halaman kembali ke halaman ganti password
			redirect('dashboard/ganti_password?alert=gagal_ganti_password');
		}
	}
}
