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
        <title>Blog | Fano 2.11</title>
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
                            <li class="breadcrumb-item text-capitalize"><a href="<?php echo site_url('Blog/list'); ?>">Blog</a> <i class="flaticon-arrows-4"></i></li>
                            <li class="breadcrumb-item active text-capitalize">Judul Blog</li>
                        </ol>
                    </nav>
                    <h1 class="title_h1 font-weight-normal">Judul Blog</h1>
                </div>
            </section>
            <!-- END Breadcrumb   -->
            <!-- START Blog Detail Section -->
            <section class="blog_section blog_detail_section padding-top-60 padding-bottom-60">
                <div class="blog_list2_section blog_list_section wow fadeIn">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-xl-9 wow fadeInLeft" data-wow-duration="1300ms">
                                <div class="blog_content">
                                    <!-- Blog Description  -->
                                    <img src="<?php echo base_url('/inti/images/bloglist2_1.png'); ?>" alt="bloglist2" class="img-fluid">
                                    <span class="article__date">Mei 24, 2020 | Posted By Admin<span class="diamond_shape"></span></span>
                                    <p>Bapa Kau setia, Bapa Kau mulia Tenanglah, jiwaku aman bersamaMu Lebih dari harta, Kaulah segalanya Tenanglah, jiwaku dalam hadiratMu Kau tunjukkan kasih setiaMu Kau menyediakan yang 'ku perlu Kau setia, Kau mulia Dulu, sekarang, dan selamanya Kau tunjukkan kasih setiaMu Kau menyediakan yang 'ku perlu Kau setia, Kau mulia Bapa Kau setia Lebih dari harta, Kaulah segalanya Tenanglah, jiwaku dalam hadiratMu</p>
                                    <p>Tunjukkan kasih setiaMu Kau menyediakan yang 'ku perlu Kau setia, Kau mulia Dulu, sekarang, dan selamanya Tunjukkan kasih setiaMu Kau menyediakan yang 'ku perlu Kau setia, Kau mulia Bapa Kau setia Karna kasih setiaMu kami ada sampai saat ini, Tuhan Karna kasih setiaMu lebih dari hidup Maka bibir kami memuji, menyembahMu selamanya, Tuhan Kau</p>
                                    <p>tunjukkan kasih setiaMu Kau menyediakan yang 'ku perlu Kau setia, Kau mulia Dulu, sekarang, dan selamanya Kau tunjukkan kasih setiaMu Kau menyediakan yang 'ku perlu Kau setia, Kau mulia Bapa Kau setia Kau setia, Kau mulia Kau setia, Kau mulia Kau setia, Kau mulia Bapa Kau setia.</p>
                                    <ul class="social_icons">
                                        <li class="text-center"><a href="javascript:void(0);"><i class="flaticon-facebook vertical_middle"></i></a></li>
                                        <li class="text-center"><a href="javascript:void(0);"><i class="flaticon-pinterest vertical_middle"></i></a></li>
                                        <li class="text-center"><a href="javascript:void(0);"><i class="flaticon-instagram-logo vertical_middle"></i></a></li>
                                    </ul>
                                    <!-- Blog Comment  -->
                                    <div class="blog_comment">
                                        <h4 class="title_h4 text-capitalize">Komentar (2)</h4>
                                        <div class="blog_comment_content">
                                            <div class="blog_comment_img rounded-circle">
                                                <img src="<?php echo base_url('/inti/images/account.png'); ?>" alt="bloglist2" class="img-fluid vertical_middle">
                                            </div>
                                            <div class="blog_comment_text">
                                                <h5 class="title_h5 text-capitalize">Ammy G.</h5>
                                                <span class="article__date"> Mei 24, 2020</span>
                                                <p>Sok alim kamu.... </p>
                                            </div>
                                        </div>
                                        <div class="blog_comment_content">
                                            <div class="blog_comment_img rounded-circle">
                                                <img src="<?php echo base_url('/inti/images/account.png'); ?>" alt="bloglist2" class="img-fluid vertical_middle">
                                            </div>
                                            <div class="blog_comment_text">
                                                <h5 class="title_h5 text-capitalize">Naomi Gunadi.</h5>
                                                <span class="article__date">Mei 24, 2020</span>
                                                <p>Maaf ya ka itu lagu... yang sok alim siapa nih? kaka yaa? hahahahahaha</p>
                                            </div>
                                        </div>

                                    </div>
                                    <hr/>
                                    <!-- Blog Leave Comment  -->
                                    <div class="blog_leave_comment padding-bottom-60">
                                        <h4 class="title_h4">Tinggalkan Komentar</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="name" class="title_h5">Nama*</label>
                                                        <input type="text" class="form-control" id="name" name="username" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="form-group">
                                                        <label for="email" class="title_h5">Email*</label>
                                                        <input type="email" class="form-control" id="email" name="email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="comment" class="title_h5">Pesan*</label>
                                                        <textarea class="form-control" id="comment" name="text" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn background-btn text-uppercase">Kirim Komentar</button>
                                        </form>
                                    </div>
                                    <!-- Blog Post Navigation  -->
                                    <div class="blog_post_navigation text-capitalize">
                                        <div class="row">
                                            <div class="blog_post_prev col-6">
                                                <a href="javascript:void(0);">Pos Lama</a>
                                            </div>
                                            <div class="blog_post_next col-6 text-right">
                                                <a href="javascript:void(0);">Post Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 wow fadeInRight" data-wow-duration="1300ms">
                                <!-- Blog Featured Post -->
                                <div class="featured_posts">
                                    <h4 class="title_h4 text-capitalize">Pos Pilihan</h4>
                                    <div class="featured_posts_content">
                                        <div class="featured_posts_img"><img src="<?php echo base_url('/inti/images/post1.png'); ?>" alt="post" class="img-fluid vertical_middle"></div>
                                        <div class="featured_posts_text">
                                            <a href="javascript:void(0);"> <h5 class="title_h5">dfbzgsjtndtgnxxn</h5></a>
                                            <p>March 21, 2020</p>
                                        </div>
                                    </div>
                                    <div class="featured_posts_content">
                                        <div class="featured_posts_img"><img src="<?php echo base_url('/inti/images/post2.png'); ?>" alt="post" class="img-fluid vertical_middle"></div>
                                        <div class="featured_posts_text">
                                            <a href="javascript:void(0);"> <h5 class="title_h5">shdvbksd uidvsbjvj sdjbdnkbl</h5></a>
                                            <p>Mei 21, 2020</p>
                                        </div>
                                    </div>
                                    <div class="featured_posts_content">
                                        <div class="featured_posts_img"> <img src="<?php echo base_url('/inti/images/post3.png'); ?>" alt="post" class="img-fluid vertical_middle"></div>
                                        <div class="featured_posts_text">
                                            <a href="javascript:void(0);">  <h5 class="title_h5">Ut enim ad  minima send</h5></a>
                                            <p>March 29, 2020</p>
                                        </div>
                                    </div>
                                    <div class="featured_posts_content">
                                        <div class="featured_posts_img"> <img src="<?php echo base_url('/inti/images/post4.png'); ?>" alt="post" class="img-fluid vertical_middle"></div>
                                        <div class="featured_posts_text">
                                            <h5 class="title_h5">Quis nostrum ullam corporis</h5>
                                            <p>Mei 1, 2020</p>
                                        </div>
                                    </div>
                                    <!-- Blog Post Instagram  -->
                                    <div class="blog_instagram">
                                        <h4 class="title_h4 text-capitalize">Instagram</h4>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"><img class="img-fluid" src="<?php echo base_url('/inti/images/blog_insta1.png'); ?>" alt="blog_insta"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img class="img-fluid" src="<?php echo base_url('/inti/images/blog_insta2.png'); ?>" alt="blog_insta"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img class="img-fluid" src="<?php echo base_url('/inti/images/blog_insta3.png'); ?>" alt="blog_insta"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img class="img-fluid" src="<?php echo base_url('/inti/images/blog_insta4.png'); ?>" alt="blog_insta"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img class="img-fluid" src="<?php echo base_url('/inti/images/blog_insta5.png'); ?>" alt="blog_insta"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img class="img-fluid" src="<?php echo base_url('/inti/images/blog_insta6.png'); ?>" alt="blog_insta"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img class="img-fluid" src="<?php echo base_url('/inti/images/blog_insta7.png'); ?>" alt="blog_insta"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img class="img-fluid" src="<?php echo base_url('/inti/images/blog_insta8.png'); ?>" alt="blog_insta"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img class="img-fluid" src="<?php echo base_url('/inti/images/blog_insta9.png'); ?>" alt="blog_insta"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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