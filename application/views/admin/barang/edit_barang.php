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
      <h1>Edit Barang</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Edit Barang</li>
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
                    <label>Nama Barang</label>
                    <input name="nama" id="nama" type="text" maxlength="100" class="form-control" value="<?php echo $barang['nama_bar']; ?>" required>
                </div>
                <div class="form-group p-t-4">
                  <label>Deskripsi</label>
                  <div class="box-body pad">
                    <input name="deskripsi" id="deskripsi" value="<?php echo $barang['deskripsi_bar']; ?>" class="form-control" readonly>
                    <textarea class="textarea" placeholder="Jika tidak ingin di ubah abaikan saja yaa...." value="<?php echo $barang['deskripsi_bar']; ?>" name="deskripsi" id="deskripsi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" id="harga" type="number" onKeyDown="if(this.value.length==9) return false;" class="form-control" placeholder="<?php 
                      function rupiah($angka){                        
                          $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                          return $hasil_rupiah;                       
                        }                       
                        echo rupiah($barang['harga_bar']);
                      ?>" required>
                </div>
                <div class="form-group">
                    <label>SKU</label>
                    <input name="sku" id="sku" type="number" onKeyDown="if(this.value.length==9) return false;" class="form-control" value="<?php echo $barang['sku_bar']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Size Barang</label>
                    <input name="xs" id="xs" type="text" maxlength="2" class="form-control" value="<?php echo $barang['ukuran_xs_bar']; ?>" >
                    <input name="s" id="s" type="text" maxlength="2" class="form-control" value="<?php echo $barang['ukuran_s_bar']; ?>" >
                    <input name="m" id="m" type="text" maxlength="2" class="form-control" value="<?php echo $barang['ukuran_m_bar']; ?>" required>
                    <input name="l" id="l" type="text" maxlength="2" class="form-control" value="<?php echo $barang['ukuran_l_bar']; ?>" >
                    <input name="xl" id="xl" type="text" maxlength="2" class="form-control" value="<?php echo $barang['ukuran_xl_bar']; ?>" >
                    <input name="xxl" id="xxl" type="text" maxlength="2" class="form-control" value="<?php echo $barang['ukuran_xxl_bar']; ?>" >
                </div>
                <div class="form-group p-t-4">
                  <label>Mini Text</label>
                  <div class="box-body pad">
                    <input name="bebas1" id="bebas1" value="<?php echo $barang['bebas_1_bar']; ?>" class="form-control" readonly>
                    <textarea class="textarea" placeholder="Jika tidak ingin di ubah abaikan saja yaa...." value="<?php echo $barang['bebas_1_bar']; ?>" name="bebas1" id="bebas1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
                <div class="form-group p-t-4">
                  <label>Mini Text 2</label>
                  <div class="box-body pad">
                    <input name="bebas2" id="bebas2" value="<?php echo $barang['bebas_2_bar']; ?>" class="form-control" readonly>
                    <textarea class="textarea" placeholder="Jika tidak ingin di ubah abaikan saja yaa...." value="<?php echo $barang['bebas_2_bar']; ?>" name="bebas2" id="bebas2" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Kategori</label>
                    <input name="kategori" id="kategori" placeholder="boleh kosong" type="text" value="<?php echo $barang['kategori_bar']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input name="stock" id="stock" type="number" maxlength="3" value="<?php echo $barang['stock_bar']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link</label>
                    <input name="foto" id="foto" type="text" maxlength="255" value="<?php echo $barang['img_1_bar']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 2</label>
                    <input name="foto2" id="foto2" type="text" maxlength="255" value="<?php echo $barang['img_2_bar']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 3</label>
                    <input name="foto3" id="foto3" type="text" maxlength="255" value="<?php echo $barang['img_3_bar']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 4</label>
                    <input name="foto4" id="foto4" type="text" maxlength="255" value="<?php echo $barang['img_4_bar']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 5</label>
                    <input name="foto5" id="foto5" type="text" maxlength="255" value="<?php echo $barang['img_5_bar']; ?>" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <button class="btn btn-info">Edit</button>
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

<!-- <script>
  $(function () {
    $('#tipe').val('<?php echo $artikel['tipe_pr']; ?>').trigger('change');
    $('#tag').val('<?php echo $artikel['tag_pr']; ?>').trigger('change');
  })
</script> -->
<script src="<?php echo base_url('/inti/admin/js/barang/bootstrap_select.min.js'); ?>"></script>
</body>
</html>
