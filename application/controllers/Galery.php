<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//$this->load->model('useradmin')
	}

	//index
	public function index(){
		redirect('galery/monsite');
	}

	public function monsite(){
		$this->load->library('user_agent');
		$this->load->model('useradmin');

		$search = $this->input->post('search');
		if (!empty($cari)) {
            $like['judul'] = $cari;
        }
        else {
            $like = NULL;
        }

		$data['posted'] = $this->useradmin->get_data_like($like,'id','ASC','posted')->result();
		$data['headertitle'] = 'Mondayy';

		$this->load->view('web/galery/galery-theme',$data);
	}

	//public function paging{

	//}
}
