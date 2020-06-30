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
        <!-- Required meta tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
        <meta charset="UTF-8">
        <!-- Required Title -->
        <title>FANO 2.11</title>
        <!--Favicon-->
        <link href="" rel="icon" type="image/x-icon"/>       
        <!-- Stylesheets -->
        <?php echo $css; ?>
    </head>
    <body style="background-color:black;">
        <!-- START Scroll Top Button -->
        <a href="javascript:void(0);" id="back-to-top" class="background-btn back_to_top show">
            <i class="flaticon-left-arrow"></i>
        </a>
        <div id="preloader"></div>
        <!-- END Scroll Top Button -->
        <!-- START Header -->
        <header>
            <?php echo $navbar; ?>
        </header>
        <div class="menu_overlay"></div>
        <!-- END Header -->
        <div class="main_section">
            <!-- START Banner Section -->
            <div class="banner_slider_section">
                <div class="rev_slider_wrapper fullwidthbanner-container">
                    <!-- the ID here will be used in the JavaScript below to initialize the slider -->
                    <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none;">
                        <!-- BEGIN MAIN SLIDE LIST -->
                        <ul>
                            <!-- MINIMUM SLIDE STRUCTURE -->
                            <li data-transition="fade">
                                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                                <img src="<?php echo base_url('/inti/images/banner_img.jpg'); ?>" alt="Sky" class="rev-slidebg">
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption Restaurant-Display   tp-resizeme"
                                     id="slide-3010-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-62','0','0','0']"
                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 5;font-size:48px;line-height: 48px;color:#333;text-transform: capitalize;font-weight: 600;font-family: 'Work Sans';">Koleksi Terbaik </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Restaurant-Cursive   tp-resizeme"
                                     id="slide-3010-layer-2"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-18','0','0','0']"
                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 6;font-size:24px;line-height: 24px;color:#333;letter-spacing: 0;font-weight: normal;font-family: 'Work Sans';">Bolehh kk diliat dulu </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption  "
                                     id="slide-3010-layer-3"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['55','0','0','0']"
                                     data-type="button"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 7; font-size: 18px;line-height: 18px;">
                                    <a href="<?php echo site_url('Produk'); ?>" class="border-btn text-uppercase">Belanja atuh, jangan di liat doang <i class="flaticon-arrows vertical_middle"></i>  </a>
                                </div>
                            </li>
                            <!-- MINIMUM SLIDE STRUCTURE -->
                            <li data-transition="fade">
                                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                                <img src="<?php echo base_url('/inti/images/Banner-2.jpg'); ?>" alt="Sky" class="rev-slidebg">
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption Restaurant-Display   tp-resizeme"
                                     id="slide-3010-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-62','0','0','0']"
                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 5;font-size:48px;line-height: 48px;color:#333;text-transform: capitalize;font-weight: 600;font-family: 'Work Sans';">Koleksi Terbaru </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Restaurant-Cursive   tp-resizeme"
                                     id="slide-3010-layer-5"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-18','0','0','0']"
                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 6;font-size:24px;line-height: 24px;color:#333;letter-spacing: 0;font-weight: normal;font-family: 'Work Sans';">Boleh kk diliat dulu aja</div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption  "
                                     id="slide-3010-layer-6"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['55','0','0','0']"
                                     data-type="button"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 7;font-size: 18px;line-height: 18px;">
                                    <a href="<?php echo site_url('Produk'); ?>" class="border-btn text-uppercase">Belanja atuh, jangan cuma liat! <i class="flaticon-arrows vertical_middle"></i>  </a>
                                </div>
                            </li> <!-- MINIMUM SLIDE STRUCTURE -->
                            <li data-transition="fade">
                                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                                <img src="<?php echo base_url('/inti/images/Banner-3.jpg'); ?>" alt="Sky" class="rev-slidebg">
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption Restaurant-Display   tp-resizeme"
                                     id="slide-3010-layer-7"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-62','0','0','0']"
                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 5;font-size:48px;line-height: 48px;color:#333;text-transform: capitalize;font-weight: 600;font-family: 'Work Sans';">Koleksi Terkeren </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Restaurant-Cursive   tp-resizeme"
                                     id="slide-3010-layer-8"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-18','0','0','0']"
                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 6;font-size:24px;line-height: 24px;color:#333;letter-spacing: 0;font-weight: normal;font-family: 'Work Sans';">udah liatnya? </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption  "
                                     id="slide-3010-layer-9"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['55','0','0','0']"
                                     data-type="button"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 7;font-size: 18px;line-height: 18px;">
                                    <a href="<?php echo site_url('Produk'); ?>" class="border-btn text-uppercase">kuy belanja! <i class="flaticon-arrows vertical_middle"></i>  </a>
                                </div>
                            </li>
                        </ul>
                        <!-- END MAIN SLIDE LIST -->
                    </div>
                </div>
            </div>
            <!-- END Banner Section -->
            <!-- START Collection Section -->
            <div class="home_collection_section padding-top-60 wow fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 wow fadeInLeft animated">
                            <div class="home_collection_content text-center">
                                <img src="<?php echo base_url('/inti/images/women.png'); ?>" alt="women" class="img-fluid"/>
                                <a href="javascript:void(0);" class="vertical_middle text-capitalize">Wanita
                                    <i class="flaticon-arrows"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown animated">
                            <div class="home_collection_content text-center">
                                <img src="<?php echo base_url('/inti/images/men.png'); ?>" alt="men" class="img-fluid"/>
                                <a href="javascript:void(0);" class="vertical_middle text-capitalize">Pria
                                    <i class="flaticon-arrows"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInRight animated ">
                            <div class="home_collection_content text-center">
                                <img src="<?php echo base_url('/inti/images/products.png'); ?>" alt="products``" class="img-fluid"/>
                                <a href="javascript:void(0);" class="vertical_middle text-capitalize">Atribut
                                    <i class="flaticon-arrows"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Collection Section -->
            <!-- START Summer Collection Section -->
            <section class="padding-top-60 wow fadeIn">
                <div class="container">
                    <div class="summer_collection_section text-center wow fadeInUp" >
                        <h2 class="title_h2 text-capitalize">Diskon langka</h2>
                        <a href="<?php echo site_url('Produk'); ?>" class="background-btn text-uppercase">Kuy Belanja!
                            <i class="flaticon-arrows"></i>
                        </a>
                    </div>
                </div>
            </section>
            <!-- END Summer Collection Section -->
            <!-- START Featured Products -->
            <section class="padding-top-text-60 featured_section wow fadeIn" style="background-image: url(<?php echo base_url('/inti/images/background/1.png'); ?>); background-size: cover;">
                <div class="container">
                    <h3 class="title_h3  text-capitalize home_title_h3 text-center" style="color: white;">Produk Pilihan</h3>
                    <div class="row">
                        <?php  foreach ($barang as $row) : ?> 
                            <div class="col-lg-3 col-md-4 col-6 wow fadeInLeft animated" data-wow-duration="1300ms">
                                <div class="featured_content">
                                    <div class="featured_img_content">
                                        <img src="<?=  $row->img_1_bar  ?>" alt="f_product" class="img-fluid"/>
                                        <div class="featured_btn vertical_middle">
                                            <a href="#" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                            <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="<?php echo '#modalone'.$row->id_bar ?>">Lihat</a>
                                        </div>
                                        <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                    </div>
                                    <div class="featured_detail_content" style="background-color: #f0d400; display: block;">
                                        <a href="<?php echo site_url('Home/detail_barang/'.$row->id_bar); ?>"><p class="featured_title  text-capitalize  text-center"><?=  $row->nama_bar  ?></p></a>
                                        <p class="featured_price title_h5  text-center"><span><?php echo "Rp ".number_format($row->harga_bar, 0,",","."); ?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- END Featured Products -->
            <!-- START Home Bolg Section -->
            <section class="blog_section padding-top-text-60 wow fadeIn" style="background-image: url(<?php echo base_url('/inti/images/background/2.png'); ?>); background-size: cover;">
                <div class="container">
                    <h3 class="title_h3  text-capitalize home_title_h3 text-center" style="color: white;">Blog Terbaru</h3>
                    <div class="row">
                        <?php  foreach ($blog as $row) : ?>
                            <div class="col-md-6 wow fadeInLeft" data-wow-duration="1300ms" >
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog/index/'.$row->id_blog); ?>"><img src="<?=  $row->img_1_blog  ?>" alt="blog" class="img-fluid"></a>
                                    <span class="article__date">
                                        <?=  $row->tanggal_blog  ?> | Posted By <?=  $row->nama_admin_blog  ?>
                                        <span class="diamond_shape"></span>
                                    </span>
                                    <a href="<?php echo site_url('Blog/index/'.$row->id_blog); ?>">
                                        <h5  class="article__title title_h5"><?=  $row->judul_blog  ?></h5>
                                    </a>
                                    <p class="des"><?=  $row->mini_text_blog  ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- END Home Bolg Section -->
            <!-- START Brand Logos Section -->
            <section class="padding-top-60 brand_logo_section wow fadeIn">
                <div class="container">
                    <h3 class="title_h3  text-capitalize home_title_h3 text-center wow fadeInDown" style="color: white;">Berkerja sama dengan</h3>
                    <div class="row">
                        <div class="col-3 align-self-center wow fadeInUp" data-wow-duration="1300ms">
                            <div class="brand_logo_img text-center">
                                <img src="" alt="sponsor" class="img-fluid"/>
                            </div>
                        </div>
                        <div class="col-3 align-self-center wow fadeInUp" data-wow-duration="1300ms">
                            <div class="brand_logo_img text-center">
                                <img src="" alt="sponsor" class="img-fluid"/>
                            </div>
                        </div>
                        <div class="col-3 align-self-center wow fadeInUp" data-wow-duration="1300ms">
                            <div class="brand_logo_img text-center">
                                <img src="" alt="sponsor" class="img-fluid"/>
                            </div>
                        </div>
                        <div class="col-3 align-self-center wow fadeInUp" data-wow-duration="1300ms">
                            <div class="brand_logo_img text-center">
                                <img src="" alt="sponsor" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Brand Logos Section -->
            <!-- START Instagram Section -->
            <section class="padding-top-60 instagram_section  wow animated">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 wow fadeInLeft" data-wow-duration="1300ms">
                            <div class="instagram_title">
                                <i class="flaticon-instagram-logo"></i>
                                <h3 class="title_h3  text-capitalize">Follow kita <br>di Instagram </h3>
                                <p>#jbfjskdgboskl</p>
                            </div>
                        </div>
                        <div class="col-md-8 wow fadeInRight" data-wow-duration="1300ms" data-wow-delay="0.2s">
                            <div class="owl-carousel owl-theme instagram_slider" id="instafeed"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Instagram  Section -->
            <!-- START Newsletter Section -->
            <section class="newsletter padding-top-text-60 padding-bottom-60 wow fadeIn">
                <div class="container">
                    <h3 class="title_h3  text-capitalize home_title_h3 text-center wow fadeInUp" style="color: white;">Kalo ada langganan atau kabar" penawaran lewat email nih ko</h3>
                    <form class="form-inline justify-content-center">
                        <input type="email" class="form-control wow fadeInLeft"  placeholder="Masukan Email kamu" name="email">
                        <button type="submit" class="btn border-btn text-uppercase wow fadeInRight">Daftarkan Saya! <i class="flaticon-arrows"></i></button>
                    </form>
                </div>
            </section>
            <!-- END Newsletter Section -->
        </div>
        <!-- START Lihat Popup Section  -->
        <?php  foreach ($barang as $row) : ?>
            <div id="<?php echo 'modalone'.$row->id_bar ?>" class="modal">
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
                                                <img src="<?=  $row->img_1_bar  ?>" alt="foto_rusak!" class="vertical_middle img-fluid" />
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_img">
                                                <img src="<?=  $row->img_2_bar  ?>" alt="foto_rusak!" class="vertical_middle img-fluid"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_img">
                                                <img src="<?=  $row->img_3_bar  ?>" alt="foto_rusak!" class="vertical_middle img-fluid"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_img">
                                                <img src="<?=  $row->img_4_bar  ?>" alt="foto_rusak!" class="vertical_middle img-fluid"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="q_sync2" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="product_img">
                                                <img src="<?=  $row->img_1_bar  ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_img">
                                                <img src="<?=  $row->img_2_bar  ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_img">
                                                <img src="<?=  $row->img_3_bar  ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_img">
                                                <img src="<?=  $row->img_4_bar  ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product_content">
                                        <div class="product_title">
                                            <span class="product_price title_h4">      
                                                <?php echo "Rp ".number_format($row->harga_bar, 0,",","."); ?>                                            
                                            </span>
                                            <span class="stock text-right"><?=  $row->nama_bar  ?></span>
                                            <p class="sku_text">SKU: <?=  $row->sku_bar  ?></p>
                                        </div>
                                        <div class="info_text">
                                            <a href="<?php echo site_url('Home/detail_barang/'.$row->id_bar); ?>">Detil lengkap</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- END Lihat Popup Section  -->
        <!-- START Footer -->
        <footer class="wow fadeIn animated">
            <?php echo $footer; ?>
        </footer>
        <!-- END Footer -->
        <!-- Newsletter pop_up Section -->
        <div class="modal" id="newsletter">
            <div class="newsletter_popup modal-content">
                <div class="news_form">
                    <!-- Start Header Logo-->
                    <div class="header_logo">
                        <a href="<?php echo site_url('Home'); ?>"><img src="<?php echo base_url('/inti/images/logo1.png'); ?>" class="img-fluid" alt="logo" /></a>
                    </div>
                    <!-- End Header Logo-->
                    <h3 class="title_h3">Daftar untuk mendapatkan<span> Penawaran Seru! </span></h3>
                    <!-- <h4 class="title_h4">Your First Order</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ut labore et dolore magna aliqua.</p> -->
                    <a class="new_close"><i class="flaticon-close"></i></a>
                    <form>
                        <div class="form-group text-left">
                            <label for="email" class="text-left title_h5">Masukan email anda</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <input type="submit" class="btn background-btn" value="DAFTAR">
                    </form>
                </div>
            </div>
        </div>
        <!-- Newsletter pop_up Section End -->
        <?php echo $js; ?>
    </body>
</html>