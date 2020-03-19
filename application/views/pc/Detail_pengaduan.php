<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Aplikasi Pengaduan">
    <meta name="keywords" content="Pengaduan">
    <meta name="author" content="Hariririski, S.Kom">
    <title>Detail Pengaduan</title>
    <link rel="apple-touch-icon" href="<?php echo site_url(); ?>assets/pc/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url(); ?>assets/pc/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/pc/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/pc/css/themes/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/pc/css/themes/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/pc/css/pages/app-invoice.min.css">
    <!-- END: Page Level CSS-->

  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
      <?php echo $this->load->view('share/Menu_pc', '', TRUE);?>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="<?php echo site_url(); ?>assets/pc/images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="<?php echo site_url(); ?>assets/pc/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="<?php echo site_url(); ?>assets/pc/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="<?php echo site_url(); ?>assets/pc/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="<?php echo site_url(); ?>assets/pc/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="<?php echo site_url(); ?>assets/pc/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="<?php echo site_url(); ?>assets/pc/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="<?php echo site_url(); ?>assets/pc/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
          </div></a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">PAGES</h6></a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
      <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>



    <!-- BEGIN: SideNav-->
    <?php echo $this->load->view('share/Menu_pcside', '', TRUE);?>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <!-- app invoice View Page -->
