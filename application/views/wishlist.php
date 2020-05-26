<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- RequiMerah meta tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
        <meta charset="UTF-8">
        <!-- RequiMerah Title -->
        <title>Wishlist | Earthyellow</title>
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
                            <li class="breadcrumb-item active text-capitalize">Beli nanti</li>
                        </ol>
                    </nav>
                    <h1 class="title_h1 font-weight-normal text-capitalize">Beli nanti</h1>
                </div>
            </section>
            <!-- END Breadcrumb   -->
            <!-- START Wishlist Section   -->
            <section class=" wishlist_section padding-top-60 padding-bottom-60 ">
                <div class="container">
                    <div class="cart_table">
                        <div class="table">
                            <div class="thead">
                                <div class="tr">
                                    <div class="th title_h5 border-bottom border-top">Produk</div>
                                    <div class="th title_h5 border-bottom border-top">Harga</div>
                                    <div class="th title_h5 border-bottom border-top">Jumlah</div>
                                    <div class="th title_h5 border-bottom border-top">Pilihan</div>
                                    <div class="th title_h5 border-bottom border-top"></div>
                                    <div class="th title_h5 border-bottom border-top"></div>
                                </div>
                            </div>
                            <div class="tbody">
                                <div class="tr">
                                    <div class="td border-bottom" data-title="Product">
                                        <div class="product_img d-table-cell ">
                                            <img src="<?php echo base_url('/inti/images/blue_jacket_img.png'); ?>" class="vertical_middle img-fluid" alt="blue Jacket">
                                        </div>
                                        <div class="product_details d-table-cell ">
                                            <div class="product_title">
                                                <a href="<?php echo site_url('Home/detail_barang'); ?>">
                                                    <h5 class="title_h5">Apa Hayooo</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="td border-bottom" data-title="Price">Rp 430,000</div>
                                    <div class="td border-bottom" data-title="Quantity">
                                        <div class="form-group quantity_box d-inline-block">
                                            <div class="qty_number"><input type="text" value="1" >
                                                <div class="inc button"><span>+</span></div>
                                                <div class="dec button"><span>-</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="td border-bottom" data-title="Options">
                                        <div class="wishlist_variant">
                                            <div class="options">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="size" class="title_h5">Ukuran:</label>
                                                        <select class="form-control" id="size" name="size">
                                                            <option>S</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="options">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="color" class="title_h5">Warna:</label>
                                                        <select class="form-control" id="color" name="color">
                                                            <option>Merah</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="td cart_bag border-bottom" data-title="Add To Bag">
                                        <a href="<?php echo site_url('Produk/cart'); ?>">
                                            <i class="flaticon-shopping-bag"></i>
                                        </a>
                                    </div>
                                    <div class="td remove_cart border-bottom text-right" data-title="Remove">
                                        <a href="javascript:void(0);">
                                            <i class="flaticon-close"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="tr">
                                    <div class="td border-bottom" data-title="Product">
                                        <div class="product_img d-table-cell ">
                                            <img src="<?php echo base_url('/inti/images/f_product8.png'); ?>" class="vertical_middle img-fluid" alt="Product">
                                        </div>
                                        <div class="product_details d-table-cell ">
                                            <div class="product_title">
                                                <a href="<?php echo site_url('Home/detail_barang'); ?>">
                                                    <h5 class="title_h5">Apa Hayooo</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="td border-bottom" data-title="Price">Rp 25,000</div>
                                    <div class="td border-bottom" data-title="Quantity">
                                        <div class="form-group quantity_box d-inline-block">
                                            <div class="qty_number"><input type="text" value="1" >
                                                <div class="inc button"><span>+</span></div>
                                                <div class="dec button"><span>-</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="td border-bottom" data-title="Options">
                                        <div class="wishlist_variant">
                                            <div class="options">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="sizes" class="title_h5">Ukuran:</label>
                                                        <select class="form-control" id="sizes" name="sizes">
                                                            <option>S</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="options">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="show" class="title_h5">Warna:</label>
                                                        <select class="form-control" id="show" name="show">
                                                            <option>Merah</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="td cart_bag border-bottom" data-title="Add To Bag">
                                        <a href="<?php echo site_url('Produk/cart'); ?>">
                                            <i class="flaticon-shopping-bag"></i>
                                        </a>
                                    </div>
                                    <div class="td remove_cart border-bottom text-right" data-title="Remove">
                                        <a href="javascript:void(0);">
                                            <i class="flaticon-close"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Wishlist Section  -->
        </div>
        <!-- START Footer -->
        <footer class="wow fadeIn animated">
            <?php echo $footer; ?>
        </footer>
        <!-- END Footer -->
        <?php echo $js; ?>
    </body>
</html>