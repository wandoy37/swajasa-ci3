<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
	}

	public function index()
	{
		$data['kontak'] = $this->m_data->get_data('kontak')->result();
		$this->load->view('landingpages/v_header.php');
		$this->load->view('landingpages/v_mitra.php');
		$this->load->view('landingpages/v_index.php', $data);
		$this->load->view('landingpages/v_contact.php', $data);
		$this->load->view('landingpages/v_footer.php');
	}

	public function send_message()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('messages', 'Messages', 'required');

		if ($this->form_validation->run() != false) {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$messages = $this->input->post('messages');

			$data = array(
				'messages_nama' => $nama,
				'messages_email' => $email,
				'messages_phone' => $phone,
				'messages_text' => $messages
			);
			$this->m_data->insert_data($data, 'messages');
			redirect(base_url() . 'welcome');
		} else {
			redirect(base_url() . 'welcome');
		}
	}
}
