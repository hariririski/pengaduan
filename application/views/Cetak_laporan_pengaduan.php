<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lapor Pengaduan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        b {
          font-weight: bold;
          }
        @media all {
          .page-break { display: none; }
          }

          @media print {
          .page-break { display: block; page-break-before: always;page-break-after: always; }
          @page {   margin-top: 0;
                    margin-bottom: 0;
                    margin-right: 40px;
                    margin-left: 40px; }
          }



        }
        </style>
        <script>
      //  window.print()
        </script>

    </head>
    <body>

        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">



            <!--End of Breadcrumb Banner Area-->
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-100 pt-sm-60 pb-70 pb-sm-30">
                  <div class="container  ">
                        <div class="row">
                          <img src="<?php echo site_url(); ?>assets/kop2.png" width="80%">
                          <p align="center">LAPORAN PENANGANAN PENGADUAN</p>
                          <table border="1" width="100%">
                            <tr>
                              <td align="center" > NO </td>
                              <td align="center" > Nomor dan Tanggal Pengaduan </td>
                              <td align="center" > Pengadu </td>
                              <td align="center" > Ruang Lingkup Pengaduan </td>
                              <td align="center" > Bukti Pengaduan </td>
                              <td align="center" > Uraian Pengaduan </td>
                              <td align="center" > Tindak Lanjut </td>
                            </tr>
                            <?php
                            $no=0;
                            foreach($data_pengaduan as $detail){
                            $no++;
                            ?>
                            <tr>
                              <td align="center" ><?php echo $no;?></td>
                              <td align="center" ><?php echo $detail->nomor;?>/<?php echo $detail->tanggal_pengaduan;?> </td>
                              <td align="center" > <?php echo $detail->nama;?></td>
                              <td align="center" ><?php echo $detail->nama_jenis_pengaduan;?> </td>
                              <td align="center" > Bukti Pengaduan </td>
                              <td align="center" ><?php echo $detail->uraian;?> </td>
                              <td align="center" > <?php echo $detail->tindak_lanjut;?> </td>
                            </tr>

                            <?php } ?>
                          </table>

                          <?php
                          foreach($data_setting as $setting){
                          ?>
                                <br>
                                <br>
                                <table border ="0" width="100%">
                                  <tr>
                                    <td width="30%">&nbsp;</td>
                                    <td width="40%">&nbsp;</td>
                                    <td align="center"><?php echo $setting->jabatan?> <?php echo $setting->nama_kantor?></td>
                                  </tr>
                                  <tr height="80px">
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td align="center"><?php echo $setting->nama_kepala?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td align="center">NIP.<?php echo $setting->nip?></td>
                                  </tr>
                                </table>
                        <?php } ?>

                          <div class="page-break"></div>


                        </div>
                    </div>
                </div>

                <!--End of Single Job Post Area-->

        </div>
        <!--End of Main Wrapper Area-->



    </body>


</html>
