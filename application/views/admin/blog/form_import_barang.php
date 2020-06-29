<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $css; ?>
  <link href="<?php echo base_url('assets/css/admin/sweetalert.css'); ?>" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    input[type="file"], input[type="submit"]{
      display: none;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $preloader; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Import
        <small>- Import Blog</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Upload</a></li>
        <li class="active">Import Blog</li>
      </ol>
    </section>


     <!-- class="form-group btn btn-primary browse m-l-5" -->
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" action="<?php echo site_url("Blog_import_admin/form") ?>" enctype="multipart/form-data">
            <a href="<?php echo base_url("excel/import_data_blog.xlsx"); ?>"class="btn btn-primary"><i class="fa fa-download"></i> Download Format</a><br><br>
            <input id="pilih_file" type="file" name="file">
            <label for="pilih_file" class="form-group btn btn-info browse m-l-5">
              <i class="fa fa-download"> Pilih File</i>
            </label>
            <input type="submit" name="preview" id="ok">
            <label for="ok" class="form-group btn btn-warning browse m-l-5">
              <i class="fa fa-download"> Lihat data(Import)</i>
            </label>
          </form>
          <?php
            if(isset($_POST['preview'])){ 
              if(isset($upload_error)){ 
                echo "<div style='color: red;'>".$upload_error."</div>"; 
                die; 
              }
              
              echo "<form method='post' action='".site_url("Blog_import_admin/import")."'>";
              
              echo "<table border='1' cellpadding='8'>
              <tr>
                <th colspan='9'>Preview Data</th>
              </tr>
              <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Nama Admin</th>
                <th>Quotes</th>
                <th>Quotes Author</th>
                <th>Foto</th>
                <th>Kategori</th>
              </tr>";
              
              $numrow = 1;
              $kosong = 0;

              foreach($sheet as $row){ 
                $judul_blog = $row['A']; 
                $tanggal_blog = $row['B']; 
                $deskripsi_blog = $row['C']; 
                $nama_admin_blog = $row['D'];
                $quotes_blog = $row['E']; 
                $quotes_author_blog = $row['F']; 
                $img_blog = $row['G'];
                $kategori_blog = $row['H'];
                
                if(empty($judul_blog) && ! empty($tanggal_blog) && ! empty($deskripsi_blog) && ! empty($nama_admin_blog) && ! empty($img_blog) &&  ! empty($kategori_blog))
                  continue;
                
                if($numrow > 1){
                  $judul_blog_td = ( ! empty($judul_blog))? "" : " style='background: #E07171;'"; 
                  $tanggal_blog_td = ( ! empty($tanggal_blog))? "" : " style='background: #E07171;'"; 
                  $deskripsi_blog_td = ( ! empty($deskripsi_blog))? "" : " style='background: #E07171;'";
                  $nama_admin_blog_td = ( ! empty($nama_admin_blog))? "" : " style='background: #E07171;'"; 
                  $quotes_blog_td = ( ! empty($quotes_blog))? "" : " style='background: #E07171;'"; 
                  $quotes_author_blog_td = ( ! empty($quotes_author_blog))? "" : " style='background: #E07171;'";
                  $img_blog_td = ( ! empty($img_blog))? "" : " style='background: #E07171;'"; 
                  $kategori_blog_td = ( ! empty($kategori_blog))? "" : " style='background: #E07171;'"; 
                  
                  if(empty($judul_blog) or empty($tanggal_blog) or empty($deskripsi_blog) or empty($nama_admin_blog) or empty($img_blog) or empty($kategori_blog)){
                    $kosong++; 
                  }
                  
                  echo "<tr>";
                  echo "<td".$judul_blog_td.">".$judul_blog."</td>";
                  echo "<td".$tanggal_blog_td.">".$tanggal_blog."</td>";
                  echo "<td".$deskripsi_blog_td.">".$deskripsi_blog."</td>";
                  echo "<td".$nama_admin_blog_td.">".$nama_admin_blog."</td>";
                  echo "<td".$quotes_blog_td.">".$quotes_blog."</td>";
                  echo "<td".$quotes_author_blog_td.">".$quotes_author_blog."</td>";
                  echo "<td".$img_blog_td.">".$img_blog."</td>";
                  echo "<td".$kategori_blog_td.">".$kategori_blog."</td>";
                  echo "</tr>";
                }
                
                $numrow++; 
              }
              
              echo "</table>";
              
              if($kosong > 0){
              ?>  
                <script>
                $(document).ready(function(){
                  $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                  
                  $("#kosong").show();
                });
                </script>
              <?php
              }else{ 
                echo "<hr>";
                echo "<button type='submit' name='import'>Import</button>";
                echo "<a href='".site_url("Blog_import_admin")."'>Cancel</a>";
              }
              
              echo "</form>";
            }
            ?>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $footer; ?>
</div>
<!-- ./wrapper -->

<?php echo $js; ?>

<!-- page script -->
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
</body>
</html>
