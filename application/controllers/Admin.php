<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// Cek apakah sudah login
	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('idadmin')){
			redirect('loginuser/login');
		}
		else {
			$this->load->model('useradmin');
			$this->load->helper('user_helper');
		}
	}

	// Jika sudah login / Tampil halaman beranda
	public function index(){
		redirect('admin/home');
	}

	// Tampil halaman home
	public function home(){
		$data['headertitle'] = 'Mondayy | Home';
		$data['menu'] = 'home';
		$data['menu_induk'] = 'beranda';
		$this->load->view('admin/home/view_home', $data);
	}

	//Tampil Halaman Upload & data
	public function v_upload(){
		$data['headertitle'] = 'Mondayy | Upload';
		$data['menu'] = 'upload';
		$data['menu_induk'] = 'web';
        $data['listauthor'] = $this->useradmin->get_data('id','ASC','author')->result();
		$this->load->view('admin/upload/view_upload', $data);		
	}

	public function v_data(){
		$data['headertitle'] = 'Mondayy | Data';
		$data['menu'] = 'data';
		$data['menu_induk'] = 'web';
		$this->load->view('admin/tabel/view_data', $data);		
	}

    //Upload 
	public function upload_mon()
    {
    	$id_posted = $this->input->post('id_posted');
        $judul = $this->input->post('judul');
        $author = $this->input->post('author');
        //$account = $this->input->post('account');
        //$link_acc = $this->input->post('link_acc');

        $where['id'] = $author;
        $cek = $this->useradmin->get_data_where($where,'author')->row();

        $nama = $cek->nama;
        $account = $cek->account;
        $link_acc = $cek->link;

        $waktu = date('Y-m-d');
        $waktu = str_replace('-', '', $waktu);
        $posted_id = 'MON-'.$id_posted.$waktu;

        $title = str_replace(' ', '_', $judul);

                if(!empty($_FILES['picture']['name'])){

                    $config['upload_path']   = './images/posted/';
                    $config['allowed_types'] = 'jpg|jpeg|gif|png';
                    $newname = pathinfo($_FILES['picture']['name'], PATHINFO_FILENAME);
                    $newname = str_replace(',', '_', $newname);
                    $newname = str_replace('.', '_', $newname);
                    $newname = str_replace('"', '_', $newname);
                    $newname = str_replace("'", "_", $newname);
                    $newname = str_replace(' ', '_', $newname);
                    $config['file_name'] = $newname;

                        if (!is_dir($config['upload_path'])) {
                                mkdir($config['upload_path'], 0777, TRUE);
                        }

                        $this->load->library('upload', $config);
                 
                            if ( ! $this->upload->do_upload('picture')){
                                $text['pesan'] = '<span>Gagal Mengupload Foto</span>'.$this->upload->display_errors();
                                $text['status'] = "gagal";
                                echo json_encode($text);
                                exit();
                            }
                            else{
                                $upload_data = $this->upload->data();
                                $picture_name = $upload_data['file_name'];

                                $this->load->library('image_lib', $config);
                                $this->image_lib->resize();
                                 
                                /* setelah diresize kita buat thumbnailnya */
                                $conf['image_library'] = 'gd2';
                                $conf['source_image'] = './images/posted/'.$picture_name;
                                $conf['new_image'] = './images/thumbnail/'.$picture_name;
                                $conf['create_thumb'] = TRUE;
                                $conf['maintain_ratio'] = TRUE;
                                $conf['width'] = 620;
                                //$conf['height'] = 108;
                                 
                                $this->load->library('image_lib', $conf);
                                $this->image_lib->initialize($conf);
                                $this->image_lib->resize();
                            }

                            $input['id_posted']=$posted_id;
                            $input['judul']=$title;
                            $input['picture']=$picture_name;
                            $input['author']=$nama;
                            $input['account']=$account;
                            $input['link_acc']=$link_acc;

                            $this->useradmin->input_data($input,'posted');
                            $text['pesan'] = '<span>Data Berhasil Disimpan!</span>';
                            $text['status'] = "sukses";
                        }
                    echo json_encode($text);
    }

    //Upload 
    public function upload_batch()
    {
        $id_posted = $this->input->post('id_posted');
        $judul = $this->input->post('judul');
        $author = $this->input->post('author');
        $account = $this->input->post('account');
        $link_acc = $this->input->post('link_acc');

        $waktu = date('Y-m-d');
        $waktu = str_replace('-', '', $waktu);
        $posted_id = 'MON-'.$id_posted.$waktu;

        $title = str_replace(' ', '_', $judul);
        $data = array();


                if(!empty($_FILES['picture']['name'])){

                    $config['upload_path']   = './images/posted/';
                    $config['allowed_types'] = 'jpg|jpeg|gif|png';
                    $newname = pathinfo($_FILES['picture']['name'], PATHINFO_FILENAME);
                    $newname = str_replace(',', '_', $newname);
                    $newname = str_replace('.', '_', $newname);
                    $newname = str_replace('"', '_', $newname);
                    $newname = str_replace("'", "_", $newname);
                    $newname = str_replace(' ', '_', $newname);
                    $config['file_name'] = $newname;

                        if (!is_dir($config['upload_path'])) {
                                mkdir($config['upload_path'], 0777, TRUE);
                        }

                        $this->load->library('upload', $config);
                 
                            if ( ! $this->upload->do_upload('picture')){
                                $text['pesan'] = '<span>Gagal Mengupload Foto</span>'.$this->upload->display_errors();
                                $text['status'] = "gagal";
                                echo json_encode($text);
                                exit();
                            }
                            else{
                                $upload_data = $this->upload->data();
                                $picture_name = $upload_data['file_name'];

                                $this->load->library('image_lib', $config);
                                $this->image_lib->resize();
                                 
                                /* setelah diresize kita buat thumbnailnya */
                                $conf['image_library'] = 'gd2';
                                $conf['source_image'] = './images/posted/'.$picture_name;
                                $conf['new_image'] = './images/thumbnail/'.$picture_name;
                                $conf['create_thumb'] = TRUE;
                                $conf['maintain_ratio'] = TRUE;
                                $conf['width'] = 620;
                                //$conf['height'] = 108;
                                 
                                $this->load->library('image_lib', $conf);
                                $this->image_lib->initialize($conf);
                                $this->image_lib->resize();
                            }

                            $input['id_posted']=$posted_id;
                            $input['judul']=$title;
                            $input['picture']=$picture_name;
                            $input['author']=$nama;
                            $input['account']=$account;
                            $input['link_acc']=$link_acc;

                            $this->useradmin->input_data($input,'posted');
                            $text['pesan'] = '<span>Data Berhasil Disimpan!</span>';
                            $text['status'] = "sukses";
                        }
                    echo json_encode($text);
    }    

    //data posted
    public function data_posted(){
        //$this->load->helper('text');

        $status = $this->input->post('status');
        $cari = $this->input->post('cari');
        $page = $this->input->post('page');
        $dataPerPage = 5;
        if(empty($page)) {
            $noPage = 1;
        }
        else {
            $noPage = $page;
        }
        $offset = ($noPage - 1) * $dataPerPage;

        
        if ($status==NULL) {
            $where = NULL;
        }
        else{
            $status = (int)$status;
            //$where[''] = $status;
        }
        /*if ($status=="1") {
            $where['sent'] = 1;
        }
        if ($status=="0") {
            $where['sent'] = 0;
        }*/
        if (!empty($cari)) {
            $like['judul'] = $cari;
        }
        else {
            $like = NULL;
        }
        $data['list_posted'] = $this->useradmin->get_data_cond($where,$like,'id','ASC',$offset,$dataPerPage,'posted')->result();
    
        $data['noPage'] = $noPage;
        $data['offset'] = $offset;

        $this->load->view('admin/tabel/tabel_posted', $data);
    }  

    //paging data post
    public function paging_posted(){
        $status = $this->input->post('status');
        $cari = $this->input->post('cari');
        $page = $this->input->post('page');
        $dataPerPage = 5;
        if(empty($page)) {
            $noPage = 1;
        }
        else {
            $noPage = $page;
        }
        if (empty($status)) {
            $where = NULL;
        }
        /*
        if ($status=="1") {
            $where['sent'] = 1;
        }
        if ($status=="0") {
            $where['sent'] = 0;
        }*/
        if (!empty($cari)) {
            $like['nama'] = $cari;
        }
        else {
            $like = NULL;
        }
        //$jumData = $this->useradmin->get_paging_member($idpaket,$carimember)->num_rows();
        $jumData = $this->useradmin->get_paging_cond($where,$like,'posted')->num_rows();
        $data['jumData'] = $jumData;
        $data['jumPage'] = ceil($jumData/$dataPerPage);
        $data['noPage'] = $noPage;

        $this->load->view('admin/tabel/paging_posted', $data);
    }

    //delete data post
    public function delete()
    {
        $id = $this->input->post('id');
        $where['id'] = $id;

        $this->useradmin->delete_data($where,'posted');
    }

    //view input author
    public function input_author(){
        $data['headertitle'] = 'Input Author';
        $data['menu'] = 'input_author';
        $data['menu_induk'] = 'author';
        $this->load->view('admin/author/input_author', $data);
    }

    //input author
    public function simpan_author(){

        $nama = $this->input->post('nama');
        $wa = $this->input->post('wa');
        $account = $this->input->post('account');
        $link_acc = $this->input->post('link_acc');   

        $input['nama'] = $nama;
        $input['no_wa'] = $wa;
        $input['account'] = $account;
        $input['link'] = $link_acc;
        $this->useradmin->input_data($input,'author');
    }

    //view page author
    public function data_author(){
        $data['headertitle'] = 'Mondayy | Data Author';
        $data['menu'] = 'data_author';
        $data['menu_induk'] = 'author';
        $this->load->view('admin/author/view_author', $data);      
    }

    //tabel author
    public function tabel_author(){
        
        $cari = $this->input->post('cari');
        $page = $this->input->post('page');

        $dataPerPage = 5;
        if(empty($page)) {
            $noPage = 1;
        }
        else {
            $noPage = $page;
        }
        $offset = ($noPage - 1) * $dataPerPage;
        
        $where = NULL;
        if (!empty($cari)) {
            $like['nama'] = $cari;
        }
        else {
            $like = NULL;
        }
        $data['list_author'] = $this->useradmin->get_data_cond($where,$like,'id','ASC',$offset,$dataPerPage,'author')->result();
    
        $data['noPage'] = $noPage;
        $data['offset'] = $offset;

        $this->load->view('admin/author/tabel_author', $data);
    }

    //paging author
    public function paging_author(){
        
        $cari = $this->input->post('cari');
        $page = $this->input->post('page');
        $dataPerPage = 5;
        if(empty($page)) {
            $noPage = 1;
        }
        else {
            $noPage = $page;
        }
        /*
        if ($status=="1") {
            $where['sent'] = 1;
        }
        if ($status=="0") {
            $where['sent'] = 0;
        }*/
        $where = NULL;
        if (!empty($cari)) {
            $like['nama'] = $cari;
        }
        else {
            $like = NULL;
        }
        //$jumData = $this->useradmin->get_paging_member($idpaket,$carimember)->num_rows();
        $jumData = $this->useradmin->get_paging_cond($where,$like,'author')->num_rows();
        $data['jumData'] = $jumData;
        $data['jumPage'] = ceil($jumData/$dataPerPage);
        $data['noPage'] = $noPage;

        $this->load->view('admin/author/paging_author', $data);
    }

    //delete author
    public function delete_author()
    {
        $id = $this->input->post('id');
        $where['id'] = $id;

        $this->useradmin->delete_data($where,'author');
    }
}