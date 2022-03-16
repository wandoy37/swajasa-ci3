<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Single extends CI_Controller
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
	}

	public function installationLanWifi()
	{
		$data['title'] = 'Installation LAN & Wi-Fi';
		$data['kontak'] = $this->m_data->get_data('kontak')->result();
		$this->load->view('singel/v_header.php', $data);
		$this->load->view('singel/v_index1.php');
		$this->load->view('landingpages/v_contact.php', $data);
		$this->load->view('singel/v_footer.php');
	}
}
