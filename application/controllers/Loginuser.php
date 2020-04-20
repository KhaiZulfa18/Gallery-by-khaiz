<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginuser extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('cookie');
    }

    public function index()
    {
    	redirect('loginuser/login');
    }

	public function login()
	{
		$data['title'] = 'Login';

		$this->load->view('loginuser/login',$data);
	}

	public function aksi_login()
	{
		$this->load->model('mtiket');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$where['username'] = $username;
		$where['password'] = md5($password);
		/*$where = array(
			'username' => $username,
			'password' => md5($password)
			);*/
		$cek = $this->mtiket->cek_login($where,'admin');
		if($cek->num_rows() == 1){
					
                $cookie = array(
                        'name'   => 'cookie_tiket',
                        'value'  => $username,                            
                        'expire' => 1209600 //2 week
                        //'secure' => TRUE
                );
        	    set_cookie($cookie);

        	    $cekrows = $cek->row();
        	    $idadmin = $cekrows->id;

			$data_session = array(
				'idadmin' => $idadmin,
				'namaadmin' => $username,
				'status' => "login"
			);
 
			$this->session->set_userdata($data_session);

			redirect('admin/index');
		}
		else{
			$this->session->set_flashdata('error','Username dan Password Salah!');

			redirect('loginuser/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		delete_cookie('cookie_tiket');

		redirect('loginuser/login');
	}
}