<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Jenis Pengaduan</title>
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

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>

        <script src="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"></script>


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
            <div class="breadcrumb-banner-area pt-80 pb-70 bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-text">
                                <h2 class="text-center">Data Jenis Pengaduan</h2>
                                <div class="breadcrumb-bar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Breadcrumb Banner Area-->

            <div class="single-job-post-area pt-130 pt-sm-60 pb-70 pb-sm-30">
                <div class="container">
                      <div class="area-title">
                        <div class="single-job-post">
                          <div class="col-lg-12 mr-auto ml-auto pt-0">
                              <form action="#">
                                  <div class="single-job-content">
                                      <div class="title"><span>Jenis Pengaduan</span></div>
                                      <div class="single-job-form">
                                          <div class="single-info pb-14">
                                              <label for="title" class="uppercase pull-left m-0">nama Jenis Pengaduan</label>
                                              <div class="form-box fix">
                                                  <input type="text" id="title" name="title" placeholder="Masukkan Nama Jenis Pengadaaan">
                                              </div>
                                          </div>


                                      <div class="single-job-form">
                                          <div class="ml-160 mt-38">
                                              <a href="#" class="button button-large-box">Simpan</a>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-20 pt-sm-60 pb-70 pb-sm-30">
                    <div class="container">
                        <div class="area-title">
                          <div class="single-job-post">
                              <div class="col-lg-12 mr-auto ml-auto">
                                <div class="title"><span>Jenis Pengaduan</span></div>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pengaduan</th>
                                          <th>Edit</th>
                                          <th>Hapus</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Tiger Nixon</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                      </tr>

                                  </tbody>
                                  <tfoot>
                                      <tr>
                                        <th>No</th>
                                        <th>Jenis Pengaduan</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                      </tr>
                                  </tfoot>
                                </table>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->

        </div>
        <!--End of Main Wrapper Area-->
        <?php echo $this->load->view('share/Footer', '', TRUE);?>
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
        <script src="<?php echo site_url(); ?>assets/js/jquery.nice-select.min.js"></script>

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

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <script>
        $(document).ready(function() {
            $('#example').DataTable();
          } );
        </script>
    </body>


</html>
