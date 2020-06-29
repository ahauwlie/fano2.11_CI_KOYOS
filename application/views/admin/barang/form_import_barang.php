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
        <small>- Import Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Upload</a></li>
        <li class="active">Import Barang</li>
      </ol>
    </section>


     <!-- class="form-group btn btn-primary browse m-l-5" -->
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" action="<?php echo site_url("Barang_import_admin/form") ?>" enctype="multipart/form-data">
            <a href="<?php echo base_url("excel/import_data_barang.xlsx"); ?>"class="btn btn-primary"><i class="fa fa-download"></i> Download Format</a><br><br>
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
              
              echo "<form method='post' action='".site_url("Barang_import_admin/import")."'>";
              
              echo "<table border='1' cellpadding='8'>
              <tr>
                <th colspan='9'>Preview Data</th>
              </tr>
              <tr>
                <th>nama</th>
                <th>harga</th>
                <th>deskripsi</th>
                <th>size</th>
                <th>tag</th>
                <th>kategori</th>
                <th>Foto 1</th>
                <th>Foto 2</th>
                <th>Foto 3</th>
                <th>Foto 4</th>
                <th>Foto 5</th>
                <th>Foto 6</th>
                <th>Foto 7</th>
                <th>Foto 8</th>
                <th>Foto 9</th>
                <th>Foto 10</th>
                <th>Stock</th>
              </tr>";
              
              $numrow = 1;
              $kosong = 0;

              foreach($sheet as $row){ 
                $nama_bar = $row['A']; 
                $harga_bar = $row['B']; 
                $deskripsi_bar = $row['C']; 
                $size_bar = $row['D'];
                $tag_bar = $row['E']; 
                $kategori_bar = $row['F']; 
                $img_1_bar = $row['G'];
                $img_2_bar = $row['H'];
                $img_3_bar = $row['I'];
                $img_4_bar = $row['J'];
                $img_5_bar = $row['K'];
                $img_6_bar = $row['L'];
                $img_7_bar = $row['M'];
                $img_8_bar = $row['N'];
                $img_9_bar = $row['O'];
                $img_10_bar = $row['P'];
                $stock_bar = $row['Q'];
                
                if(empty($nama_bar) && ! empty($harga_bar) && ! empty($deskripsi_bar) && ! empty($size_bar) && ! empty($tag_bar) &&  ! empty($kategori_bar) && ! empty($img_1_bar) && ! empty($img_2_bar) && ! empty($img_3_bar) && ! empty($img_4_bar) && ! empty($img_5_bar) && ! empty($img_6_bar) && ! empty($img_7_bar) && ! empty($img_8_bar) && ! empty($img_9_bar) && ! empty($img_10_bar) && ! empty($stock_bar))
                  continue;
                
                if($numrow > 1){
                  $nama_bar_td = ( ! empty($nama_bar))? "" : " style='background: #E07171;'"; 
                  $harga_bar_td = ( ! empty($harga_bar))? "" : " style='background: #E07171;'"; 
                  $deskripsi_bar_td = ( ! empty($deskripsi_bar))? "" : " style='background: #E07171;'";
                  $size_bar_td = ( ! empty($size_bar))? "" : " style='background: #E07171;'"; 
                  $tag_bar_td = ( ! empty($tag_bar))? "" : " style='background: #E07171;'"; 
                  $kategori_bar_td = ( ! empty($kategori_bar))? "" : " style='background: #E07171;'";
                  $img_1_bar_td = ( ! empty($img_1_bar))? "" : " style='background: #E07171;'"; 
                  $img_2_bar_td = ( ! empty($img_2_bar))? "" : " style='background: #E07171;'"; 
                  $img_3_bar_td = ( ! empty($img_3_bar))? "" : " style='background: #E07171;'"; 
                  $img_4_bar_td = ( ! empty($img_4_bar))? "" : " style='background: #E07171;'"; 
                  $img_5_bar_td = ( ! empty($img_5_bar))? "" : " style='background: #E07171;'";
                  $img_6_bar_td = ( ! empty($img_6_bar))? "" : " style='background: #E07171;'";
                  $img_7_bar_td = ( ! empty($img_7_bar))? "" : " style='background: #E07171;'";
                  $img_8_bar_td = ( ! empty($img_8_bar))? "" : " style='background: #E07171;'";
                  $img_9_bar_td = ( ! empty($img_9_bar))? "" : " style='background: #E07171;'";
                  $img_10_bar_td = ( ! empty($img_10_bar))? "" : " style='background: #E07171;'";
                  $stock_bar_td = ( ! empty($stock_bar))? "" : " style='background: #E07171;'";
                  
                  if(empty($nama_bar) or empty($harga_bar) or empty($deskripsi_bar) or empty($size_bar) or empty($tag_bar) or  empty($kategori_bar) or empty($img_1_bar)){
                    $kosong++; 
                  }
                  
                  echo "<tr>";
                  echo "<td".$nama_bar_td.">".$nama_bar."</td>";
                  echo "<td".$harga_bar_td.">".$harga_bar."</td>";
                  echo "<td".$deskripsi_bar_td.">".$deskripsi_bar."</td>";
                  echo "<td".$size_bar_td.">".$size_bar."</td>";
                  echo "<td".$tag_bar_td.">".$tag_bar."</td>";
                  echo "<td".$kategori_bar_td.">".$kategori_bar."</td>";
                  echo "<td".$img_1_bar_td.">".$img_1_bar."</td>";
                  echo "<td".$img_2_bar_td.">".$img_2_bar."</td>";
                  echo "<td".$img_3_bar_td.">".$img_3_bar."</td>";
                  echo "<td".$img_4_bar_td.">".$img_4_bar."</td>";
                  echo "<td".$img_5_bar_td.">".$img_5_bar."</td>";
                  echo "<td".$img_6_bar_td.">".$img_6_bar."</td>";
                  echo "<td".$img_7_bar_td.">".$img_7_bar."</td>";
                  echo "<td".$img_8_bar_td.">".$img_8_bar."</td>";
                  echo "<td".$img_9_bar_td.">".$img_9_bar."</td>";
                  echo "<td".$img_10_bar_td.">".$img_10_bar."</td>";
                  echo "<td".$stock_bar_td.">".$stock_bar."</td>";
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
                echo "<a href='".site_url("Barang_import_admin")."'>Cancel</a>";
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
