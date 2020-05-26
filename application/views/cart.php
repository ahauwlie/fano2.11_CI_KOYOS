<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 9:11 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Required Title -->
        <title>Keranjang | Fano 2.11</title>
        <!-- Required meta tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
        <meta charset="UTF-8">
        <!--Favicon-->
        <link href="Earthyellow.ico" rel="icon" type="image/x-icon"/>  
        <!-- Stylesheets -->
        <?php echo $css; ?>
    </head>
    <body>
        <!-- START Scroll Top Button -->
        <a href="javascript:void(0);" id="back-to-top" class="background-btn back_to_top show"><i class="flaticon-left-arrow"></i></a>
        <!-- END Scroll Top Button -->
        <!-- START Header -->
        <header>
             <?php echo $navbar; ?>
        </header>
        <div class="menu_overlay"></div>
        <!-- END Header -->
        <div class="main_section">
            <!-- START Breadcrumb   -->
            <section class="breadcrumb_section">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-capitalize"><a href="<?php echo site_url('Home'); ?>">Beranda</a> <i class="flaticon-arrows-4"></i></li>
                            <li class="breadcrumb-item active text-capitalize">Keranjang</li>
                        </ol>
                    </nav>
                    <h1 class="title_h1 font-weight-normal text-capitalize">Keranjang</h1>
                </div>
            </section>
            <!-- END Breadcrumb   -->
            <!-- START Cart Section   -->
            <section class="cart_section login_section padding-top-60 padding-bottom-60 check_out">
                <div class="container">
                    <!-- START Contact From    -->
                    <div class="login_form">
                        <form>
                            <div class="cart_table">
                                <div class="table">
                                    <div class="thead">
                                        <div class="tr">
                                            <div class="th title_h5 border-bottom border-top">Produk</div>
                                            <div class="th title_h5 border-bottom border-top">Harga</div>
                                            <div class="th title_h5 border-bottom border-top">Jumlah Barang</div>
                                            <div class="th title_h5 border-bottom border-top">Total Harga</div>
                                            <div class="th border-bottom border-top"></div>
                                        </div>
                                    </div>
                                    <div class="tbody">
                                        <div class="tr">
                                            <div class="td border-bottom" data-title="Product">
                                                <div class="product_img d-table-cell ">
                                                    <img src="<?php echo base_url('/inti/images/blue_jacket_img.png'); ?>" class="vertical_middle img-fluid" alt="Blue Jacket">
                                                </div>
                                                <div class="product_details d-table-cell ">
                                                    <div class="product_title">
                                                        <a href="<?php echo site_url('Home/detail_barang'); ?>"><h5 class="title_h5">Apa Hayooo</h5></a>
                                                    </div>
                                                    <div class="product_variant">
                                                        <p>Warna: Biru</p>
                                                        <p>Ukuran: XL</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="td border-bottom" data-title="Price">Rp 430,000</div>
                                            <div class="td border-bottom" data-title="Quantity">
                                                <div class="form-group quantity_box">
                                                    <div class="qty_number"><input type="text" value="1" ></div>
                                                </div>
                                            </div>
                                            <div class="td border-bottom" data-title="Total">Rp 430,000</div>
                                            <div class="td remove_cart border-bottom" data-title="Remove">
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon-close"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="cart_subtotal text-right">
                                <div class="subtotal_text">Subtotal</div>
                                <div class="subtotal_price title_h4 text-right">Rp 430,000</div>                                        
                            </div>
                            <div class="cart_btns text-right">
                                <a href="<?php echo site_url('Produk'); ?>" class="text-uppercase border-btn ">Belanja lagi</a>
                                <a href="#" class="text-uppercase background-btn">Bayar Sekarang</a>
                            </div>                            
                            <div class="form-group cart_notes">
                                <label class="title_h5" for="notes">Tambahkan catatan untuk penjual</label>
                                <textarea  class="form-control" id="notes" name="Notes"></textarea>
                            </div>
                        </form>
                    </div>
                    <!-- END Contact From    -->
                </div>
            </section>
            <!-- END Cart Section  -->
        </div>
        <!-- START Footer -->
        <footer class="wow fadeIn animated">
            <?php echo $footer; ?>
        </footer>
        <!-- END Footer -->
        <?php echo $js; ?>
    </body>
</html>