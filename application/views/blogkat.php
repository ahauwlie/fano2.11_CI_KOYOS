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
        <title>Blog | Fano2.11</title>        
        <!--Favicon-->
        <link href="Earthyellow.ico" rel="icon" type="image/x-icon"/>  
        <!-- Stylesheets -->
        <?php echo $css; ?>
    </head>
    <body style="background-color:black;">
        <!-- START Scroll Top Button -->
        <a href="javascript:void(0);" id="back-to-top" class="background-btn back_to_top show">
            <i class="flaticon-left-arrow"></i>
        </a>
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
                            <li class="breadcrumb-item active text-capitalize">Blog</li>
                        </ol>
                    </nav>
                    <h1 class="title_h1 font-weight-normal text-capitalize">Blog</h1>
                </div>
            </section>
            <!-- END Breadcrumb   -->
            <!-- START Blog Section -->
            <section class="blog_section  padding-top-60 padding-bottom-60" style="background-image: url(<?php echo base_url('/inti/images/background/3.png'); ?>);">
                <div class="blog_list_section wow fadeIn">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($comes as $row) : ?>
                                <div class="col-md-6 wow fadeInLeft animated" data-wow-duration="1300ms">
                                    <div class="blog_content">
                                        <a href="<?php echo site_url('Blog/index/'.$row->id_blog); ?>"><img src="<?=  $row->img_1_blog  ?>" alt="blog" class="img-fluid"></a>
                                        <span class="article__date"><?=  $row->tanggal_blog  ?> | Posted By <?=  $row->nama_admin_blog  ?><span class="diamond_shape"></span></span>
                                        <a href="<?php echo site_url('Blog/index/'.$row->id_blog); ?>">
                                            <h5  class="article__title title_h5"><?=  $row->judul_blog  ?></h5>
                                        </a>
                                        <p class="des"><?=  $row->mini_text_blog  ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Blog Section -->
        </div>
        <!-- START Footer -->
        <footer class="wow fadeIn animated">
            <?php echo $footer; ?>
        </footer>
        <!-- END Footer -->
        <?php echo $js; ?>
    </body>
</html>