<!-- Start Header Logo-->
<div class="header_logo col_4 visible-lg d-none">
    <a href="<?php echo site_url('Home'); ?>"><img src="<?php echo base_url('/inti/images/logo1.png'); ?>" class="img-fluid" alt="logo" /></a>
</div>
<!-- End Header Logo-->
<!-- Start Header Navigation-->
<div class="col_6 visible-lg d-none">
    <nav class="navbar-dark navbar-expand-lg navbar">
        <!-- Navigation menu container -->
        <div class="navbar-collapse collapse" id="collapseNavbar">
            <!-- Navigation links -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="<?php echo site_url('Home'); ?>">Beranda </a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link text-uppercase dropdown-toggle" style="color: #f0d400;" href="<?php echo site_url('Produk'); ?>">Produk</a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link text-uppercase" style="color: #f0d400;" href="<?php echo site_url('Blog/list'); ?>">Blog</a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link text-uppercase  dropdown-toggle" style="color: #f0d400;" href="javascript:void(0);">Lainnya</a>
                    <span class="menu_arrow flaticon-down-arrow-1"></span>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="w-100"><a href="#">hayo isi apa</a></li>
                        <li class="w-100"><a href="#">hayo isi apa</a></li>
                        <li class="w-100"><a href="#">hayo isi apa</a></li>
                        <li class="w-100"><a href="#">hayo isi apa</a></li>
                        <li class="w-100"><a href="#">hayo isi apa</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Header Navigation-->
<!-- Start Header Social Menu -->
<div class="col_3 visible-lg d-none">
    <ul class="social_icons float-md-right">
        <!-- Social links -->
        <li class="login_icon">
            <a style="color: #f0d400;" href="<?php echo site_url('Login'); ?>"><i class="flaticon-social"></i></a>
        </li>
        <li class="wishlist_icon">
            <a style="color: #f0d400;" href="<?php echo site_url('Home/wishlist'); ?>"><i class="flaticon-heart"></i></a>
        </li>
        <li class="search_icon">
            <a style="color: #f0d400;" href="javascript:void(0);"><i class="flaticon-magnifying-glass"></i></a>
            <div class="search_form">
                <form>
                    <input type="text"  placeholder="Cari Produk" class="text-capitalize" />
                    <button type="submit" class="vertical_middle"><i class="flaticon-magnifying-glass"></i></button>
                </form>
            </div>
        </li>
        <li class="cart_icon">
            <a style="color: #f0d400;" href="<?php echo site_url('Produk/cart'); ?>">
            <i class="flaticon-shopping-bag"></i>
            <span class="count text-white rounded-circle text-center">2 </span>
            </a>
        </li>
    </ul>
</div>
<!-- End Header Social Menu -->
<!-- Start Header Currency-->
<div class="header_currency col_4 text-right visible-lg d-none">
    <a style="color: #f0d400;" href="<?php echo site_url('Home'); ?>">Bebas isi apa</a>
</div>
<!-- End Header Currency-->
<div class="header_mobile hidden-lg d-block">
    <!-- Start Header Currency-->
    <div class="header_currency text-right">
        <a style="color: #f0d400;" href="<?php echo site_url('Home'); ?>">Bebas isi apa</a>
    </div>
    <!-- End Header Currency-->
    <!-- Start Header Social Menu -->
    <div class="social_icons_content">
        <ul class="social_icons float-md-right">
            <!-- Social links -->
            <li class="login_icon">
                <a style="color: #f0d400;" href="<?php echo site_url('Login'); ?>"><i class="flaticon-social"></i></a>
            </li>
            <li class="wishlist_icon">
                <a style="color: #f0d400;" href="<?php echo site_url('Home/wishlist'); ?>"><i class="flaticon-heart"></i></a>
            </li>
            <li class="search_icon">
                <a style="color: #f0d400;" href="javascript:void(0);"><i class="flaticon-magnifying-glass"></i></a>
                <div class="search_form">
                    <form>
                        <input type="text"  placeholder="Cari Produk" class="text-capitalize" />
                        <button type="submit" class="vertical_middle"><i class="flaticon-magnifying-glass"></i></button>
                    </form>
                </div>
            </li>
            <li class="cart_icon">
                <a style="color: #f0d400;" href="<?php echo site_url('Produk/cart'); ?>">
                <i class="flaticon-shopping-bag"></i>
                <span class="count text-white rounded-circle text-center">2 </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Header Social Menu -->
    <!-- Start Header Logo-->
    <div class="header_logo col_4">
        <a href="<?php echo site_url('Home'); ?>"><img src="<?php echo base_url('/inti/images/logo1.png'); ?>" class="img-fluid" alt="logo" /></a>
    </div>
    <!-- End Header Logo-->
    <!-- Start Header Navigation-->
    <nav class="navbar-dark navbar-expand-lg navbar">
        <!-- Button for toggling the visibility of the menu -->
        <button type="button" data-toggle="collapse" class="navbar-toggler">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" viewBox="0 0 28 26">
                <path id="menu" class="cls-1" fill="#333" d="M0,0H28V2H0V0ZM0,8H20v2H0V8Zm0,8H28v2H0V16Zm0,8H17v2H0V24Z"></path>
            </svg>
        </button>
        <!-- Navigation menu container -->
        <div class="navbar-collapse collapse">
            <!-- Navigation links -->
            <div class="close_icon"><a class="menu_colse" href="javascript:void(0);"><i class="flaticon-close"></i></a></div>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="<?php echo site_url('Home'); ?>">Beranda </a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link text-uppercase dropdown-toggle" href="<?php echo site_url('Produk'); ?>">Produk</a>
                    <span class="menu_arrow flaticon-down-arrow-1"></span>
                    <ul class="dropdown-menu megamenu_mobile">
                        <li class="w-100 nav-item">
                            <a href="javascript:void(0);" class="nav-link">products</a>
                            <span class="menu_arrow flaticon-down-arrow-1"></span>
                            <ul>
                                <li class="w-100"><a href="javascript:void(0);">Seragam</a></li>
                                <li class="w-100"><a href="javascript:void(0);">Senjata</a></li>
                                <li class="w-100"><a href="javascript:void(0);">Aksesoris</a></li>
                                <li class="w-100"><a href="javascript:void(0);">Atribut</a></li>
                            </ul>
                        </li>
                        <li class="w-100 nav-item">
                            <a href="javascript:void(0);" class="nav-link">Kategori-1</a>
                            <span class="menu_arrow flaticon-down-arrow-1"></span>
                            <ul>
                                <li class="w-100"><a href="javascript:void(0);">Isi apa hayo</a></li>
                                <li class="w-100"><a href="javascript:void(0);">Isi apa hayo</a></li>
                                <li class="w-100"><a href="javascript:void(0);">Isi apa hayo</a></li>
                            </ul>
                        </li>
                        <li class="w-100 nav-item">
                            <a href="javascript:void(0);" class="nav-link">Kategori-2</a>
                            <span class="menu_arrow flaticon-down-arrow-1"></span>
                            <ul>
                                <li class="w-100"><a href="javascript:void(0);">Isi apa hayo</a></li>
                                <li class="w-100"><a href="javascript:void(0);">Isi apa hayo</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link text-uppercase" href="<?php echo site_url('Blog/list'); ?>">Blog</a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link text-uppercase  dropdown-toggle" href="javascript:void(0);">Lainnya</a>
                    <span class="menu_arrow flaticon-down-arrow-1"></span>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="w-100"><a href="<?php echo site_url('Home'); ?>">isi apa hayoo</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Header Navigation-->
</div>