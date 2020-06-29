<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $css; ?>
  <link href="<?php echo base_url('inti/admin/sweetalert.css'); ?>" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $preloader; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Barang</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Detail Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Nama</label>
                    <p class="form-control-static"><?php echo $barang['nama_bar']; ?></p>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <p class="form-control-static"><?php echo $barang['deskripsi_bar']; ?></p>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <p class="form-control-static">
                      <?php 
                      function rupiah($angka){                        
                          $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                          return $hasil_rupiah;                       
                        }                       
                        echo rupiah($barang['harga_bar']);
                      ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>Size Barang</label>
                    <p class="form-control-static"><?php echo $barang['size_bar']; ?></p>
                </div>
                <div class="form-group">
                    <label>Tag</label>
                    <p class="form-control-static"><?php echo $barang['tag_bar']; ?></p>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <p class="form-control-static"><?php echo $barang['stock_bar']; ?></p>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <p class="form-control-static"><?php echo $barang['kategori_bar']; ?></p>
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 1</label>
                  <p class="form-control-static"><?php echo $barang['img_1_bar']; ?></p>
                  <img src="<?php echo $barang['img_1_bar']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 2</label>
                  <p class="form-control-static"><?php echo $barang['img_2_bar']; ?></p>
                  <img src="<?php echo $barang['img_2_bar']; ?>" style="width: 300px;">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group p-t-4">
                  <label>Foto 3</label>
                  <p class="form-control-static"><?php echo $barang['img_3_bar']; ?></p>
                  <img src="<?php echo $barang['img_3_bar']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 4</label>
                  <p class="form-control-static"><?php echo $barang['img_4_bar']; ?></p>
                  <img src="<?php echo $barang['img_4_bar']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 5</label>
                  <p class="form-control-static"><?php echo $barang['img_5_bar']; ?></p>
                  <img src="<?php echo $barang['img_5_bar']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 6</label>
                  <p class="form-control-static"><?php echo $barang['img_6_bar']; ?></p>
                  <img src="<?php echo $barang['img_6_bar']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 7</label>
                  <p class="form-control-static"><?php echo $barang['img_7_bar']; ?></p>
                  <img src="<?php echo $barang['img_7_bar']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 8</label>
                  <p class="form-control-static"><?php echo $barang['img_8_bar']; ?></p>
                  <img src="<?php echo $barang['img_8_bar']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 9</label>
                  <p class="form-control-static"><?php echo $barang['img_9_bar']; ?></p>
                  <img src="<?php echo $barang['img_9_bar']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 10</label>
                  <p class="form-control-static"><?php echo $barang['img_10_bar']; ?></p>
                  <img src="<?php echo $barang['img_10_bar']; ?>" style="width: 300px;">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <a href="<?php echo site_url('Barang_admin/edit/').$barang['id_bar']; ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo site_url('Barang_admin/index'); ?>" class="btn btn-danger">Batal</a>
                </div>
              </div>
            </div>
          </form>
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
<script src="<?php echo base_url('/inti/admin/js/barang/bootstrap_select.min.js'); ?>"></script>
</body>
</html>
