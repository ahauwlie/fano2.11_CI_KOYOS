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
        <title>Login | Earthyellow</title>        
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
                            <li class="breadcrumb-item text-capitalize"><a href="<?php echo site_url('Home'); ?>">Beranda</a> <i class="flaticon-arrows-4"></i></li>
                            <li class="breadcrumb-item active text-capitalize">login</li>
                        </ol>
                    </nav>
                    <h1 class="title_h1 font-weight-normal text-capitalize">login</h1>
                </div>
            </section>
            <!-- END Breadcrumb   -->
            <!-- START Login Section   -->
            <section class="login_section padding-top-text-60 padding-bottom-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 border-right">
                            <div class="login_form">
                                <form>
                                    <div class="form-group">
                                        <label for="email" class="title_h5">Email</label>
                                        <input type="email" class="form-control" id="email" name="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="title_h5">Password</label>
                                        <input type="password" class="form-control" id="password" name="Password">
                                    </div>
                                    <div class="login_links ">
                                        <button type="submit" class="btn background-btn text-uppercase">login</button>
                                        <p>atau</p>
                                        <a class="btn-link return_text" href="<?php echo site_url('Home'); ?>">Kembali ke Beranda</a>
                                        <a class="btn-link text-right forgot_text" href="reset_password.html"><u>Lupa Password?</u></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="create_account">
                                <h3 class="text-center title_h3 font-weight-normal">Buat Akun</h3>
                                <p class="text-center">Jika anda belum memiliki akun, <a href="register.html"><u>klik disini</u></a> untuk mendaftar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Login Section  -->
        </div>
        <!-- START Footer -->
        <footer class="wow fadeIn animated">
            <?php echo $footer; ?>
        </footer>
        <!-- END Footer -->
        <?php echo $js; ?>
    </body>
</html>