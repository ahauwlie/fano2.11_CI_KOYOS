<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_admin extends CI_Controller
{
	 public function __construct(){
	    parent::__construct();
	    $this->load->model('model_blog');
	    $this->load->model('model_barang');
	    $this->load->model('user_manage');
  	}

    public function index() {
    	$this->load->library('session');
        $this->load->helper('url');
        if(!$this->session->userdata('login')){
        	$this->load->helper('form');
            $this->load->view('auth/login');
        }else{
        	if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
		        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
		        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
		        $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
		        $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
		        $data['sum_user'] = $this->user_manage->countRow();
		        $data['sum_blog'] = $this->model_blog->countRow();
		        $data['sum_barang'] = $this->model_barang->countRow();
		        $this->load->view('admin/home/home_admin', $data);
			}
		}
    }
}