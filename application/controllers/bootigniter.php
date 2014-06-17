<?php if ( ! defined('BASEPATH')) die();
class Bootigniter extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('bootigniter_view');
		$this->load->view('footer');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/bootigniter.php */