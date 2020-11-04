    <!-- page output -->
  <div class="padding-tb-40px background-light-grey">
    <div class="container">
  <div class="text-left hvr-bob">
    <h1 class="widget-title clearfix"><b>PROFILE </b></h1>
    <hr style="background-color: #f7a91e;width: 100%;height: 4px;" border="0" align="left">
  </div>


            
      <div class="row">
     

     
    <div class="col-xs-12 col-lg-3" style="margin-top: 3vh;">
          <?php $this->load->view('Component/profile_photo') ?>
        </div>
        <br>
        </div>

      <div class="row">
    <div class="col-xs-12 col-lg-3">    
        <table style="border: 0px; font-size: 14px;">
           <tr>
                <td style="width: 20%;"><a href="<?= base_url();?>Profile"
                    class="btn btn-block text-white"
                    style="background-color: #eaa400;"><b style="color: #806142;">Data Profile</b></a></td>
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
                <td style="width: 20%;"><a href="<?= base_url();?>auth/logout"
                    class="btn btn-block text-white"
                    style="background-color: #7f7f7f;"><b style="color: white;">Logout</b></a></td>
              </tr>
        </table>
</div>

<div class="col-xs-12 col-lg-9">   
        <table style="font-size: 12px;">
          <tr>
            <td style="width: 80%;background-color: #806142;padding:10px;vertical-align: top;color: white;border-radius: 10px;" rowspan="7">
                    
                    <table style="border: 1px solid white;" class="getPembayaranNasabah" auth_nasabah="<?= encode($this->session->userdata('user_id')) ?>">
                   <thead>
                   <tr>
                          <h2 style="color: white"><b>SIMPANAN</b> </h2>
                      </tr>
                    <td style="text-align: center;">Tgl. Pembayaran</td>
                    <td style="text-align: center;width: 25%;">Jenis Pembayaran</td>
                    <td style="text-align: center;">Jumlah</td>
                   </thead>
                   
                   <tbody id="historyContainer">

                   </tbody>
                    </table>
                    <div id="pagination-container"></div>
            </td>
          </tr>
        </table>

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
    .section-bg2{
      background-color: #efebe8;
    }
    
      .kontak-heading {
        border-bottom: 4px solid #ddaa37;
        width: max-content;
      }
      .text-primary{
        color: #795839 !important;
      }
    </style>