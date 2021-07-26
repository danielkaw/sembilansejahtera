<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{
            "slidesPerView": 1,
            "loop": true,
            "effect": "fade",
            "autoplay": {
                "delay": 12000
            },
            "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
            }
        }'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-1.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            
                            <span class="tagline"><p><?php echo $lang_selamat_datang; ?></p> </span>
                            <h2><span>Sembilan</span> <br>
                                Sejahtera</h2>

                            <p><?php echo $lang_menyediakan_makanan; ?>
                            <br>
                            <a href="#" class=" thm-btn"><?php echo $lang_selengkapnya; ?></a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.col-lg-7 text-right -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.swiper-slide -->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-2.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <span class="tagline"><?php echo $lang_produk_kami; ?></span>
                            <h2><span><?php echo $lang_berkualitas; ?></span><br>
                                & <?php echo $lang_harga_terbaik; ?></h2>
                            <p><?php echo $lang_memenuhi_kebutuhan; ?></p>
                            <a href="#" class=" thm-btn"><?php echo $lang_selengkapnya; ?></a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.col-lg-7 text-right -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.swiper-slide -->
        </div><!-- /.swiper-wrapper -->

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
        </div><!-- /.main-slider__nav -->

    </div><!-- /.swiper-container thm-swiper__slider -->
</section><!-- /.main-slider -->

<section class="service-one mb-0">
</section>

<div id="tentang"></div>
<section class="about-one pt-0" style="top:-50px">
    <img src="assets/images/icons/about-bg-icon-1-1.png" class="about-one__bg-shape-1" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-one__images">
                    <img src="assets/images/resources/about-1-1.jpg" alt="">
                    <img src="assets/images/resources/about-1-2.jpg" alt="">
                    <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                        <span><?php echo $lang_dipercaya; ?></span>
                        <h4>100+</h4>
                    </div><!-- /.about-one__count -->
                </div><!-- /.about-one__images -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-7">
                <div class="about-one__content">
                    <div class="block-title text-left">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p><?php echo $lang_tentang_kami; ?></p>
                        <h3><?php echo $lang_kualitas_terbaik; ?></h3>
                    </div><!-- /.block-title -->
                    <div class="about-one__tagline">
                        <p>PT Sembilan Sejahtera <?php echo $lang_sembilan_sudah_delapan_tahun; ?></p>
                    </div><!-- /.about-one__tagline -->
                    <div class="about-one__summery">
                        <p>
                            PT. Sembilan Sejahtera <?php echo $lang_adalah_perusahan_profesional; ?>
                        </p>
                    </div><!-- /.about-one__summery -->
                    <div class="about-one__icon-row">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-one__box">
                                    <i class="agrikon-icon-farmer"></i>
                                    <h4><a href="about.html"><?php echo $lang_sdm; ?></a></h4>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="about-one__box">
                                    <i class="agrikon-icon-agriculture"></i>
                                    <h4><a href="services.html"><?php echo $lang_jaminan_mutu; ?></a></h4>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.about-one__icon-row -->
                    <a href="index.php?page=about" class="thm-btn"><?php echo $lang_selengkapnya; ?></a><!-- /.thm-btn -->
                </div><!-- /.about-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-one -->

<section class="service-two" id="produk">
    <div class="service-two__bottom-curv"></div><!-- /.service-two__bottom-curv -->
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__image"></div><!-- /.block-title__image -->
            <p><?php echo $lang_daftar_produk_kami; ?></p>
            <h3><?php echo $lang_apa_yang_kami_tawarkan; ?></h3>
        </div><!-- /.block-title -->
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="assets/images/services/ss1.jpg" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="las la-egg"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html"><?php echo $lang_ayam; ?></a></h3>
                        <p><?php echo $lang_ayam_karkas; ?></p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="assets/images/services/ss2.jpg" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="las la-fish"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html"><?php echo $lang_ikan_beku; ?></a></h3>
                        <p><?php echo $lang_tengiri_batang; ?></p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="assets/images/services/ss3.jpg" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="las la-bacon"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html"><?php echo $lang_daging_sapi; ?></a></h3>
                        <p><?php echo $lang_tenderloin_striploin; ?></p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="assets/images/services/ss4.jpg" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="las la-seedling"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html"><?php echo $lang_kentang; ?></a></h3>
                        <p><?php echo $lang_kentang_dll; ?></p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-two -->

