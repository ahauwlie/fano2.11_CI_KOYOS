<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class barang_import_admin extends CI_Controller {
  private $filename = "import_data"; // Kita tentukan nama filenya
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('barang_import');
  }
  
  public function index(){
    $this->load->library('session');
    $this->load->helper('url');
    if(!$this->session->userdata('login')){
      $this->load->helper('form');
        $this->load->view('auth/login');
    }else{
      if($this->session->userdata('login')) {
        $session = $this->session->userdata('login');
        $data['import'] = $this->barang_import->view();
        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
        $this->load->view('admin/barang/view_import_barang', $data);
      }
    }
  }
  
  public function form(){
    $this->load->library('session');
    $this->load->helper('url');
    //jika seasson login belum ada maka tampilkan login
    if(!$this->session->userdata('login')){
      $this->load->helper('form');
        $this->load->view('auth/login');
    }else{
      if($this->session->userdata('login')) {
        $session = $this->session->userdata('login');
        $data = array();
        if(isset($_POST['preview'])){ 
          $upload = $this->barang_import->upload_file($this->filename);
          
          if($upload['result'] == "success"){ 
            include APPPATH.'third_party/PHPExcel/PHPExcel.php';
            
            $excelreader = new PHPExcel_Reader_Excel2007();
            $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); 
            $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
            $data['sheet'] = $sheet; 
          }else{
            $data['upload_error'] = $upload['error']; 
          }
        }
        $data['import'] = $this->barang_import->view();
        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
        $this->load->view('admin/barang/form_import_barang', $data);
      }
    }
  }
  
  public function import(){
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    $excelreader = new PHPExcel_Reader_Excel2007();
    $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); 
    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
    $data = array();
    
    $numrow = 1;
    foreach($sheet as $row){
      if($numrow > 1){
        array_push($data, array(
          'nama_bar'=>$row['A'], 
          'harga_bar'=>$row['B'], 
          'deskripsi_bar'=>$row['C'], 
          'size_bar'=>$row['D'],
          'tag_bar'=>$row['E'],
          'kategori_bar'=>$row['F'],
          'img_1_bar'=>$row['G'],
          'img_2_bar'=>$row['H'],
          'img_3_bar'=>$row['I'],
          'img_4_bar'=>$row['J'],
          'img_5_bar'=>$row['K'],
          'img_6_bar'=>$row['L'],
          'img_7_bar'=>$row['M'],
          'img_8_bar'=>$row['N'],
          'img_9_bar'=>$row['O'],
          'img_10_bar'=>$row['P'],
          'stock_bar'=>$row['Q']
        ));
      }
      
      $numrow++; 
    }
    $this->barang_import->insert_multiple($data);
    
    redirect("barang_import_admin"); 
  }
}