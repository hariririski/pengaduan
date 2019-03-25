<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lapor Pengaduan</title>
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
        <!-- <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/nice-select.css"> -->
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


        <style>
              body{ margin:0px; padding:0px; font-family:helvetica; background:url(image.png); }

              #wrapper{ text-align:center; margin:70px auto; }

              #output_image{ width:500px; height:350px; border:4px solid #000; }
              </style>

              <script type='text/javascript'>
                function preview_image1(event){
                   var reader = new FileReader();
                   reader.onload = function(){
                    var output = document.getElementById('bukti1');
                    output.src = reader.result;
                   }
                   reader.readAsDataURL(event.target.files[0]);
                }

                function preview_image2(event){
                   var reader = new FileReader();
                   reader.onload = function(){
                    var output = document.getElementById('bukti2');
                    output.src = reader.result;
                   }
                   reader.readAsDataURL(event.target.files[0]);
                }

                function preview_image3(event){
                   var reader = new FileReader();
                   reader.onload = function(){
                    var output = document.getElementById('bukti3');
                    output.src = reader.result;
                   }
                   reader.readAsDataURL(event.target.files[0]);
                }

                function preview_ktp(event){
                   var reader = new FileReader();
                   reader.onload = function(){
                    var output = document.getElementById('ktp');
                    output.src = reader.result;
                   }
                   reader.readAsDataURL(event.target.files[0]);
                }
              </script>

    </head>
    <body>

        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">

          <?php echo $this->load->view('share/Menu', '', TRUE);?>

            <!--Breadcrumb Banner Area Start-->
            <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-text">
                                <h2 class="text-center">Pengaduan</h2>
                                <div class="breadcrumb-bar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Breadcrumb Banner Area-->
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-130 pt-sm-60 pb-70 pb-sm-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mr-auto ml-auto">
                                <form action="<?php echo site_url(); ?>Lapor/tambah" method="post" enctype="multipart/form-data">
                                    <div class="single-job-content">
                                        <div class="title"><span>Data Pelapor</span></div>
                                        <div class="single-job-form">
                                            <div class="single-info pb-14">
                                                <label for="title" class="uppercase pull-left m-0">Nama Lengkap</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="title" name="nama_lengkap" required placeholder="Masukkan Nama Lengkap" >
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="desc" class="uppercase pull-left m-0">Alamat</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="desc" name="alamat" required placeholder="Masukkan ALamat Tinggal">
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="desc" class="uppercase pull-left m-0">Email</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="desc" name="email"  placeholder="Masukkan Alamat Email">
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="location" class="uppercase pull-left m-0">Pekerjaan</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="location" name="pekerjaan" required placeholder="Masukkan Pekerjaan">
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="category" class="uppercase pull-left m-0">Nomor Telepon</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="category" name="no_telepon" required placeholder="Masukkan Nomor Telepon/HP">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14 fix">
                                                <label class="uppercase pull-left m-0">Upload KTP</label>
                                                <div class="ml-0 uploader fix pull-left fileupload" style="width:30%">
                                                    <input type="file" id="fileupload" name="ktp"  accept="image/*" onchange="preview_ktp(event)">
                                                    <span class="filename">Upload Bukti</span>
                                                    <span class="action"><i class="zmdi zmdi-folder"></i>Browse</span>
                                                </div>

                                                <img class="ml-20" style="width:46%; height:200px;  "id="ktp"/>

                                            </div>
                                        </div>
                                        <div class="title"><span>Pengaduan</span></div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14 fix">
                                                <label class="uppercase pull-left m-0">Uraian Pengaduan</label>
                                                <div class="desc fix">
                                                    <textarea name="uraian_pengaduan" class="fix textarea" cols="30" rows="10" placeholder="Please enter your job description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14 fix">
                                                <label class="uppercase pull-left m-0">Jenis Pengaduan</label>
                                                <div class="desc fix">
                                                  <select name="jenis_pengaduan" required>
                                                    <option value="">Pilih Jenis Pengaduan</option>
                                                    <?php
                                                       foreach($jenis_pengaduan as $pengaduan){
                                                     ?>
                                                     <option value="<?php echo $pengaduan->id_jenis_pengaduan; ?>"><?php echo $pengaduan->nama_jenis_pengaduan; ?></option>
                                                     <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-info pb-14">
                                            <label for="category" class="uppercase pull-left m-0">Tanggal</label>
                                            <div class="form-box fix">
                                                <input type="date" id="category" name="tanggal" required value="<?php echo date("Y-m-d"); ?>">

                                            </div>
                                        </div>
                                        <div class="title"><span></span></div>
                                        <div class="title"><span> Bukti Pengaduan</span></div>
                                        <div class="single-job-form">
                                          <div class="single-info mb-14 fix">
                                              <label class="uppercase pull-left m-0">Bukti Pengaduan 1</label>
                                              <div class=" pull-left max-size" style="width:40%">
                                                  <input type="text" id="category" name="nama_bukti1" placeholder="Masukkan Nama Bukti Pengaduan">
                                              </div>
                                              <div class="ml-20 uploader fix pull-left fileupload" style="width:30%">
                                                  <input type="file" id="fileupload" name="bukti1"  accept="image/*" onchange="preview_image1(event)">
                                                  <span class="filename">Upload Bukti</span>
                                                  <span class="action"><i class="zmdi zmdi-folder"></i>Browse</span>

                                              </div>
                                              <label class="uppercase pull-left m-20"></label>
                                              <img style="line-height:16px; width:40%; height:200px; padding-top: 14px;  "id="bukti1"/>
                                          </div>
                                          <div class="single-info mb-14 fix">
                                              <label class="uppercase pull-left m-0">Bukti Pengaduan 2</label>
                                              <div class=" pull-left max-size" style="width:40%">
                                                  <input type="text" id="category" name="nama_bukti2" placeholder="Masukkan Nama Bukti Pengaduan">
                                              </div>
                                              <div class="ml-20 uploader fix pull-left fileupload" style="width:30%">
                                                  <input type="file" id="fileupload" name="bukti2"  accept="image/*" onchange="preview_image2(event)">
                                                  <span class="filename">Upload Bukti</span>
                                                  <span class="action"><i class="zmdi zmdi-folder"></i>Browse</span>

                                              </div>
                                              <label class="uppercase pull-left m-20"></label>
                                              <img style="width:40%; height:200px; padding-top: 14px; " id="bukti2"/>
                                          </div>
                                          <div class="single-info mb-14 fix">
                                              <label class="uppercase pull-left m-0">Bukti Pengaduan 3</label>
                                              <div class=" pull-left max-size" style="width:40%">
                                                  <input type="text" id="category" name="nama_bukti3" placeholder="Masukkan Nama Bukti Pengaduan">
                                              </div>
                                              <div class="ml-20 uploader fix pull-left fileupload" style="width:30%">
                                                  <input type="file" id="fileupload" name="bukti3"  accept="image/*" onchange="preview_image3(event)">
                                                  <span class="filename">Upload Bukti</span>
                                                  <span class="action"><i class="zmdi zmdi-folder"></i>Browse</span>

                                              </div>
                                              <label class="uppercase pull-left m-20"></label>
                                              <img style="width:40%; height:200px; padding-top: 14px; "id="bukti3"/>
                                          </div>


                                            <div class="ml-160 mt-38">
                                                <button type="submit" class="button button-large-box">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->
            <?php echo $this->load->view('share/Footer', '', TRUE);?>
        </div>
        <!--End of Main Wrapper Area-->

        <?php echo $this->load->view('share/Login', '', TRUE);?>
        <?php //echo $this->load->view('share/register', '', TRUE);?>



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
        <!-- <script src="<?php echo site_url(); ?>assets/js/jquery.nice-select.min.js"></script> -->

        <!-- nivo slider js
        ========================================================= -->
        <script src="<?php echo site_url(); ?>assets/lib/nivo-slider/js/jquery.nivo.slider.js"></script>
        <script src="<?php echo site_url(); ?>assets/lib/nivo-slider/home.js"></script>

        <!-- Js plugins included in this file
        ========================================================= -->
        <script src="<?php echo site_url(); ?>assets/js/plugins.js"></script>

        <!-- Google Map js
		============================================ -->



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


</html>
