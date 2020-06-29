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
                <th>sku</th>
                <th>ukuran xs</th>
                <th>ukuran s</th>
                <th>ukuran m</th>
                <th>ukuran l</th>
                <th>ukuran xl</th>
                <th>ukuran xxl</th>
                <th>mini text</th>
                <th>mini text 2</th>
                <th>stock</th>
                <th>kategori</th>
                <th>Foto</th>
                <th>Foto 2</th>
                <th>Foto 3</th>
                <th>Foto 4</th>
                <th>Foto 5</th>
              </tr>";
              
              $numrow = 1;
              $kosong = 0;

              foreach($sheet as $row){ 
                $nama_bar = $row['A']; 
                $harga_bar = $row['B']; 
                $deskripsi_bar = $row['C']; 
                $sku_bar = $row['D'];
                $ukuran_xs_bar = $row['E']; 
                $ukuran_s_bar = $row['F']; 
                $ukuran_m_bar = $row['G'];
                $ukuran_l_bar = $row['H'];
                $ukuran_xl_bar = $row['I'];
                $ukuran_xxl_bar = $row['J'];
                $bebas_1_bar = $row['K'];
                $bebas_2_bar = $row['L'];
                $stock_bar = $row['M'];
                $kategori_bar = $row['N'];
                $img_1_bar = $row['O'];
                $img_2_bar = $row['P'];
                $img_3_bar = $row['Q'];
                $img_4_bar = $row['R'];
                $img_5_bar = $row['S'];
                
                if(empty($nama_bar) && ! empty($harga_bar) && ! empty($deskripsi_bar) && ! empty($sku_bar) && ! empty($ukuran_xs_bar) &&  ! empty($ukuran_s_bar) && ! empty($ukuran_m_bar) && ! empty($ukuran_l_bar) && ! empty($ukuran_xl_bar) && ! empty($ukuran_xxl_bar) && ! empty($bebas_1_bar) && ! empty($bebas_2_bar) && ! empty($stock_bar) && ! empty($kategori_bar) && ! empty($img_1_bar) && ! empty($img_2_bar) && ! empty($img_3_bar) && ! empty($img_4_bar) && ! empty($img_5_bar))
                  continue;
                
                if($numrow > 1){
                  $nama_bar_td = ( ! empty($nama_bar))? "" : " style='background: #E07171;'"; 
                  $harga_bar_td = ( ! empty($harga_bar))? "" : " style='background: #E07171;'"; 
                  $deskripsi_bar_td = ( ! empty($deskripsi_bar))? "" : " style='background: #E07171;'";
                  $sku_bar_td = ( ! empty($sku_bar))? "" : " style='background: #E07171;'"; 
                  $ukuran_xs_bar_td = ( ! empty($ukuran_xs_bar))? "" : " style='background: #E07171;'"; 
                  $ukuran_s_bar_td = ( ! empty($ukuran_s_bar))? "" : " style='background: #E07171;'";
                  $ukuran_m_bar_td = ( ! empty($ukuran_m_bar))? "" : " style='background: #E07171;'"; 
                  $ukuran_l_bar_td = ( ! empty($ukuran_l_bar))? "" : " style='background: #E07171;'"; 
                  $ukuran_xl_bar_td = ( ! empty($ukuran_xl_bar))? "" : " style='background: #E07171;'"; 
                  $ukuran_xxl_bar_td = ( ! empty($ukuran_xxl_bar))? "" : " style='background: #E07171;'"; 
                  $bebas_1_bar_td = ( ! empty($bebas_1_bar))? "" : " style='background: #E07171;'";
                  $bebas_2_bar_td = ( ! empty($bebas_2_bar))? "" : " style='background: #E07171;'";
                  $stock_bar_td = ( ! empty($stock_bar))? "" : " style='background: #E07171;'";
                  $kategori_bar_td = ( ! empty($kategori_bar))? "" : " style='background: #E07171;'";
                  $img_1_bar_td = ( ! empty($img_1_bar))? "" : " style='background: #E07171;'";
                  $img_2_bar_td = ( ! empty($img_2_bar))? "" : " style='background: #E07171;'";
                  $img_3_bar_td = ( ! empty($img_3_bar))? "" : " style='background: #E07171;'";
                  $img_4_bar_td = ( ! empty($img_4_bar))? "" : " style='background: #E07171;'";
                  $img_5_bar_td = ( ! empty($img_5_bar))? "" : " style='background: #E07171;'";
                  
                  if(empty($nama_bar) or empty($harga_bar) or empty($deskripsi_bar) or empty($sku_bar) or empty($stock_bar) or  empty($kategori_bar) or empty($img_1_bar)){
                    $kosong++; 
                  }
                  
                  echo "<tr>";
                  echo "<td".$nama_bar_td.">".$nama_bar."</td>";
                  echo "<td".$harga_bar_td.">".$harga_bar."</td>";
                  echo "<td".$deskripsi_bar_td.">".$deskripsi_bar."</td>";
                  echo "<td".$sku_bar_td.">".$sku_bar."</td>";
                  echo "<td".$ukuran_xs_bar_td.">".$ukuran_xs_bar."</td>";
                  echo "<td".$ukuran_s_bar_td.">".$ukuran_s_bar."</td>";
                  echo "<td".$ukuran_m_bar_td.">".$ukuran_m_bar."</td>";
                  echo "<td".$ukuran_l_bar_td.">".$ukuran_l_bar."</td>";
                  echo "<td".$ukuran_xl_bar_td.">".$ukuran_xl_bar."</td>";
                  echo "<td".$ukuran_xxl_bar_td.">".$ukuran_xxl_bar."</td>";
                  echo "<td".$bebas_1_bar_td.">".$bebas_1_bar."</td>";
                  echo "<td".$bebas_2_bar_td.">".$bebas_2_bar."</td>";
                  echo "<td".$stock_bar_td.">".$stock_bar."</td>";
                  echo "<td".$kategori_bar_td.">".$kategori_bar."</td>";
                  echo "<td".$img_1_bar_td.">".$img_1_bar."</td>";
                  echo "<td".$img_2_bar_td.">".$img_2_bar."</td>";
                  echo "<td".$img_3_bar_td.">".$img_3_bar."</td>";
                  echo "<td".$img_4_bar_td.">".$img_4_bar."</td>";
                  echo "<td".$img_5_bar_td.">".$img_5_bar."</td>";
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
