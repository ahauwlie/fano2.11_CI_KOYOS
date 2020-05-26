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
    <body>
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
            <section class="blog_section  padding-top-60 padding-bottom-60">
                <div class="blog_list_section wow fadeIn">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeft animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog1.png'); ?>" alt="blog" class="img-fluid"></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5  class="article__title title_h5">Sed ut perspiciatis unde omnis iste natus</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"> <img src="<?php echo base_url('/inti/images/blog2.png'); ?>" alt="blog" class="img-fluid"></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Voluptatem accusantium dolor emque totam</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInLeft animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog3.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Eaque ipsa quae ab illo inventore veritatis et</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog4.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Magni dolores eos qui ratione voluptatem sequi</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInLeft animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog5.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Neque porro quisquam est qui dolorem ipsum</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog6.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Quia dolor sit amet consectetur adipisci velit</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInLeft animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog7.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Sed ut perspiciatis unde omnis iste natus</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog8.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Voluptatem accusantium dolor emque totam</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInLeft animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog9.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Eaque ipsa quae ab illo inventore veritatis et</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"> <img src="<?php echo base_url('/inti/images/blog10.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Magni dolores eos qui ratione voluptatem sequi</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInLeft animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog11.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Neque porro quisquam est qui dolorem ipsum</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight animated" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <a href="<?php echo site_url('Blog'); ?>"><img src="<?php echo base_url('/inti/images/blog12.png'); ?>" alt="blog" class="img-fluid"/></a>
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <a href="<?php echo site_url('Blog'); ?>">
                                        <h5 class="article__title title_h5">Quia dolor sit amet consectetur adipisci velit</h5>
                                    </a>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah...</p>
                                </div>
                            </div>
                            <!-- Blog Pagination  -->
                            <div class="col-md-12 align-self-center">
                                <ul class="pagination text-center justify-content-center">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="flaticon-arrows-1"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="flaticon-arrows"></i></a></li>
                                </ul>
                            </div>
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