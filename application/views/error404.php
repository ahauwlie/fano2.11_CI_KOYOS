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
        <title>404 NYASAR!</title>
        <!--Favicon-->
        <link href="Earthyellow.ico" rel="icon" type="image/x-icon"/>  
        <!-- Stylesheets -->
        <?php echo $css; ?>
    </head>
    <body>
        <!-- START Scroll Top Button -->
        <a href="javascript:void(0);" id="back-to-top" class="background-btn back_to_top show">
            <i class="flaticon-left-arrow"></i>
        </a>
        <!-- END Scroll Top Button -->
        <!-- START Header -->
        <header style="background-color:black;">
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
                            <li class="breadcrumb-item text-capitalize">
                                <a href="<?php echo site_url('Home'); ?>">Beranda</a>
                                <i class="flaticon-arrows-4"></i>
                            </li>
                            <li class="breadcrumb-item active text-capitalize">404 Nyasar bossq! </li>
                        </ol>
                    </nav>
                    <h1 class="title_h1 font-weight-normal text-capitalize">404 Nyasar bossq! </h1>
                </div>
            </section>
            <!-- END Breadcrumb   -->
            <!-- START 404 Section   -->
            <section class="error_page text-center padding-top-60 padding-bottom-60">
                <div class="container">
                    <!-- <img src="<?php echo base_url('/inti/images/404.png'); ?>" alt="404" class="img-fluid"> -->
                    <h2 class="title_h2 text-capitalize">Halaman tidak ditemukan </h2>
                    <a href="<?php echo site_url('Home'); ?>" class="background-btn text-uppercase">Beranda</a>
                </div>
            </section>
            <!-- END 404 Section  -->
        </div>
        <!-- START Footer -->
        <footer class="wow fadeIn animated">
            <?php echo $footer; ?>
        </footer>
        <!-- END Footer -->
        <?php echo $js; ?>
    </body>
</html>