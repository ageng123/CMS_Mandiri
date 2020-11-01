    


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
            <td style="width: 20%;"><a href="<?= base_url();?>Profile"
                    class="btn btn-block text-white"
                    style="background-color: #eaa400;"><b style="color: #806142;">Data Profile</b></a>
            </td>            
            <td></td>
            <td style="width: 80%;background-color: #f14950;padding:10px;vertical-align: top;color: white;border-radius: 10px;" rowspan="7">
                    
                    <form action="" method="post">
                      <table style="border: 0px;">
                      <tr>
                          <h2 style="color: white;"><b>GANTI PASSWORD</b> </h2>
                      </tr>
                        <tr><td style="width: 25%;border: 0px;"><h4>Username </h4></td><td style="border: 0px;">: <input readonly value="<?= $user->username ?>" type="text" name="username" style="width: 75%;"></td></tr>
                        <tr><td style="width: 25%;border: 0px;"><h4>New Password </h4></td><td style="border: 0px;">: <input type="text" name="password" style="width: 75%;"></td></tr>
                      </table>
                      <button type="submit" class="btn btn-lg btn-block" style="background-color: #eaa400;"><b style="color: #806142;">REQUEST GANTI PASSWORD</b></button>
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