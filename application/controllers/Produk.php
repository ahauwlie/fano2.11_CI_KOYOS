<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
     public function __construct ()
    {
        parent::__construct();
        $this->load->model('model_barang');
        $this->load->library('pagination');
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "Produk/index";
        $config["total_rows"] = $this->model_barang->record_count();
        $config["per_page"] = 24;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['kategori'] = $this->model_barang->dis_products1();
        $data['barang'] =  $this->model_barang->getAr($config["per_page"], $page);
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        $this->load->view('produk_list', $data);
    }

    public function min_pro(){
        $config = array();
        $config["base_url"] = base_url() . "Produk/index";
        $config["total_rows"] = $this->model_barang->record_count();
        $config["per_page"] = 24;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['kategori'] = $this->model_barang->dis_products1();
        $data['barang'] =  $this->model_barang->minimum($config["per_page"], $page);
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        $this->load->view('produk_list', $data);
    }

    public function max_pro(){
        $config = array();
        $config["base_url"] = base_url() . "Produk/index";
        $config["total_rows"] = $this->model_barang->record_count();
        $config["per_page"] = 24;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['kategori'] = $this->model_barang->dis_products1();
        $data['barang'] =  $this->model_barang->maximum($config["per_page"], $page);
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        $this->load->view('produk_list', $data);
    }

    public function showme($kategori_bar)
    {    
        $data['starts1'] = $this->model_barang->dis_products1();
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        $data['comes'] = $this->model_barang->showme($kategori_bar);
        $this->load->view('produkkat',$data);
    }

    public function cart() {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('layout/navbar.php', NULL, TRUE);
        $this->load->view('cart', $data);
    }
}