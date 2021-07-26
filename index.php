<?php
error_reporting(E_ERROR | E_PARSE);
// memulai sesi
session_start();
// bahasa default website
$default_lang = 'bahasa_indonesia';
// jika user merubah bahasa
if($_GET['lang']) {
  // ubah bahasa sesuai keinginan user
  $_SESSION['lang'] = $_GET['lang'];

  // kembalikan ke halaman index.php
  header("Location: index.php?page=".$_GET['page']);
}
// jika tidak ada bahasa terdeteksi
if(!$_SESSION['lang']) {
  // atur bahasa ke bahasa default
  $_SESSION['lang'] = $default_lang;
}
// masukan file bahasa yang sedang aktif
include $_SESSION['lang'] . '.php';

if (!function_exists('base_url')) {
    function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
        if (isset($_SERVER['HTTP_HOST'])) {
            $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
            $hostname = $_SERVER['HTTP_HOST'];
            $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

            $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
            $core = $core[0];

            $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
            $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
            $base_url = sprintf( $tmplt, $http, $hostname, $end );
        }
        else $base_url = 'http://localhost/';

        if ($parse) {
            $base_url = parse_url($base_url);
            if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
        }

        return $base_url;
    }
}
?>


<!DOCTYPE html>
<html lang="bahasa_indonesia">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sembilan Sejahtera</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="PT Sembilan Sejahtera: Menyediakan makanan beku dengan kualitas terbaik dengan harga yang menjangkau semua lapisan masyarakat ">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/agrikon-icons.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">

    <style>
        html {
            scroll-behavior: smooth;
            }
    </style>
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">
        <div id="beranda"></div>
        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <p>Sembilan Sejahtera</p>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <a href="mailto:info@sembilansejahtera.com"><i class="agrikon-icon-email"></i>info@sembilansejahtera.com</a>
                        <a href="#"><i class="agrikon-icon-clock"></i>Mon - Fri 8:00 - 6:00, Sat-Sun - CLOSED</a>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="index.html" aria-label="logo image"><img src="assets/images/logo-dark.png" width="153" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li><a href="index.php?page=home#beranda"><?php echo $lang_beranda;?></a></li>
                        <li><a href="index.php?page=home#produk"><?php echo $lang_produk;?></a></li>
                        <li><a href="index.php?page=about"><?php echo $lang_tentang_kami;?></a></li>
                        <li><a href="index.php?page=whyus"><?php echo $lang_mengapa_kami;?></a></li>
                        <li><a href="index.php?page=home#hubungi"><?php echo $lang_hubungi;?></a> </li>
                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">
                        <a href="tel:92-666-888-0000" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text"><?php echo $lang_hubungi;?></span>
                                <span class="main-header__info-phone-title">+6221 5596 6229</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->
       
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <div id="content">
            <?php include "config.php"; // Load file config.php ?>
        </div>


        <footer class="site-footer">
            <img src="assets/images/icons/footer-bg-icon-1.png" class="site-footer__shape-1" alt="">
            <img src="assets/images/icons/footer-bg-icon-.png" class="site-footer__shape-2" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-widget">
                            <a href="index.html" class="footer-widget__Logo">
                                <img src="assets/images/logo-light.png" width="153" alt="">
                            </a>
                            <p>
                                <?php echo $lang_menjadi_perusahaan_penyedia; ?>
                            </p>
                            
                            <br> 
                            <p class="footer-widget__title"><?php echo $lang_bahasa; ?></p>

                            <?php 
                                $url_bahasa = base_url(true, true) . "index.php?lang=bahasa_indonesia";
                                $url = base_url(true, true) . "index.php?lang=bahasa_inggris";

                                if(isset($_GET['page']) &&  $_GET['page'] != ""){
                                    $url .= "&page=" . $_GET['page'];
                                    $url_bahasa .= "&page=" . $_GET['page'];
                                }
                            ?>
                            <a class="footer-widget__title" href="<?php echo $url?>">ENG</a> 
                            | 
                            <a class="footer-widget__title" href="<?php echo $url_bahasa?>">IND</a>
                            
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            <div class="footer__social">
                                
                            </div><!-- /.topbar__social -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__links-widget">
                            <h3 class="footer-widget__title"><?php echo $lang_tautan; ?></h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="index.php?page=home"><?php echo $lang_beranda; ?></a></li>
                                <li><a href="index.php?page=home#produk"><?php echo $lang_produk; ?></a></li>
                                <li><a href="index.php?page=home#tentang"><?php echo $lang_tentang_kami; ?></a></li>
                                <li><a href="index.php?page=whyus"><?php echo $lang_mengapa_kami; ?></a></li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <h3 class="footer-widget__title"><?php echo $lang_kontak; ?></h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__contact">
                            <li>
                                <i class="agrikon-icon-telephone"></i>
                                <a href="tel:+6221 5596 6229">+6221 5596 6229</a>
                            </li>
                            <li>
                                <i class="fa fa-fax" aria-hidden="true"></i>
                                <a href="tel:+6221 5596 6229">+6221 5596 6229</a>
                            </li>
                            <li style="padding-top: 0;">
                                <i class="agrikon-icon-email"></i>
                                <a href="mailto:info@sembilansejahtera.com">info@sembilansejahtera.com</a>
                            </li>
                           
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <h3 class="footer-widget__title"><?php echo $lang_alamat; ?></h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__contact">
                           
                            <li>
                                <i class="agrikon-icon-pin"></i>
                                <a href="#">
                                    <?php echo $lang_alamat_lengkap; ?>
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.site-footer -->
        <div class="bottom-footer">
            <div class="container">
              
                <p> PT Sembilan Sejahtera © <?php echo $lang_hak_cipta; ?> 2021 <a href="https:/lingkarinovasimuda.com" style="text-decoration: none; color: #b5c3be">Lingkar Inovasi Muda</a></p>
                <div class="bottom-footer__links">
                    
                </div><!-- /.bottom-footer__links -->
            </div><!-- /.container -->
        </div><!-- /.bottom-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="agrikon-icon-telephone"></i>
                    <a href="tel:+6221 5596 6229">+6221 5596 6229</a>
                </li>
                <li>
                    <i class="fa fa-fax" aria-hidden="true"></i>
                    <a href="tel:+6221 5596 6229">+6221 5596 6229</a>
                </li>
                <li>
                    <i class="agrikon-icon-email"></i>
                    <a href="mailto:info@sembilansejahtera.com">info@sembilansejahtera.com</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                <p class="footer-widget__title"><?php echo $lang_bahasa; ?></p>

                <a class="footer-widget__title" href="?<?php echo $url?>">ENG</a> | 
                <a class="footer-widget__title" href="?<?php echo $url_bahasa?>">IND</a>
                </div><!-- /.mobile-nav__language -->
                
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/wNumb.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" >
      $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
      });
    </script>
</body>

</html>