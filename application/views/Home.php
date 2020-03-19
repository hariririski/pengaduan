<!doctype html>
<html class="no-js" lang="en">
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
   //jika menggunakan browser versi mobile maka alihkan ke file web versi mobile anda
    header("location: ".site_url()."Hp/home");
}
?>
<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/jobhere-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Aug 2018 08:38:08 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pengaduan - Kantor Pertanahan Kota Banda Aceh</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url(); ?>assets/images/favicon.ico">

        <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- All css files are included here
        ============================================ -->
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/bootstrap.min.css">

        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <!-- Nice select css
        ============================================ -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/nice-select.css">
        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/core.css">

        <!-- Theme shortcodes/elements style
        ============================================ -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/shortcode/shortcodes.css">

        <!--  Theme main style
        ============================================ -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/style.css">

		<!-- Color CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/plugins/color.css">

        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/responsive.css">

        <!-- Modernizr JS -->
        <script src="<?php echo site_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Header Area Start-->
            <?php echo $this->load->view('share/Menu', '', TRUE);?>
            <!-- End of Header Area -->
                <!--Start of Slider Area-->
                <div class="slider-area">
                    <div class="preview-2">
                        <div id="nivoslider" class="slides">
                            <img src="<?php echo site_url(); ?>assets/images/slider/1.1.png" alt="" title="#slider-1-caption1"/>
                            <img src="<?php echo site_url(); ?>assets/images/slider/2.jpg" alt="" title="#slider-1-caption2"/>
                        </div>
                        <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content text-center">
                                                    <h2 class="title2 wow bounceInLeft text-white mb-16" data-wow-duration="3s" data-wow-delay="0s">Selamat Datang Di Aplikasi Layanan Pengaduan</h2>
                                                    <h2 class="title1 wow bounceInRight text-white mb-16" data-wow-duration="3s" data-wow-delay="0s">Kementerian Agraria Dan Tata Ruang / Badan Pertanahan Nasional</h2>
                                                    <h2 class="title1 wow bounceInRight text-white mb-16" data-wow-duration="3s" data-wow-delay="1s">Kantor Pertanahan Kota Banda Aceh</h2>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2 text-center">

                                                    <h1 class="title1 wow flipInX text-white mb-16" data-wow-duration="1s" data-wow-delay="0s">Laporkan Masalah Anda</h1>
                                                    <p class="sub-title wow lightSpeedIn hidden-xs" data-wow-duration="1s" data-wow-delay=".2s"> Kami Kantor Pertanahan KOta Banda Aceh Akan Menyelesaikan Masalah Anda<br> Semua Dilakukan Secara Transparann dan Cepat.</p>
                                                    <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="1s" data-wow-delay=".6s">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Slider Area-->
                <!-- Search Form Start -->



            <div class="woring-area pt-130 pb-100 pt-sm-60 pb-sm-30">
                <div class="container">
                    <!-- Section Title Start -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center ">
                                <h2>Bagaiman Cara Melaporkan Pengaduan</h2>

                            </div>
                        </div>
                    </div>
                    <!-- Section Title End -->
                    <div class="row work-shap">
                        <div class="col-md-4">
                            <div class="work-item">
                                <div class="img-icon">
                                    <img src="<?php echo site_url(); ?>assets/images/icons/wrk1.png" alt="">
                                </div>
                                <h5>Laporkan Masalah Anda Di Kantor Pertanahan Banda Aceh</h5>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="work-item">
                                <div class="img-icon">
                                    <img src="<?php echo site_url(); ?>assets/images/icons/wrk2.png" alt="">
                                </div>
                                <h5>Laporan Pengaduan Anda Akan Diproses Dengan Cepat</h5>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="work-item">
                                <div class="img-icon">
                                    <img src="<?php echo site_url(); ?>assets/images/icons/wrk3.png" alt="">
                                </div>
                                <h5>Memberikan Solusi Terbaik Terhadap Laporan Yang Diberikan</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $this->load->view('share/Footer', '', TRUE);?>

        </div>
        <!--End of Main Wrapper Area-->

        <!--Start of Login Form-->
        <?php echo $this->load->view('share/Login', '', TRUE);?>
        <?php //echo $this->load->view('share/register', '', TRUE);?>

			</div>
        </div>
        <!--End of Login Form-->


        <!-- jquery latest version
		========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>

        <!-- Bootstrap framework js
		========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/popper.js"></script>

        <!-- Owl Carousel js
        ========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/owl.carousel.min.js"></script>

        <!-- Jquery nice select js
        ========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/jquery.nice-select.min.js"></script>

        <!-- nivo slider js
		========================================================= -->
		<script src="<?php echo site_url(); ?>assets/lib/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="<?php echo site_url(); ?>assets/lib/nivo-slider/home.js"></script>

        <!-- Js plugins included in this file
		========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/plugins.js"></script>

		<!-- Video Player JS
		========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/jquery.mb.YTPlayer.js"></script>

		<!-- AJax Mail JS
		========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/ajax-mail.js"></script>

		<!-- Mail Chimp JS
		========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>

        <!-- Waypoint Js
		========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/waypoints.min.js"></script>

        <!-- Main js file contents all jQuery plugins activation
		========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/main.js"></script>

    </body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/jobhere-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Aug 2018 08:38:51 GMT -->
</html>
