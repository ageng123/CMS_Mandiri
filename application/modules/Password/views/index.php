<img src="<?= base_url('assets/img/') ?>list.png" width="200%">
    


  <!-- page output -->
  <div class="padding-tb-40px background-light-grey">
    <div class="container">
            <h1 class="widget-title clearfix"><b>PROFILE </b></h1>
            <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
      <div class="row">
     
      <div class="col-12" style="margin-top: 3vh;">
        <table style="font-size: 14px;">
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Profile" class="btn btn-sm border-2 border-radius-30 btn-block text-white" style="background-color: #eaa400;">Data Profile</a></td>
            <td></td>
            <td style="width: 80%;background-color: #f14950;padding:10px;vertical-align: top;color: white;border-radius: 10px;" rowspan="7">
                    
                    <form action="" method="post">
                    <table style="border: 0px;">
                    <tr><td style="width: 25%;border: 0px;"><h3>Username </h3></td><td style="border: 0px;">: <input type="" name="" style="width: 75%;"></td></tr>
                    <tr><td style="width: 25%;border: 0px;"><h3>New Password </h3></td><td style="border: 0px;">: <input type="" name="" style="width: 75%;"></td></tr>
                    </table>
                    <button type="submit" class="btn btn-lg border-2 border-radius-0 btn-warning btn-block">Ganti Password</button>
                    </form>
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