<section class="invoice-view-wrapper section">
  <div class="row">
    <!-- invoice view page -->
    <div class="col xl9 m8 s12">
      <div class="card">
        <div class="card-content invoice-print-area">

          <?php
          foreach($data_pengaduan as $detail){
          ?>
          <!--End of Breadcrumb Banner Area-->
              <!--Start of Single Job Post Area-->
              <div class="single-job-post-area pt-130 pt-sm-60 pb-70 pb-sm-30">
                <div class="container  ">
                      <div class="row">
                        <div class="col-md-6 col-lg-6"  >
                            <div style="box-shadow: 0 0 5px 0px #ddd; margin: auto;width: 100%; border: 3px solid transparent; cursor: pointer; padding: 10px;">
                              <img src="<?php echo site_url(); ?>assets/kop.png" width="100%">
                                <P class="text-center">PENGADUAN <BR>
                                <table border="0px" align="center">
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
        </div>
      </div>
    </div>
    <!-- invoice action  -->
    <div class="col xl3 m4 s12">
      <div class="card invoice-action-wrapper">
        <div class="card-content">
          <div class="invoice-action-btn">
            <a href="#"
              class="btn indigo waves-effect waves-light display-flex align-items-center justify-content-center">
              <i class="material-icons mr-4">check</i>
              <span class="text-nowrap">Send Invoice</span>
            </a>
          </div>
          <div class="invoice-action-btn">
            <a href="#" class="btn-block btn btn-light-indigo waves-effect waves-light invoice-print">
              <span>Print</span>
            </a>
          </div>
          <div class="invoice-action-btn">
            <a href="app-invoice-edit.html" class="btn-block btn btn-light-indigo waves-effect waves-light">
              <span>Edit Invoice</span>
            </a>
          </div>
          <div class="invoice-action-btn">
            <a href="#" class="btn waves-effect waves-light display-flex align-items-center justify-content-center">
              <i class="material-icons mr-3">attach_money</i>
              <span class="text-nowrap">Add Payment</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- START RIGHT SIDEBAR NAV -->

<!-- END RIGHT SIDEBAR NAV -->
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- Theme Customizer -->

<a
   href="#"
   data-target="theme-cutomizer-out"
   class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
   ><i class="material-icons">settings</i></a
>

<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
   <div class="col s12">
      <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
      <h5 class="theme-cutomizer-title">Theme Customizer</h5>
      <p class="medium-small">Customize & Preview in Real Time</p>
      <div class="menu-options">
         <h6 class="mt-6">Menu Options</h6>
         <hr class="customize-devider" />
         <div class="menu-options-form row">
            <div class="input-field col s12 menu-color mb-0">
               <p class="mt-0">Menu Color</p>
               <div class="gradient-color center-align">
                  <span class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                  <span
                     class="menu-color-option gradient-45deg-purple-deep-orange"
                     data-color="gradient-45deg-purple-deep-orange"
                  ></span>
                  <span
                     class="menu-color-option gradient-45deg-light-blue-cyan"
                     data-color="gradient-45deg-light-blue-cyan"
                  ></span>
                  <span
                     class="menu-color-option gradient-45deg-purple-amber"
                     data-color="gradient-45deg-purple-amber"
                  ></span>
                  <span
                     class="menu-color-option gradient-45deg-purple-deep-purple"
                     data-color="gradient-45deg-purple-deep-purple"
                  ></span>
                  <span
                     class="menu-color-option gradient-45deg-deep-orange-orange"
                     data-color="gradient-45deg-deep-orange-orange"
                  ></span>
                  <span class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                  <span
                     class="menu-color-option gradient-45deg-indigo-light-blue"
                     data-color="gradient-45deg-indigo-light-blue"
                  ></span>
                  <span class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
               </div>
               <div class="solid-color center-align">
                  <span class="menu-color-option red" data-color="red"></span>
                  <span class="menu-color-option purple" data-color="purple"></span>
                  <span class="menu-color-option pink" data-color="pink"></span>
                  <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                  <span class="menu-color-option cyan" data-color="cyan"></span>
                  <span class="menu-color-option teal" data-color="teal"></span>
                  <span class="menu-color-option light-blue" data-color="light-blue"></span>
                  <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                  <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
               </div>
            </div>
            <div class="input-field col s12 menu-bg-color mb-0">
               <p class="mt-0">Menu Background Color</p>
               <div class="gradient-color center-align">
                  <span
                     class="menu-bg-color-option gradient-45deg-indigo-blue"
                     data-color="gradient-45deg-indigo-blue"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                     data-color="gradient-45deg-purple-deep-orange"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                     data-color="gradient-45deg-light-blue-cyan"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-purple-amber"
                     data-color="gradient-45deg-purple-amber"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                     data-color="gradient-45deg-purple-deep-purple"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                     data-color="gradient-45deg-deep-orange-orange"
                  ></span>
                  <span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                     data-color="gradient-45deg-indigo-light-blue"
                  ></span>
                  <span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
               </div>
               <div class="solid-color center-align">
                  <span class="menu-bg-color-option red" data-color="red"></span>
                  <span class="menu-bg-color-option purple" data-color="purple"></span>
                  <span class="menu-bg-color-option pink" data-color="pink"></span>
                  <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                  <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                  <span class="menu-bg-color-option teal" data-color="teal"></span>
                  <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                  <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                  <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
               </div>
            </div>
            <div class="input-field col s12">
               <div class="switch">
                  Menu Dark
                  <label class="float-right"
                     ><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                  ></label>
               </div>
            </div>
            <div class="input-field col s12">
               <div class="switch">
                  Menu Collapsed
                  <label class="float-right"
                     ><input class="menu-collapsed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                  ></label>
               </div>
            </div>
            <div class="input-field col s12">
               <div class="switch">
                  <p class="mt-0">Menu Selection</p>
                  <label>
                     <input
                        class="menu-selection-radio with-gap"
                        value="sidenav-active-square"
                        name="menu-selection"
                        type="radio"
                     />
                     <span>Square</span>
                  </label>
                  <label>
                     <input
                        class="menu-selection-radio with-gap"
                        value="sidenav-active-rounded"
                        name="menu-selection"
                        type="radio"
                     />
                     <span>Rounded</span>
                  </label>
                  <label>
                     <input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio" />
                     <span>Normal</span>
                  </label>
               </div>
            </div>
         </div>
      </div>
      <h6 class="mt-6">Navbar Options</h6>
      <hr class="customize-devider" />
      <div class="navbar-options row">
         <div class="input-field col s12 navbar-color mb-0">
            <p class="mt-0">Navbar Color</p>
            <div class="gradient-color center-align">
               <span class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
               <span
                  class="navbar-color-option gradient-45deg-purple-deep-orange"
                  data-color="gradient-45deg-purple-deep-orange"
               ></span>
               <span
                  class="navbar-color-option gradient-45deg-light-blue-cyan"
                  data-color="gradient-45deg-light-blue-cyan"
               ></span>
               <span class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
               <span
                  class="navbar-color-option gradient-45deg-purple-deep-purple"
                  data-color="gradient-45deg-purple-deep-purple"
               ></span>
               <span
                  class="navbar-color-option gradient-45deg-deep-orange-orange"
                  data-color="gradient-45deg-deep-orange-orange"
               ></span>
               <span class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
               <span
                  class="navbar-color-option gradient-45deg-indigo-light-blue"
                  data-color="gradient-45deg-indigo-light-blue"
               ></span>
               <span class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
            </div>
            <div class="solid-color center-align">
               <span class="navbar-color-option red" data-color="red"></span>
               <span class="navbar-color-option purple" data-color="purple"></span>
               <span class="navbar-color-option pink" data-color="pink"></span>
               <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
               <span class="navbar-color-option cyan" data-color="cyan"></span>
               <span class="navbar-color-option teal" data-color="teal"></span>
               <span class="navbar-color-option light-blue" data-color="light-blue"></span>
               <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
               <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
            </div>
         </div>
         <div class="input-field col s12">
            <div class="switch">
               Navbar Dark
               <label class="float-right"
                  ><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
               ></label>
            </div>
         </div>
         <div class="input-field col s12">
            <div class="switch">
               Navbar Fixed
               <label class="float-right"
                  ><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
               ></label>
            </div>
         </div>
      </div>
      <h6 class="mt-6">Footer Options</h6>
      <hr class="customize-devider" />
      <div class="navbar-options row">
         <div class="input-field col s12">
            <div class="switch">
               Footer Dark
               <label class="float-right"
                  ><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
               ></label>
            </div>
         </div>
         <div class="input-field col s12">
            <div class="switch">
               Footer Fixed
               <label class="float-right"
                  ><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
               ></label>
            </div>
         </div>
      </div>
   </div>
</div>
<!--/ Theme Customizer -->



    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2020
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo site_url(); ?>assets/pc/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?php echo site_url(); ?>assets/pc/js/plugins.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/pc/js/search.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/pc/js/custom/custom-script.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/pc/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo site_url(); ?>assets/pc/js/scripts/app-invoice.min.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