<div class="projects-one project-one__home-one">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__image"></div><!-- /.block-title__image -->
            <p><?php echo $lang_fasilitas; ?></p>
            <h3><?php echo $lang_fasilitas_pendukung; ?></h3>
        </div><!-- /.block-title -->
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
    "el": "#projects-one__swiper-pagination",
    "type": "bullets",
    "clickable": true
},
"breakpoints": {
    "0": {
        "spaceBetween": 0,
        "slidesPerView": 1,
        "slidesPerGroup": 1
    },
    "640": {
        "spaceBetween": 30,
        "slidesPerView": 2,
        "slidesPerGroup": 2
    },
    "992": {
        "spaceBetween": 30,
        "slidesPerView": 2,
        "slidesPerGroup": 2
    }
}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="projects-one__single">
                        <img src="assets/images/fasilitas/fasilitas1.jpg" alt="">
                    </div><!-- /.projects-one__single -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="projects-one__single">
                        <img src="assets/images/fasilitas/fasilitas2.jpeg" alt="">
                    </div><!-- /.projects-one__single -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="projects-one__single">
                        <img src="assets/images/fasilitas/fasilitas3.jpeg" alt="">
                    </div><!-- /.projects-one__single -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="projects-one__single">
                        <img src="assets/images/fasilitas/fasilitas4.jpeg" alt="">
                    </div><!-- /.projects-one__single -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="projects-one__single">
                        <img src="assets/images/fasilitas/fasilitas5.jpeg" alt="">
                    </div><!-- /.projects-one__single -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="projects-one__single">
                        <img src="assets/images/fasilitas/fasilitas6.jpeg" alt="">
                    </div><!-- /.projects-one__single -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
            <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
        </div><!-- /.swiper-container -->
    </div><!-- /.container -->
</div><!-- /.projects-one -->


<section class="contact-two client-carousel__has-border-top" id="hubungi">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                <div class="contact-two__image">
                    <div class="contact-two__image-bubble-1"></div><!-- /.contact-two__image-bubble-1 -->
                    <div class="contact-two__image-bubble-2"></div><!-- /.contact-two__image-bubble-2 -->
                    <div class="contact-two__image-bubble-3"></div><!-- /.contact-two__image-bubble-3 -->
                    <img src="assets/images/fasilitas/boneless.jpg" class="img-fluid" alt="">
                </div><!-- /.contact-two__image -->
            </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                <div class="contact-two__content">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p><?php echo $lang_hubungi_sekarang; ?></p>
                        <h3><?php echo $lang_tinggalkan_pesan; ?></h3>
                    </div><!-- /.block-title -->
                    <div class="contact-two__summery">
                        <p>PT. Sembilan Sejahtera <?php echo $lang_memiliki_sumber; ?></p>
                    </div><!-- /.contact-two__summery -->
                </div><!-- /.contact-two__content -->
            </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="name" placeholder="Full Name">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <input type="text" name="email" placeholder="Email Address">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <input type="text" name="phone" placeholder="Phone Number">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="Write Message"></textarea>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <button type="submit" class="thm-btn"><?php echo $lang_kirim_pesan; ?></button><!-- /.thm-btn -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form>
            </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-two -->



<div class="client-carousel client-carousel__has-border-top">
    <div class="container">
        <div class="block-title text-center">
            <p><?php echo $lang_konsumen_kami; ?></p>
        </div><!-- /.block-title -->
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
        "0": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "375": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 3
        },
        "767": {
            "spaceBetween": 50,
            "slidesPerView": 4
        },
        "991": {
            "spaceBetween": 50,
            "slidesPerView": 5
        },
        "1199": {
            "spaceBetween": 100,
            "slidesPerView": 5
        }
    }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/mitra/agro.jpg" alt="" height="100">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/mitra/deka.jpg" alt="" height="100">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/mitra/indo.jpg" alt="" height="100">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/mitra/japfa.jpg" alt="" height="100">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/mitra/pangan.jpg" alt="" height="100">
                </div><!-- /.swiper-slide -->
                
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->
        