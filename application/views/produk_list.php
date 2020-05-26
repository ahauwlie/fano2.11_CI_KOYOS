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
        <title>Produk | Fano 2.11</title>        
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
                            <li class="breadcrumb-item active text-capitalize">Produk</li>
                        </ol>
                    </nav>
                    <h1 class="title_h1 font-weight-normal text-capitalize">Produk</h1>
                </div>
            </section>
            <!-- END Breadcrumb   -->
            <!-- START Products List Section -->
            <section class="padding-top-text-60 padding-bottom-60 featured_section product_list_section product_list_filter_section ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <!-- START Collection Sidebar-->
                            <div class="collection_sidebar">
                                <div class="sidebar_title padding-bottom-60 hidden-lg">
                                    <h3 class="title_h3">Filter</h3>
                                    <a class="filter_colse" href="javascript:void(0);"><i class="flaticon-close"></i></a>
                                </div>
                                <div class="filter_content mCustomScrollbar">
                                    <!-- START Shopping by -->
                                    <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Saring Produk</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter shopping_by_select">
                                            <div class="select_category">
                                                <div class="fill_type">
                                                    <p class="fill_name">Wanita</p>
                                                    <a href="javascript:void(0);" class="clear text-right text-capitalize" >Hapus</a>
                                                </div>
                                                <div class="fill_value">
                                                    <p>Atasan <i class="flaticon-close"></i></p>
                                                    <p>Bagian luar <i class="flaticon-close"></i></p>
                                                    <p>Mengkilap <i class="flaticon-close"></i></p>
                                                    <a href="javascript:void(0);"  class="flaticon-close"></a>
                                                </div>
                                            </div>
                                            <div class="select_category">
                                                <div class="fill_type">
                                                    <p class="fill_name">Harga</p>
                                                    <a href="javascript:void(0);" class="clear text-right text-capitalize" >Hapus</a>
                                                </div>
                                                <div class="fill_value">
                                                    <span>tidak lebih dari</span><p>Rp 500.000</p>
                                                    <a href="javascript:void(0);"  class="flaticon-close"></a>
                                                </div>
                                            </div>
                                            <div class="select_category">
                                                <div class="fill_type">
                                                    <p class="fill_name">Ukuran</p>
                                                    <a href="javascript:void(0);" class="clear text-right text-capitalize" >Hapus</a>
                                                </div>
                                                <div class="fill_value">
                                                    <p class="text-uppercase">xs <i class="flaticon-close"></i></p>
                                                    <p class="text-uppercase">s <i class="flaticon-close"></i></p>
                                                    <p class="text-uppercase">m <i class="flaticon-close"></i></p>
                                                    <a href="javascript:void(0);"  class="flaticon-close"></a>
                                                </div>

                                            </div>
                                            <div class="select_category">
                                                <div class="fill_type">
                                                    <p class="fill_name">Warna</p>
                                                    <a href="javascript:void(0);" class="clear text-right text-capitalize" >Hapus</a>
                                                </div>
                                                <div class="fill_value">
                                                    <p><span class="color1"></span> <i class="flaticon-close"></i></p>
                                                    <p><span class="color2"></span> <i class="flaticon-close"></i></p>
                                                    <p><span class="color3"></span> <i class="flaticon-close"></i></p>
                                                    <a href="javascript:void(0);"  class="flaticon-close"></a>
                                                </div>
                                                <a href="javascript:void(0);" class="claerall text-uppercase" >Hapus semua</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- START Availability -->
                                    <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Ketersediaan</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <ul>
                                                <li><a href="javascript:void(0);"> Stock Ready</a></li>
                                                <li><a href="javascript:void(0);">Tinggal sedikit</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- START Women -->
                                    <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Wanita</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <div class="search_tag">
                                                <input type="text" placeholder="Cari" class="text-capitalize">
                                                <button type="submit" class="flaticon-magnifying-glass"></button>
                                            </div>
                                            <ul class="women">
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box1" id="box1" checked="">
                                                        <label for="box1">Topi</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box2" id="box2" checked="">
                                                        <label for="box2">Saya</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box3" id="box3" checked="">
                                                        <label for="box3">Bundar</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box5" id="box5">
                                                        <label for="box5">Bundar Topi Saya</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box6" id="box6">
                                                        <label for="box6">Kalau</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box7" id="box7">
                                                        <label for="box7">Tidak Bundar</label>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="loadMore text-uppercase">2 lagi</div>
                                        </div>
                                    </div>
                                    <!-- START Men -->
                                    <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Pria</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <div class="search_tag">
                                                <input type="text" placeholder="Cari" class="text-capitalize">
                                                <button type="submit" class="flaticon-magnifying-glass"></button>
                                            </div>
                                            <ul class="women">
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box1" id="box1" checked="">
                                                        <label for="box1">Topi</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box2" id="box2" checked="">
                                                        <label for="box2">Saya</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box3" id="box3" checked="">
                                                        <label for="box3">Bundar</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box5" id="box5">
                                                        <label for="box5">Bundar Topi Saya</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box6" id="box6">
                                                        <label for="box6">Kalau</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box7" id="box7">
                                                        <label for="box7">Tidak Bundar</label>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="loadMore text-uppercase">2 lagi</div>
                                        </div>
                                    </div>
                                    <!-- START Accessories -->
                                    <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Aksesoris</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <ul>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box17" id="box17">
                                                        <label for="box17">Kacamata</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box18" id="box18">
                                                        <label for="box18">Baret</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box19" id="box19" >
                                                        <label for="box19">Peluru</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="box20" id="box20" >
                                                        <label for="box20">Sepatu</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- START Our Shops -->
                                    <!-- <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Our Shops</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <ul>
                                                <li><a href="javascript:void(0);">New Arrivals</a></li>
                                                <li><a href="javascript:void(0);">Cozy Shop</a></li>
                                                <li><a href="javascript:void(0);">All That Sparkles</a></li>
                                                <li><a href="javascript:void(0);">Online Exclusives </a></li>
                                                <li><a href="javascript:void(0);">Outfit Shop</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <!-- START Collections -->
                                    <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Koleksi</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <ul>
                                                <li><a href="javascript:void(0);">1a</a></li>
                                                <li><a href="javascript:void(0);">2b</a></li>
                                                <li><a href="javascript:void(0);">3c</a></li>
                                                <li><a href="javascript:void(0);">4d </a></li>
                                                <li><a href="javascript:void(0);">5e</a></li>
                                                <li><a href="javascript:void(0);">6f</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- START Price -->
                                    <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Harga</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <div class="range_slider">
                                                <div id="slider"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- START Size -->
                                    <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Ukuran</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <div class="search_tag">
                                                <input type="text" placeholder="Cari" class="text-capitalize">
                                                <button type="submit" class="flaticon-magnifying-glass"></button>
                                            </div>
                                            <ul class="size">
                                                <li>
                                                    <div class="checkbox text-uppercase">
                                                        <input type="checkbox" name="box21" id="box21" checked="">
                                                        <label for="box21">xl</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase">
                                                        <input type="checkbox" name="box22" id="box22" checked="">
                                                        <label for="box22">s</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase">
                                                        <input type="checkbox" name="box23" id="box23" checked="">
                                                        <label for="box23">m</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase">
                                                        <input type="checkbox" name="box24" id="box24" checked="">
                                                        <label for="box24">l</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase">
                                                        <input type="checkbox" name="box25" id="box25">
                                                        <label for="box25">xl</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase">
                                                        <input type="checkbox" name="box26" id="box26">
                                                        <label for="box26">xxl</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase">
                                                        <input type="checkbox" name="box27" id="box27">
                                                        <label for="box27">xxxl</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase">
                                                        <input type="checkbox" name="box28" id="box28">
                                                        <label for="box28">uk 6</label>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="loadMore text-uppercase">4 lagi</div>
                                        </div>
                                    </div>
                                    <!-- START Color -->
                                    <div class="category_list color_box">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Warna</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <div class="search_tag">
                                                <input type="text" placeholder="Cari" class="text-capitalize">
                                                <button type="submit" class="flaticon-magnifying-glass"></button>
                                            </div>
                                            <ul class="color">
                                                <li>
                                                    <div class="checkbox text-uppercase text-center">
                                                        <input type="checkbox" name="box29" id="box29" checked="">
                                                        <label for="box29" class="color1"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase text-center">
                                                        <input type="checkbox" name="box30" id="box30" checked="">
                                                        <label for="box30" class="color2"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase text-center">
                                                        <input type="checkbox" name="box31" id="box31" checked="">
                                                        <label for="box31" class="color3"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase text-center">
                                                        <input type="checkbox" name="box32" id="box32">
                                                        <label for="box32" class="color4"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase text-center">
                                                        <input type="checkbox" name="box33" id="box33">
                                                        <label for="box33" class="color5"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox text-uppercase text-center">
                                                        <input type="checkbox" name="box34" id="box34">
                                                        <label for="box34" class="color6"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="loadMore text-uppercase">2 lagi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- START Collection Sidebar-->
                        </div>
                        <div class="col-lg-9">
                            <!-- START Collection Sorting-->
                            <div class="collection-sorting-row">
                                <div class="filter_menu hidden-lg ">
                                    <a class="title_h5 text-capitalize">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16">
                                        <path id="Filter_Icon" data-name="Filter Icon" fill="#f74f2e" class="cls-1" d="M0,13H5v2H0V13Zm5-1h6v4H5V12Zm6,1H21v2H11V13Zm7-6h3V9H18V7ZM12,6h6v4H12V6ZM0,7H12V9H0V7ZM0,1H3V3H0V1ZM3,0H9V4H3V0ZM9,1H21V3H9V1Z"/>
                                        </svg>                          filter
                                    </a>
                                </div>
                                <div class="short_by">
                                    <form>
                                        <div class="form-group">
                                            <label for="short_by" class="title_h5">Urut Berdasarkan :</label>
                                            <select class="form-control" id="short_by" name="short_by">
                                                <option>Produk Pilihan</option>
                                                <option>Produk Terbaru</option>
                                                <option>Produk Termahal</option>
                                                <option>Produk Termurah</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="product_grid visible-lg d-none">
                                    <ul>
                                        <li class="grid_2 grid-list" data-column="column2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20 30">                                               
                                            <path id="Rectangle_21_copy_20" data-name="Rectangle 21 copy 20" fill="#aaa" class="cls-1" d="M12.008,11.006h7.986v8H12.008v-8Zm-12,0H7.994v8H0.008v-8Zm0,11H7.994v8H0.008v-8Zm12,0h7.986v8H12.008v-8Zm-12-22H8v8H0.009v-8ZM12,0.006h7.991v8H12v-8Z"/>
                                            </svg>
                                        </li>
                                        <li class="grid_3 active grid-list" data-column="column3 product">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="30" viewBox="0 0 32 30">                                                
                                            <path id="Rectangle_21_copy_22" data-name="Rectangle 21 copy 22" fill="#aaa" class="cls-1" d="M12.008,11.006h7.986v8H12.008v-8Zm-12,0H7.994v8H0.008v-8Zm0,11H7.994v8H0.008v-8Zm12,0h7.986v8H12.008v-8Zm-12-22H8v8H0.009v-8ZM12,0.006h7.991v8H12v-8Zm12,11h7.986v8H24.008v-8Zm0,11h7.986v8H24.008v-8Zm0-22h7.991v8H24v-8Z"/>
                                            </svg>
                                        </li>
                                        <li class="grid_4 grid-list" data-column="column4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="30" viewBox="0 0 41 30">
                                            <path id="Rectangle_21_copy_29" data-name="Rectangle 21 copy 29" fill="#aaa" class="cls-1" d="M11.008,11.006h7.986v8H11.008v-8Zm-11,0H7.994v8H0.008v-8Zm0,11H7.994v8H0.008v-8Zm11,0h7.986v8H11.008v-8Zm-11-22H8v8H0.008v-8ZM11,0.006h7.991v8H11v-8Zm11,11h7.986v8H22.008v-8Zm0,11h7.986v8H22.008v-8Zm0-22h7.991v8H22v-8Zm11,11h7.986v8H33.008v-8Zm0,11h7.986v8H33.008v-8Zm0-22h7.991v8H33v-8Z"/>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                                <div class="short_by show_product text-right">
                                    <form>
                                        <div class="form-group">
                                            <label for="show"  class="title_h5">Perlihatkan :</label>
                                            <select class="form-control" id="show" name="show"><option>24</option></select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- START Collection Sorting-->
                            <!-- START Products -->
                            <ul class=" category-products  wow fadeIn row">
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" >
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product1.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Apa Hayooo</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 430,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio1"/>
                                                    <label for="radio1">xs</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio2"/>
                                                    <label for="radio2">s</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio3"/>
                                                    <label for="radio3">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio4"/>
                                                    <label for="radio4">l</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio5"/>
                                                    <label for="radio5">xl</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" data-wow-delay="0.2s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product2.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">apa aja boleh</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 125,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio6"/>
                                                    <label for="radio6">s</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio7"/>
                                                    <label for="radio7">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio8"/>
                                                    <label for="radio8">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" data-wow-delay="0.4s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product3.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  new-label ">Baruu<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Baju bobo</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 2,500</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio9"/>
                                                    <label for="radio9">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product5.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  new-label ">Baruu<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Baju</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 64,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio11"/>
                                                    <label for="radio11">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio12"/>
                                                    <label for="radio12">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms" data-wow-delay="0.2s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product6.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <span class="text-uppercase background-btn sold_out_btn">Kosong!</span>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Remot AC</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 125,000</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms" data-wow-delay="0.4s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product7.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <ul class="product-date">
                                                <li class="day background-btn">
                                                    <span class="no">12</span>
                                                    <span class="text text-capitalize">Hari</span>
                                                </li>
                                            </ul>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  sale-label ">Diskon<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>

                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Kemeja Loreng</p></a>
                                            <p class="featured_price title_h5  text-center"><span class="compare_price">Rp 15,000</span><span>Rp 5,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio13"/>
                                                    <label for="radio13">m</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product4.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <ul class="product-date">
                                                <li class="day background-btn">
                                                    <span class="no">12</span>
                                                    <span class="text text-capitalize">Hari</span>
                                                </li>
                                                <li class="hours background-btn">
                                                    <span class="no">07</span>
                                                    <span class="text text-capitalize">Jam</span>
                                                </li>
                                                <li class="min background-btn">
                                                    <span class="no">30</span>
                                                    <span class="text text-capitalize">Menit</span>
                                                </li>
                                                <li class="second background-btn">
                                                    <span class="no">15</span>
                                                    <span class="text text-capitalize">Detik</span>
                                                </li>
                                            </ul>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase sale-label ">Diskon<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>

                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Celana Jin</p></a>
                                            <p class="featured_price title_h5  text-center"><span class="compare_price">Rp 430,000</span><span>Rp 15,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio14"/>
                                                    <label for="radio14">M</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" data-wow-delay="0.2s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product8.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Jaket Kupluk</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 5,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio15"/>
                                                    <label for="radio15">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" data-wow-delay="0.4s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product1.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Apa Hayooo</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 430,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio16"/>
                                                    <label for="radio16">xs</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio17"/>
                                                    <label for="radio17">s</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio18"/>
                                                    <label for="radio18">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio19"/>
                                                    <label for="radio19">l</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio20"/>
                                                    <label for="radio20">xl</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product5.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  new-label ">Baruu<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Baju</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 64,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio21"/>
                                                    <label for="radio21">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio22"/>
                                                    <label for="radio22">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms" data-wow-delay="0.2s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product3.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  new-label ">Baruu<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Baju bobo</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 2,500</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio23"/>
                                                    <label for="radio23">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms" data-wow-delay="0.4s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product7.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <ul class="product-date">
                                                <li class="day background-btn">
                                                    <span class="no">12</span>
                                                    <span class="text text-capitalize">Hari</span>
                                                </li>
                                            </ul>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  sale-label ">Diskon<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>

                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Kemeja Loreng</p></a>
                                            <p class="featured_price title_h5  text-center"><span class="compare_price">Rp 15,000</span><span>Rp 5,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio24"/>
                                                    <label for="radio24">m</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product1.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Apa Hayooo</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 430,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio25"/>
                                                    <label for="radio25">xs</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio26"/>
                                                    <label for="radio26">s</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio27"/>
                                                    <label for="radio27">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio28"/>
                                                    <label for="radio28">l</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio29"/>
                                                    <label for="radio29">xl</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" data-wow-delay="0.2s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product2.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">apa aja boleh</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 125,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio30"/>
                                                    <label for="radio30">s</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio31"/>
                                                    <label for="radio31">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio32"/>
                                                    <label for="radio32">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" data-wow-delay="0.4s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product3.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  new-label ">Baruu<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Baju bobo</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 2,500</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio33"/>
                                                    <label for="radio33">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product5.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  new-label ">Baruu<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Baju</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 64,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio34"/>
                                                    <label for="radio34">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio35"/>
                                                    <label for="radio35">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms" data-wow-delay="0.2s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product6.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <span class="text-uppercase background-btn sold_out_btn">Kosong!</span>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Remot AC</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 125,000</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms" data-wow-delay="0.4s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product7.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <ul class="product-date">
                                                <li class="day background-btn">
                                                    <span class="no">12</span>
                                                    <span class="text text-capitalize">Hari</span>
                                                </li>
                                            </ul>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  sale-label ">Diskon<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>

                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Kemeja Loreng</p></a>
                                            <p class="featured_price title_h5  text-center"><span class="compare_price">Rp 15,000</span><span>Rp 5,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio36"/>
                                                    <label for="radio36">m</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product4.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <ul class="product-date">
                                                <li class="day background-btn">
                                                    <span class="no">12</span>
                                                    <span class="text text-capitalize">Hari</span>
                                                </li>
                                            </ul>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase sale-label ">Diskon<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>

                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Celana Jin</p></a>
                                            <p class="featured_price title_h5  text-center">
                                                <span class="compare_price">Rp 430,000</span><span>Rp 15,000</span>
                                            </p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio10"/>
                                                    <label for="radio10">M</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" data-wow-delay="0.2s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product8.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Jaket Kupluk</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 5,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio37"/>
                                                    <label for="radio37">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" data-wow-delay="0.4s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product1.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Apa Hayooo</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 430,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio38"/>
                                                    <label for="radio38">xs</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio39"/>
                                                    <label for="radio39">s</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio40"/>
                                                    <label for="radio40">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio41"/>
                                                    <label for="radio41">l</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio42"/>
                                                    <label for="radio42">xl</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product5.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  new-label ">Baruu<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Baju</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 64,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio43"/>
                                                    <label for="radio43">m</label>
                                                </div>
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio44"/>
                                                    <label for="radio44">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInRight animated" data-wow-duration="1300ms" data-wow-delay="0.2s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product3.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  new-label ">Baruu<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Baju bobo</p></a>
                                            <p class="featured_price title_h5  text-center"><span>Rp 2,500</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio46"/>
                                                    <label for="radio46">l</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-4 col-6 column3 product product  wow fadeInRight animated" data-wow-duration="1300ms" data-wow-delay="0.4s">
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?php echo base_url('/inti/images/f_product7.png'); ?>" alt="f_product" class="img-fluid"/>
                                            <ul class="product-date">
                                                <li class="day background-btn">
                                                    <span class="no">12</span>
                                                    <span class="text text-capitalize">Hari</span>
                                                </li>
                                            </ul>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="javascript:void(0);" class="text-uppercase border-btn popup_btn" data-modal="#modalone">Lihat</a>
                                            </div>
                                            <div class="product-label  text-uppercase  sale-label ">Diskon<span class="diamond_shape"></span></div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>

                                        </div>
                                        <div class="featured_detail_content">
                                            <a href="<?php echo site_url('Home/detail_barang'); ?>"><p class="featured_title  text-capitalize  text-center">Kemeja Loreng</p></a>
                                            <p class="featured_price title_h5  text-center"><span class="compare_price">Rp 15,000</span><span>Rp 5,000</span></p>
                                            <div class="featured_variyant  text-center">
                                                <div class="radio text-uppercase  text-center">
                                                    <input type="radio" name="size" id="radio47"/>
                                                    <label for="radio47">m</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- END Products -->
                            <!-- START Products Pagination -->
                            <div class="align-self-center">
                                <ul class="pagination text-center justify-content-center">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="flaticon-arrows-1"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="flaticon-arrows"></i></a></li>
                                </ul>
                            </div>
                            <!-- END Products Pagination -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Products List Section -->
        </div>
        <div class="filter-overlay"></div>
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
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img.png'); ?>'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid" />
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img2.png'); ?>'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img3.png'); ?>'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img4.png'); ?>'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                </div>
                                <div id="q_sync2" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img.png'); ?>'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img2.png'); ?>'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img3.png'); ?>'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_img">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img4.png'); ?>'); ?>" alt="blue_jacket_img" class="vertical_middle img-fluid"/>
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
                                        <div class="star"><img src="<?php echo base_url('/inti/images/star.png'); ?>'); ?>"  class="img-fluid" alt="star" />(1 Review)</div>
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