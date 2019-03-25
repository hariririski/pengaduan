<!--Header Area Start-->
<?php ini_set('display_errors','off');?>
<style>
.header-top {
    align-items: center;
    background: #26ae61 none repeat scroll 0 0;
    display: flex;
    height: 15px;
    transition: all 0.3s ease-in-out 0s;
}
</style>
<header id="sticky-header" class="header-area">
    <!-- Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="col-md-12">
                <div class="header-top-list">
                    <ul class="top-contact-list">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div style="padding: 15px 0; "><a  href="<?php echo site_url(); ?>home"><img style="width: 300px" src="<?php echo site_url(); ?>assets/images/atrbpn.png" alt="Kantor Pertanahan Banda Aceh"></a></div>
            </div>
            <div class="col-sm-6 col-lg-8">
                <div class="pull-right header-menu">
                    <nav id="primary-menu">
                        <ul class="main-menu text-right">
                            <li><a href="<?php echo site_url(); ?>home">Beranda</a></li>
                            <?php
                              $login=$this->session->userdata('login');

                              if(($login[0]->level)==1||($login[0]->level)==2){
                            ?>
                            <li><a href="#">Pengaduan</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url(); ?>lapor/">Tambah Pengaduan</a></li>
                                    <li><a href="<?php echo site_url(); ?>lapor/data/">Data Pengaduan</a></li>
                                    <?php
                                      if(($login[0]->level)==2){
                                    ?>
                                    <li><a href="<?php echo site_url(); ?>lapor/data/">Laporan Waktu Tertentu</a></li>
                                    <li><a href="<?php echo site_url(); ?>lapor/data/">Laporan Tahunan</a></li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </li>
                            <?php }?>
                          <?php
                            if(($login[0]->level)==2){
                          ?>
                            <li><a href="#">Setting</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url(); ?>jenis_pengaduan">Tambah Jenis Pengaduan</a></li>
                                    <li><a href="<?php echo site_url(); ?>admin">Tambah Admin</a></li>
                                </ul>
                            </li>
                          <?php
                              }
                          ?>

                        </ul>
                    </nav>
                    <div class="login-btn">
                      <?php

                        if(($login[0]->level)==1||($login[0]->level)==2){
                      ?>
                      <a href="<?php echo site_url(); ?>login/logout" class="modal-view button" href="#" >Logout</a>
                    <?php }else{ ?>
                        <a class="modal-view button" href="#" data-toggle="modal" data-target="#productModal">Login</a>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                          <ul class="main-menu text-right">
                              <li><a href="<?php echo site_url(); ?>home">Beranda</a></li>
                              <li><a href="#">Laporan</a>
                                  <ul class="dropdown">
                                      <li><a href="<?php echo site_url(); ?>lapor/">Tambah Pengaduan</a></li>
                                      <li><a href="<?php echo site_url(); ?>lapor/data/">Data Pengaduan</a></li>
                                  </ul>
                              </li>
                              <li><a href="#">Setting</a>
                                  <ul class="dropdown">
                                      <li><a href="<?php echo site_url(); ?>lapor/">Tambah Jenis Pengaduan</a></li>
                                      <li><a href="<?php echo site_url(); ?>data_lapor/">Tambah Admin</a></li>
                                  </ul>
                              </li>
                              <li><a href="<?php echo site_url(); ?>/tentang">Tentang</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</header>
<!-- End of Header Area -->
