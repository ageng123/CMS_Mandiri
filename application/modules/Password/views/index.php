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
            <td style="width: 80%;background-color: #f14950;padding:10px;vertical-align: top;color: white;border-radius: 10px;" rowspan="7">
                    
                    <form action="<?= base_url('API/save_requestData') ?>" method="post">
                      <table style="border: 0px;">
                      <tr>
                          <b style="color: white;"><b>GANTI PASSWORD</b> </b>
                      </tr>
                        <tr><td style="width: 20%;border: 0px;"><b>Username </b></td><td style="border: 0px;">: <input readonly value="<?= $user->username ?>" type="text" name="username"></td></tr>
                        <tr><td style="width: 20%;border: 0px;"><b>New Password </b></td><td onclick="Request_Services.removeDisabled(4)" class="req" style="border: 0px;">:<input type="hidden"  name="jenis_req[4]"  value="CHANGE_PASSWORD" disabled> <input style="pointer-events: none" onclick="Request_Services.removeDisabled(4)" disabled type="password" name="data_request[4]" ></td></tr>

                       <tr>
                        <td style="border: 0px;" colspan="2">
                      <button type="submit" class="btn btn-block" style="background-color: #eaa400;"><b style="color: #806142;">REQUEST GANTI PASSWORD</b></button>
                        </td>
                      </table>
                    </form>
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