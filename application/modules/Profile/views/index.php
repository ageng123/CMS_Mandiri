    


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

        <table style="border: 0px; font-size: 17px;">
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Profile" class="btn btn-block text-white" style="background-color: #eaa400;"><b style="color: #806142;">Data Profile</b></a></td>
            <td></td>
            <td style="width:80%; background-color:#eaa400; padding:10px; vertical-align:top; font-weight: bold; color:white; border-radius:10px;" rowspan="7">
                <table style="border: 0px;">
                  <tr><h2><b>DATA PROFILE</b></h2></tr>
                  <tr><td style="width: 25%;border: 0px;">Nama Lengkap</td><td style="border: 0px;">: </td><td class="border-0"><?= $user->full_name ?></td></tr>
                  <tr><td style="width: 25%;border: 0px;">Jenis Kelamin</td><td style="border: 0px;">: </td><td class="border-0"><?= $user->jenis_kelamin ?></td></tr>
                  <tr><td style="width: 25%;border: 0px;">Tempat / Tanggal Lahir</td><td style="border: 0px;">: </td><td class="border-0"><?= ucwords($user->tempat_lahir).' , '.indonesiaFullDate(date('Y-m-d', strtotime($user->tanggal_lahir))) ?></td></tr>
                  <tr><td style="width: 25%;border: 0px;">Alamat</td><td style="border: 0px;">: </td><td class="border-0"><?= $user->alamat ?></td></tr>
                  <tr><td style="width: 25%;border: 0px;">No. Telepon</td><td style="border: 0px;">: </td><td class="border-0"><?= $user->no_hp ?></td></tr>
                  <tr><td style="width: 25%;border: 0px;">Email</td><td style="border: 0px;">: </td><td class="border-0"><?= $user->email ?></td></tr>
                </table>
            </td>
          </tr>
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Rekening" class="btn btn-block text-white" style="background-color: #f2c866;"><b style="color: #806142;">Data Rekening</b></a></td>
          </tr>
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Simpanan" class="btn btn-block text-white" style="background-color: #806142;"><b style="color: white;">Simpanan</b></a></td>
          </tr>
          <tr>
            <td style="width: 20%;"><a href="#" class="btn btn-block text-white" style="background-color: #af9c89;" disable="disable"><b style="color: white;">SHU</b></a></td>
          </tr>
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Password" class="btn btn-block text-white" style="background-color: #f14950;"><b style="color: white;">Ganti Password</b></a></td>
          </tr>

          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Landing/logout" class="btn btn-block text-white" style="background-color: #7f7f7f;"><b style="color: white;">Logout</b></a></td>
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