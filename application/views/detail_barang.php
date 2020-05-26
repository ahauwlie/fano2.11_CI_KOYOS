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
<html class="no-js" lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
        <meta charset="UTF-8">
        <!-- Required Title -->
        <title>Apa Hayoo | Fano 2.11</title>        
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
                            <li class="breadcrumb-item text-capitalize"><a href="<?php echo site_url('Produk'); ?>">Produk</a> <i class="flaticon-arrows-4"></i></li>
                            <li class="breadcrumb-item active text-capitalize">Apa hayooo</li>
                        </ol>
                    </nav>
                    <h1 class="title_h1 font-weight-normal text-capitalize">Apa hayooo</h1>
                </div>
            </section>
            <!-- END Breadcrumb   -->
            <!-- START Product Detail Section   -->
            <section class="padding-top-text-60 padding-bottom-60 product_detail_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1300ms">
                            <div id="sync1" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img2.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img3.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img4.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                    </div>
                                </div>
                            </div>
                            <div id="sync2" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img2.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img3.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img4.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img3.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_img">
                                        <img src="<?php echo base_url('/inti/images/blue_jacket_img4.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1300ms">
                            <div class="product_content">
                                <div class="product_title">
                                    <span class="product_price title_h4"> Rp 430,000</span>
                                    <span class="stock text-right">Barang Tersedia</span>
                                    <p class="sku_text">SKU: 01-2345678</p>
                                    <div class="star"><img src="<?php echo base_url('/inti/images/star.png'); ?>"  class="img-fluid" alt="star" />(1 Review)</div>
                                </div>

                                <form>
                                    <div class="product_variant">
                                        <div class="form-group color_box">
                                            <label class="title_h5 text-capitalize">Warna</label>
                                            <div class="radio text-uppercase text-center">
                                                <input type="radio" name="color11" id="color11" checked="" >
                                                <label for="color11" class="color1"></label>
                                            </div>
                                            <div class="radio text-uppercase text-center">
                                                <input type="radio" name="color11" id="color21" >
                                                <label for="color21" class="color2"></label>
                                            </div>
                                            <div class="radio text-uppercase text-center">
                                                <input type="radio" name="color11" id="color31" >
                                                <label for="color31" class="color3"></label>
                                            </div>
                                            <div class="radio text-uppercase text-center">
                                                <input type="radio" name="color11" id="color41" >
                                                <label for="color41" class="color4"></label>
                                            </div>
                                        </div>
                                        <div class="form-group size_box">
                                            <label class="title_h5 text-capitalize">Ukuran</label>
                                            <select class="form-control"><option>XS</option><option>S</option><option>M</option><option>L</option><option>XL</option></select>
                                        </div>
                                        <div class="form-group quantity_box">
                                            <label class="title_h5 text-capitalize">Jumlah Barang</label>
                                            <div class="qty_number"><input type="text" value="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></div>
                                        </div>
                                    </div>
                                    <div class="product_btns">
                                        <a href="<?php echo site_url('Home/wishlist'); ?>" class="wishlist_btn border-btn text-uppercase">beli nanti </a>
                                        <!-- <button type="submit" class="background-btn text-uppercase cart_btn">add to bag</button> -->
                                        <a href="<?php echo site_url('Produk/cart'); ?>" class="background-btn text-uppercase cart_btn">beli sekarang</a>
                                        <div class="product_share">
                                            <p>Bagikan</p>
                                            <ul class="social_icons">
                                                <li class="text-center"><a href="javascript:void(0);"><i class="flaticon-facebook vertical_middle"></i></a></li>
                                                <li class="text-center"><a href="javascript:void(0);"><i class="flaticon-pinterest vertical_middle"></i></a></li>
                                                <li class="text-center"><a href="javascript:void(0);"><i class="flaticon-instagram-logo vertical_middle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="product_description padding-top-60">
                        <div class="row">
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="1300ms">
                                <h5 class="title_h5 text-capitalize">Deskripsi</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="1300ms">
                                <h5 class="title_h5 text-capitalize">Bebas isi apa</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="col-md-12 wow fadeInUp" data-wow-duration="1300ms">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="title_h5 btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Apa Hayooo
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="title_h5 btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Apa Hayooo
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class=" btn-link title_h5 text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Reviews (1)
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="review_title">
                                                    <h4 class="title_h4">Customer Reviews</h4>
                                                    <div class="star"><img src="<?php echo base_url('/inti/images/star.png'); ?>" class="img-fluid" alt="star"> 1 review</div>
                                                    <a href="javascript:void(0):" class="write_review_text">Tulis Komentar</a>
                                                </div>
                                                <div class="review_content">
                                                    <div class="user_img rounded-circle">
                                                        <img src="<?php echo base_url('/inti/images/reivew_user.png'); ?>" class="img-fluid vertical_middle" alt="star">
                                                    </div>
                                                    <div class="user_detail">
                                                        <h5 class="title_h5">Ammy G.</h5>
                                                        <span class="review__date">April 5, 2020</span>
                                                        <p>Kerennnn produknya bagusss kk!! Pengiriman cepat
                                                        makasih. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured_section padding-top-text-60 wow fadeIn">
                        <h2 class="text-center title_h3">Produk serupa</h2>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6 wow fadeInLeft" data-wow-duration="1300ms">
                                <div class="featured_content">
                                    <div class="featured_img_content">
                                        <img src="<?php echo base_url('/inti/images/f_product1.png'); ?>" alt="f_product" class="img-fluid">
                                        <div class="featured_btn vertical_middle">
                                            <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                            <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                        </div>
                                        <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                    </div>
                                    <div class="featured_detail_content">
                                        <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Apa Hayooo</p></a>
                                        <p class="featured_price title_h5  text-center"><span>Rp 12,000</span></p>
                                        <div class="featured_variyant  text-center">
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio1" name="size">
                                                <label for="radio1">xs</label>
                                            </div>
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio2" name="size">
                                                <label for="radio2">s</label>
                                            </div>
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio3" name="size">
                                                <label for="radio3">m</label>
                                            </div>
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio4" name="size">
                                                <label for="radio4">l</label>
                                            </div>
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio5" name="size">
                                                <label for="radio5">xl</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 wow fadeInLeft " data-wow-duration="1300ms" data-wow-delay="0.2s">
                                <div class="featured_content">
                                    <div class="featured_img_content">
                                        <img src="<?php echo base_url('/inti/images/f_product2.png'); ?>" alt="f_product" class="img-fluid">
                                        <div class="featured_btn vertical_middle">
                                            <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                            <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                        </div>
                                        <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                    </div>
                                    <div class="featured_detail_content">
                                        <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Apa Hayooo</p></a>
                                        <p class="featured_price title_h5  text-center"><span>Rp 12,000</span></p>
                                        <div class="featured_variyant  text-center">
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio6" name="size">
                                                <label for="radio6">s</label>
                                            </div>
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio7" name="size">
                                                <label for="radio7">m</label>
                                            </div>
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio8" name="size">
                                                <label for="radio8">l</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 wow fadeInLeft" data-wow-duration="1300ms" data-wow-delay="0.4s">
                                <div class="featured_content">
                                    <div class="featured_img_content">
                                        <img src="<?php echo base_url('/inti/images/f_product3.png'); ?>" alt="f_product" class="img-fluid">
                                        <div class="featured_btn vertical_middle">
                                            <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                            <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                        </div>
                                        <div class="product-label  text-uppercase  new-label ">new<span class="diamond_shape"></span></div>
                                        <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                    </div>
                                    <div class="featured_detail_content">
                                        <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Apa Hayooo</p></a>
                                        <p class="featured_price title_h5  text-center"><span>Rp 12,000</span></p>
                                        <div class="featured_variyant  text-center">
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio9" name="size">
                                                <label for="radio9">l</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 wow fadeInLeft " data-wow-duration="1300ms" data-wow-delay="0.6s">
                                <div class="featured_content">
                                    <div class="featured_img_content">
                                        <img src="<?php echo base_url('/inti/images/f_product2.png'); ?>" alt="f_product" class="img-fluid">
                                        <div class="featured_btn vertical_middle">
                                            <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                            <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                        </div>
                                        <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                    </div>
                                    <div class="featured_detail_content">
                                        <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Apa Hayooo</p></a>
                                        <p class="featured_price title_h5  text-center"><span>Rp 12,000</span></p>
                                        <div class="featured_variyant  text-center">
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio16" name="size">
                                                <label for="radio16">s</label>
                                            </div>
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio17" name="size">
                                                <label for="radio17">m</label>
                                            </div>
                                            <div class="radio text-uppercase  text-center">
                                                <input type="radio" id="radio18" name="size">
                                                <label for="radio18">l</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Product Detail Section  -->
        </div>
        <!-- START Quick View Popup Section  -->
        <div id="modalone" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <a href="javascript:void(0);" class="close_popup"><span>&times;</span></a>
                <div class="product_detail_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div id="q_sync1" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid" />
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img2.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img3.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img4.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                </div>
                                <div id="q_sync2" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img2.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img3.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img4.png'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product_content">
                                    <div class="product_title">
                                        <span class="product_price title_h4"> Rp 430,000</span>
                                        <span class="stock text-right">Barang tersedia</span>
                                        <p class="sku_text">SKU: 01-2345678</p>
                                        <div class="star"><img src="<?php echo base_url('/inti/images/star.png'); ?>"  class="img-fluid" alt="star" />(1 Review)</div>
                                    </div>

                                    <form>
                                        <div class="product_variant">
                                            <div class="form-group color_box">
                                                <label class="title_h5 text-capitalize">Warna</label>
                                                <div class="radio text-uppercase text-center">
                                                    <input type="radio" name="color" id="color1" >
                                                    <label for="color1" class="color1"></label>
                                                </div>
                                                <div class="radio text-uppercase text-center">
                                                    <input type="radio" name="color" id="color2" >
                                                    <label for="color2" class="color2"></label>
                                                </div>
                                                <div class="radio text-uppercase text-center">
                                                    <input type="radio" name="color" id="color3" >
                                                    <label for="color3" class="color3"></label>
                                                </div>
                                                <div class="radio text-uppercase text-center">
                                                    <input type="radio" name="color" id="color4" >
                                                    <label for="color4" class="color4"></label>
                                                </div>
                                            </div>
                                            <div class="form-group size_box">
                                                <label class="title_h5 text-capitalize">Ukuran</label>
                                                <select class="form-control">
                                                    <option>XS</option>
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                </select>
                                            </div>
                                            <div class="form-group quantity_box">
                                                <label class="title_h5 text-capitalize">Jumlah barang</label>
                                                <div class="qty_number" onkeypress="return event.charCode >= 48 && event.charCode <= 57"><input type="text" value="1" ></div>
                                            </div>
                                        </div>
                                        <div class="product_btns">
                                            <a href="<?php echo site_url('Home/wishlist'); ?>" class="wishlist_btn border-btn text-uppercase">Beli nanti </a>
                                            <a href="<?php echo site_url('Produk/cart'); ?>" class="background-btn text-uppercase cart_btn">Beli</a>
                                            <!-- <button type="submit" class="background-btn text-uppercase cart_btn">Beli</button> -->
                                            <div class="product_share">
                                                <p>Bagikan</p>
                                                <ul class="social_icons">
                                                    <li class="text-center"><a href="javascript:void(0);"><i class="flaticon-facebook vertical_middle"></i></a></li>
                                                    <li class="text-center"><a href="javascript:void(0);"><i class="flaticon-pinterest vertical_middle"></i></a></li>
                                                    <li class="text-center"><a href="javascript:void(0);"><i class="flaticon-instagram-logo vertical_middle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info_text">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>">Detil lengkap</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Quick View Popup Section  -->
        <!-- START Footer -->
        <footer class="wow fadeIn animated">
            <?php echo $footer; ?>
        </footer>
        <!-- END Footer -->
        <?php echo $js; ?>
    </body>
</html>