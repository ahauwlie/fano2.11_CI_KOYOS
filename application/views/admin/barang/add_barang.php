<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Tables</title>
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
      <h1>Tambah Barang Baru</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Tambah Barang Baru</li>
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
                    <input name="nama" id="nama" type="text" maxlength="100" class="form-control" required>
                </div>
                <div class="form-group p-t-4">
                  <label>Deskripsi</label>
                  <div class="box-body pad">
                    <textarea class="textarea" placeholder="Place some text here" name="deskripsi" id="deskripsi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" id="harga" type="number" onKeyDown="if(this.value.length==9) return false;" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>SKU</label>
                    <input name="sku" id="sku" type="number" onKeyDown="if(this.value.length==9) return false;" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input name="stock" id="stock" type="number" onKeyDown="if(this.value.length==3) return false;" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input name="kategori" id="kategori" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Ukuran xs</label>
                    <input name="xs" id="xs" type="text" maxlength="2" placeholder="xs" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ukuran s</label>
                    <input name="s" id="s" type="text" maxlength="2" placeholder="s" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ukuran m</label>
                    <input name="m" id="m" type="text" maxlength="2" value="m" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Ukuran l</label>
                    <input name="l" id="l" type="text" maxlength="2" placeholder="l" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ukuran xl</label>
                    <input name="xl" id="xl" type="text" maxlength="2" placeholder="xl" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ukuran xxl</label>
                    <input name="xxl" id="xxl" type="text" maxlength="2" placeholder="xxl" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group p-t-4">
                    <label>Foto Link</label>
                    <input name="foto" id="foto" type="text" maxlength="255" class="form-control">
                    atau<br>
                    <label>Upload Foto</label>
                    <input name="image" type="file" class="form-control">
                    *wajib isi salah 1'nya baik <span><i>Foto Link</i></span> maupun <span><i>Upload Foto</i></span>*
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 2</label>
                    <input name="foto2" id="foto2" type="text" maxlength="255" class="form-control">
                    atau<br>
                    <label>Upload Foto 2</label>
                    <input name="image2" type="file" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 3</label>
                    <input name="foto3" id="foto3" type="text" maxlength="255" class="form-control">
                    atau<br>
                    <label>Upload Foto 3</label>
                    <input name="image3" type="file" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 4</label>
                    <input name="foto4" id="foto4" type="text" maxlength="255" class="form-control">
                    atau<br>
                    <label>Upload Foto 4</label>
                    <input name="image4" type="file" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 5</label>
                    <input name="foto5" id="foto5" type="text" maxlength="255" class="form-control">
                    atau<br>
                    <label>Upload Foto 5</label>
                    <input name="image5" type="file" class="form-control">
                </div>
                <div class="form-group p-t-4">
                  <label>Mini Text</label>
                  <div class="box-body pad">
                    <textarea class="textarea" placeholder="Place some text here" name="bebas1" id="bebas1" maxlength="255" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                  </div>
                </div>
                <div class="form-group p-t-4">
                  <label>Mini Text 2</label>
                  <div class="box-body pad">
                    <textarea class="textarea" placeholder="Place some text here" name="bebas2" id="bebas2" maxlength="255" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <button class="btn btn-info">Tambah</button>
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
