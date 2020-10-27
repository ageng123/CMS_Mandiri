    


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

        <table style="font-size: 14px;">
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Profile" class="btn btn-sm border-2 border-radius-30 btn-block text-white" style="background-color: #eaa400;">Data Profile</a></td>
            <td></td>
            <td style="width: 80%;background-color: #806142;padding:10px;vertical-align: top;color: white;border-radius: 10px;" rowspan="7">
                    
                    <table style="border: 1px solid white;" class="getPembayaranNasabah" auth_nasabah="<?= encode($this->session->userdata('user_id')) ?>">
                   <thead>
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
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Rekening" class="btn btn-sm border-2 border-radius-30 btn-block text-white" style="background-color: #f2c866;">Data Rekening</a></td>
          </tr>
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Simpanan" class="btn btn-sm border-2 border-radius-30 btn-block text-white" style="background-color: #806142;">Simpanan</a></td>
          </tr>
          <tr>
            <td style="width: 20%;"><a href="#" class="btn btn-sm border-2 border-radius-30 btn-block text-white" style="background-color: #af9c89;" disable="disable">SHU</a></td>
          </tr>
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Password" class="btn btn-sm border-2 border-radius-30 btn-block text-white" style="background-color: #f14950;">Ganti Password</a></td>
          </tr>

          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Landing/logout" class="btn btn-sm border-2 border-radius-30 btn-block text-white" style="background-color: #7f7f7f;">Logout</a></td>
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