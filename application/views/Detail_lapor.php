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
                      b {
              font-weight: bold;
              }
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

            <?php
            foreach($data_pengaduan as $detail){
            ?>
            <!--End of Breadcrumb Banner Area-->
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-130 pt-sm-60 pb-70 pb-sm-30">
                  <div class="container  ">
                        <div class="row">
                          <div class="col-md-6 col-lg-6"  >
                              <div style="box-shadow: 0 0 5px 1px #ddd; margin: auto;width: 100%; border: 3px solid transparent; cursor: pointer; padding: 10px;">
                                <img src="<?php echo site_url(); ?>assets/kop.png" width="100%">
                                  <P class="text-center">PENGADUAN <BR>
                                  <table align="center">
                                    <tr>
                                      <td>NOMOR</td>
                                      <td>:</td>
                                      <td><?php echo $detail->nomor;?></td>
                                    </tr>
                                    <tr>
                                      <td>TANGGAL</td>
                                      <td>:</td>
                                      <td><?php
                                      $bulan = array (
                                          1 => 'Januari',
                                          'Februari',
                                          'Maret',
                                          'April',
                                          'Mei',
                                          'Juni',
                                          'Juli',
                                          'Agustus',
                                          'September',
                                          'Oktober',
                                          'November',
                                          'Desember'
                                        );
                                        $pecahkan = explode('-', $detail->tanggal_pengaduan);
                                        $tanggal= $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                      ?>
                                      <?php echo $tanggal;?></td>
                                    </tr>
                                  </table>
                                  <BR>
                                  <BR>
                                  <P>I.Identitas Pengadu**)</P>
                                  <table  width="100%">
                                    <tr>
                                      <td width="10px">&nbsp;</td>
                                      <td width="10px" style="vertical-align:top" >a.</td>
                                      <td width="34%" style="vertical-align:top" >Nama</td>
                                      <td  width="10px" style="vertical-align:top" >:</td>
                                      <td style="vertical-align:top" ><?php echo $detail->nama;?></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td style="vertical-align:top" >b.</td>
                                      <td style="vertical-align:top" >Alamat atau alamat email</td>
                                      <td style="vertical-align:top" >:</td>
                                      <td style="vertical-align:top" ><?php echo $detail->alamat;?></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td style="vertical-align:top" >c.</td>
                                      <td style="vertical-align:top" >Pekerjaan</td>
                                      <td style="vertical-align:top" >:</td>
                                      <td style="vertical-align:top" ><?php echo $detail->pekerjaan;?></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td style="vertical-align:top" >b.</td>
                                      <td style="vertical-align:top" >Nomor Telepon</td>
                                      <td style="vertical-align:top" >:</td>
                                      <td style="vertical-align:top" ><?php echo $detail->no_telepon;?></td>
                                    </tr>

                                  </table>
                                  <br>
                                  <P>II. Uraian Pengaduan</P>
                                  <table>
                                    <tr>
                                      <td width="10px">&nbsp;</td>
                                      <td><?php echo $detail->uraian;?></td>
                                    </tr>
                                  </table>
                                  <br>
                                  <br>
                                  III. Bukti Yang Dilampirkan
                                  <table>
                                    <tr>
                                          <td width="10px">&nbsp;</td>
                                          <td >&nbsp;</td>
                                          <td >&nbsp;</td>
                                    </tr>
                                      <?php
                                      if(!empty($detail->nama_bukti1)){
                                        echo '<tr>';
                                        echo '<td></td>';
                                        echo '<td>';
                                        echo '<td>a. </td>';
                                        echo '<td>'.$detail->nama_bukti1.'</td>';
                                      }else{
                                        echo '<tr>';
                                        echo '<td></td>';
                                        echo '<td>';
                                        echo '<td>a. </td>';
                                        echo '<td>.............................</td>';
                                      }
                                      if(!empty($detail->nama_bukti2)){
                                        echo '<tr>';
                                        echo '<td></td>';
                                        echo '<td>';
                                        echo '<td>b. </td>';
                                        echo '<td>'.$detail->nama_bukti2.'</td>';
                                      }
                                      if(!empty($detail->nama_bukti3)){
                                        echo '<tr>';
                                        echo '<td></td>';
                                        echo '<td>';
                                        echo '<td>c. </td>';
                                        echo '<td>'.$detail->nama_bukti3.'</td>';
                                      }
                                      if(!empty($detail->nama_bukti4)){
                                        echo '<tr>';
                                        echo '<td></td>';
                                        echo '<td>';
                                        echo '<td>d. </td>';
                                        echo '<td>'.$detail->nama_bukti4.'</td>';
                                      }
                                      if(!empty($detail->nama_bukti5)){
                                        echo '<tr>';
                                        echo '<td></td>';
                                        echo '<td>';
                                        echo '<td>e. </td>';
                                        echo '<td>'.$detail->nama_bukti5.'</td>';
                                      }

                                      ?>


                                    </tr>

                                  </table>
                                  <br>
                                  <br>
                                  <br>
                                  <P>Dengan ini pengadu membenarkan dan bertanggung jawab atas keterangan yang diberikan.</P>
                                  <BR>
                                  <BR>
                                    <table width="100%">
                                      <tr>
                                        <?php
                                        $bulan = array (
                                        		1 => 'Januari',
                                        		'Februari',
                                        		'Maret',
                                        		'April',
                                        		'Mei',
                                        		'Juni',
                                        		'Juli',
                                        		'Agustus',
                                        		'September',
                                        		'Oktober',
                                        		'November',
                                        		'Desember'
                                        	);
                                        	$pecahkan = explode('-', $detail->tanggal_pengaduan);
                                        	$tanggal= $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                        ?>
                                        <td>Banda Aceh, <?php echo $tanggal;?></td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>Penerima Pengaduan</td>
                                        <td>Pengadu</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;<br><br><br><br></td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                        <td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <?php echo $detail->penerima;?>
                                        </td>
                                        <td><?php echo $detail->nama;?></td>
                                      </tr>
                                    </table>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    **) Melampirkan salinan identitas diri (SIM/KTP/Paspor)

                              </div>
                          </div>

                          <div class="col-md-6 col-lg-6">
                            <div style="box-shadow: 0 0 5px 1px #ddd; margin: auto;width: 100%; border: 3px solid transparent; cursor: pointer; padding: 10px;">
                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                  <table height="150px" border="1" align="center">
                                    <tr >
                                      <td align="Center" width="55%">Jenis Pengaduan</td>
                                      <td align="Center">Penanganan</td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top">
                                        <?php
                                          $huruf;

                                          $arr_az = range('a','z');
                                          $i=0;
                                          $j=0;
                                           foreach($arr_az as $chr) {
                                             $huruf[$i]=$chr;
                                             $i++;
                                           }
                                            ?>
                                          <table height="100px">
                                            <?php
                                            foreach($jenis_pengaduan as $pengaduan){
                                             echo '<tr>';
                                               echo '<td style="vertical-align:top">';
                                               if($pengaduan->id_jenis_pengaduan==$detail->id_jenis_pengaduan){
                                                 echo "<b><u>".$huruf[$j]."</u></b>";
                                                  echo "<b><u>. </u></b>";
                                               }else{
                                                 echo $huruf[$j];
                                                 echo ". ";
                                               }

                                               echo "</td>";
                                               echo '<td style="vertical-align:top">';
                                               if($pengaduan->id_jenis_pengaduan==$detail->id_jenis_pengaduan){
                                                 echo "<b><u>".$pengaduan->nama_jenis_pengaduan."</u></b>";
                                               }else{
                                                 echo $pengaduan->nama_jenis_pengaduan;
                                               }
                                               echo "</td>";
                                               echo "</td>";
                                             echo "</tr>";
                                             $j++;
                                             }
                                             ?>
                                          </table>
                                      </td>

                                        <td style="vertical-align:top;">Kantor Pertanahan Kota Banda Aceh <br> Seksi
                                        <?php
                                         if($detail->id_bidang!==null|| $detail->id_bidang!==0){
                                           echo $detail->nama_bidang;
                                         }
                                        ?>
                                        </td>

                                    </tr>
                                  </table>
                                  <BR>
                                  <BR>
                                  catatan:
                                  <table >
                                    <tr>
                                      <td style="vertical-align:top;">
                                        1.
                                      </td>
                                      <td style="vertical-align:top;">
                                        <div align="justify">Pengaduan ini akan dicatat dalam sistem paling lama 1 (satu) hari kerja sejak pengaduan diterima.</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">
                                        2.
                                      </td>
                                      <td style="vertical-align:top;">
                                        <div align="justify">Terhadap pengaduan ini, akan dilakukan pemeriksaan paling lama 1 (satu) hari kerja sejak pengaduan dicatat. (Kecuali untuk pengaduan berupa infotmasi pertanahan atau informasi tatat ruang yang dapat di tangani).</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">
                                        3.
                                      </td>
                                      <td style="vertical-align:top;">
                                        <div align="justify">Informasi tindak lanjut penaganan disampaikan kepada pengadu paling lama 5 hari sejak diterimanya pengaduan oleh unit teknis.</div>
                                      </td>
                                    </tr>
                                  </table>
                                  <br>
                                  <br>
                                  *) Pilih yang sesuai
                                  <br>
                                  <br>

                              </div>

                              <br>
                              <br>
                              <p align="center">
                              <a href="<?php echo site_url(); ?>lapor/hapus/<?php echo $detail->id_pengaduan?>/<?php echo $detail->id_pengaduan?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                              <a href="<?php echo site_url(); ?>lapor/update/<?php echo $detail->id_pengaduan?>"><button type="button" class="btn btn-warning">Perbaharui</button></a>
                              <a href="<?php echo site_url(); ?>lapor/cetak_lapor/<?php echo $detail->id_pengaduan?>"><button  class="btn btn-primary">Cetak</button></a>
                            </p>
                            <br>
                            <hr>
                            <br>
                            <br>

                            <?php
                            if($detail->tindak_lanjut==null){
                            ?>
                            <label class="uppercase pull-left m-0"><b>Penyelesaian Masalah<b></label>
                            <br>
                            <br>
                            <form action="<?php echo site_url(); ?>Lapor/penyelesaian/<?php echo $detail->id_pengaduan?>" method="post" enctype="multipart/form-data">
                              <div class="single-job-form">
                                  <div class="single-info mb-14 fix">
                                      <label class="uppercase pull-left m-0">Bidang </label>
                                      <div class="desc fix">
                                        <select name="bidang" required>
                                          <option value="">Pilih Bidang</option>
                                          <?php
                                             foreach($bidang as $data_bidang){
                                           ?>
                                           <option value="<?php echo $data_bidang->id_bidang; ?>"><?php echo $data_bidang->nama_bidang; ?></option>
                                           <?php } ?>
                                      </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="single-job-form">

                                  <div class="single-info mb-14 fix">

                                      <div class="desc fix">
                                          <textarea name="penyelesaian" class="fix textarea" required cols="1o0" rows="30" placeholder="Masukkan Menyelesaian Masalah"></textarea>
                                      </div>
                                  </div>
                                    <p align="right"><button type="submit" class="btn btn-warning">Simpan</button></p>
                              </div>
                            </form>
                          <?php }else{?>
                            <label class="uppercase pull-left m-0"><b>Penyelesaian Masalah<b></label>
                            <br>
                            <br>
                            <form action="<?php echo site_url(); ?>Lapor/penyelesaian/<?php echo $detail->id_pengaduan?>" method="post" enctype="multipart/form-data">
                              <div class="single-job-form">

                                  <div class="single-info mb-14 fix">

                                      <div class="desc fix">
                                          <textarea disabled name="penyelesaian" class="fix textarea" required cols="1o0" rows="30" ><?php echo $detail->tindak_lanjut?></textarea>
                                      </div>
                                  </div>

                              </div>
                            </form>
                          <?php }?>
                          </div>

                        </div>
                    </div>
                </div>
          <?php } ?>
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
