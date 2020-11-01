    <!-- page output -->
    <div class="padding-tb-40px background-light-grey">
      <div class="container">
        <h1 class="widget-title clearfix"><b>PROFILE </b></h1>
        <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
        <div class="row">

          <div class="col-12" style="margin-top: 3vh;">

            <div class="col-lg-3">
              <?php $this->load->view('Component/profile_photo') ?>
            </div>
            <br>

            <table style="border: 0px; font-size: 14px;">
              <tr>
                <td style="width: 20%;"><a href="<?= base_url();?>Profile"
                    class="btn btn-block text-white"
                    style="background-color: #eaa400;"><b style="color: #806142;">Data Profile</b></a></td>
                <td></td>

                <td style="width: 80%;background-color: #f8dfa6; padding:10px;vertical-align: top;color: white;border-radius: 10px;" rowspan="7">

                  <form action="<?= base_url('request/save_data') ?>" method="post">
                    <table style="border: 0px;">
                      <tr>
                          <h2 style="color: #806142;"><b>DATA REKENING</b> </h2>
                      </tr>
                      <tr>
                        <td style="width: 25%;border: 0px;">
                          <h4 style="color: #806142;">Nama Rekening </h4>
                        </td>
                        <td style="border: 0px;">: <input type="hidden" name="jenis_req[1]" value="NAMA_REKENING"><input
                            type="text" name="data_request[1]"
                            value="<?= isset($rekening->nama) ? $rekening->nama : '' ?>" style="width: 75%;"></td>
                      </tr>
                      <tr>
                        <td style="width: 25%;border: 0px;">
                          <h4 style="color: #806142;">Nomer Rekening </h4>
                        </td>
                        <td style="border: 0px;">: <input type="hidden" name="jenis_req[2]"
                            value="NOMOR_REKENING"><input type="text" name="data_request[2]"
                            value="<?= isset($rekening->nomor) ? $rekening->nomor : '' ?>" style="width: 75%;"></td>
                      </tr>
                      <tr>
                        <td style="width: 25%;border: 0px;">
                          <h4 style="color: #806142;">Cabang </h4>
                        </td>
                        <td style="border: 0px;">:<input type="hidden" name="jenis_req[3]" value="CABANG"><input
                            type="text" name="data_request[3]"
                            value="<?= isset($rekening->cabang) ? $rekening->cabang : '' ?>" style="width: 75%;"></td>
                      </tr>
                    </table>
                    <button type="submit" class="btn btn-lg btn-warning btn-block" style="background-color: #eaa400;"><b style="color: #806142;">REQUEST GANTI NOMOR REKENING</b></button>
                  </form>
                </td>
              </tr>
              <tr>
                <td style="width: 20%;"><a href="<?= base_url();?>Rekening"
                    class="btn btn-block text-white"
                    style="background-color: #f8dfa6;"><b style="color: #806142;">Data Rekening</b></a></td>
              </tr>
              <tr>
                <td style="width: 20%;"><a href="<?= base_url();?>Simpanan"
                    class="btn btn-block text-white"
                    style="background-color: #806142;"><b style="color: white;">Simpanan</b></a></td>
              </tr>
              <tr>
                <td style="width: 20%;"><a class="btn btn-block text-white"
                    style="background-color: #af9c89;" disable="disable"><b style="color: white;">SHU</b></a></td>
              </tr>
              <tr>
                <td style="width: 20%;"><a href="<?= base_url();?>Password"
                    class="btn btn-block text-white"
                    style="background-color: #f14950;"><b style="color: #806142;">Ganti Password</b></a></td>
              </tr>

              <tr>
                <td style="width: 20%;"><a href="<?= base_url();?>Landing/logout"
                    class="btn btn-block text-white"
                    style="background-color: #7f7f7f;"><b style="color: white;">Logout</b></a></td>
              </tr>
            </table>

          </div>
        </div>


      </div>
    </div>
    </div>
    <!-- //  page output -->

    <style>
      .no-border {
        border-color: transparent;
      }

      .no-bg {
        background-color: transparent;
      }

      .section-bg2 {
        background-color: #efebe8;
      }

      .kontak-heading {
        border-bottom: 4px solid #ddaa37;
        width: max-content;
      }

      .text-primary {
        color: #795839 !important;
      }
    </style>