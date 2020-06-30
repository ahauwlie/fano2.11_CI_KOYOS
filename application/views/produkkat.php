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
    <body style="background-color:black;">
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
            <section class="breadcrumb_section" style="background-color: : #fcb816;">
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
            <section class="padding-top-text-60 padding-bottom-60 featured_section product_list_section product_list_filter_section" style="background-image: url(<?php echo base_url('/inti/images/background/3.png'); ?>);">
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
                                    <div class="category_list">
                                        <div class="category_list_title">
                                            <h5 class="title_h5">Kategori</h5>
                                            <span class="category_close_icon flaticon-down-arrow float-right"></span>
                                        </div>
                                        <div class="layer-filter">
                                            <ul>
                                                <?php foreach ($starts1 as $row ) : ?>
                                                    <li><a><?=  anchor('Produk/showme/'.$row->kategori_bar,$row->kategori_bar,['class'=>'btn btn-default']) ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
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
                                            <label for="short_by" class="title_h5" style="color:#f0d400;">Urut Berdasarkan :</label>
                                            <select class="form-control" id="short_by" name="short_by" onchange="location = this.value;" style="background-color: #f0d400;">
                                                <option value="<?php echo site_url('Produk/min_pro'); ?>">Produk Termurah</option>
                                                <option value="<?php echo site_url('Produk/max_pro'); ?>">Produk Termahal</option>
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
                                            <label for="show"  class="title_h5" style="color:#f0d400;">Perlihatkan :</label>
                                            <select class="form-control" id="show" name="show" style="background-color: #f0d400;"><option>24</option></select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- START Collection Sorting-->
                            <!-- START Products -->
                            <ul class=" category-products  wow fadeIn row">
                                <?php foreach ($comes as $row) : ?>
                                    <li class="col-lg-3 col-md-4 col-6 column3 product  wow fadeInLeft animated" data-wow-duration="1300ms" >
                                    <div class="featured_content">
                                        <div class="featured_img_content">
                                            <img src="<?=  $row->img_1_bar  ?>" alt="f_product" class="img-fluid"/>
                                            <div class="featured_btn vertical_middle">
                                                <a href="<?php echo site_url('Produk/cart'); ?>" class="text-uppercase background-btn add_to_bag_btn">Beli</a>
                                                <a href="<?php echo site_url('Home/detail_barang/'.$row->id_bar); ?>" class="text-uppercase border-btn popup_btn">Lihat</a>
                                            </div>
                                            <a href="javascript:void(0);" class="heart  rounded-circle text-center "><i class="flaticon-heart vertical_middle"></i></a>
                                        </div>
                                        <div class="featured_detail_content" style="background-color: #f0d400; display: block;" >
                                            <a href="<?php echo site_url('Home/detail_barang/'.$row->id_bar); ?>"><p class="featured_title  text-capitalize  text-center"><?=  $row->nama_bar  ?></p></a>
                                            <p class="featured_price title_h5  text-center"><span><?php echo "Rp ".number_format($row->harga_bar, 2,",","."); ?></span></p>
                                        </div>
                                    </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <!-- END Products -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Products List Section -->
        </div>
        <div class="filter-overlay"></div>
        <!-- START Footer -->
        <footer class="wow fadeIn animated">
            <?php echo $footer; ?>
        </footer>
        <!-- END Footer -->
        <?php echo $js; ?>
    </body>
</html>