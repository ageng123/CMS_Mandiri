    


  <!-- page output -->
  <div class="padding-tb-40px background-light-grey">
    <div class="container">
            <h1 class="widget-title clearfix"><b>PROFILE </b></h1>
            <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
      <div class="row">
     
      <div class="col-12" style="margin-top: 3vh;">

     <div class="col-lg-3">
          <div class="blog-item thum-hover border-radius-15 hidden background-white hvr-float hvr-sh2">
            <div class="position-relative">
             
                <div class="item-thumbnail background-dark"><img src="<?= base_url('assets/img/');?>opening.jpg" alt=""></div>
            
            </div>

               <div class="border-radius-15 width-50px padding-10px background-main-color text-white text-center position-absolute top-20px right-20px">
                <a href="<?= base_url();?>profile/edit_foto" title="Ganti Foto" data-original-title="Ganti Foto"><i class="fa fa-setting"></i></a>
              </div>
          </div>
        </div>
        <br>

        <table style="font-size: 14px;">
          <tr>
            <td style="width: 20%;"><a href="<?= base_url();?>Profile" class="btn btn-sm border-2 border-radius-30 btn-block text-white" style="background-color: #eaa400;">Data Profile</a></td>
            <td></td>
            
            <td style="width: 80%;background-color: #eaa400;padding:10px;vertical-align: top;color: white;border-radius: 10px;" rowspan="7">
                    
                    <form action="<?= base_url('request/save_data') ?>" method="post">
                    <table style="border: 0px;">
                    <tr><td style="width: 25%;border: 0px;"><h3>Nama Rekening </h3></td><td style="border: 0px;">: <input type="hidden" name="jenis_req[1]" value="NAMA_REKENING"><input type="text" name="data_request[1]" value="<?= isset($rekening->nama) ? $rekening->nama : '' ?>"  style="width: 75%;"></td></tr>
                    <tr><td style="width: 25%;border: 0px;"><h3>Nomer Rekening </h3></td><td style="border: 0px;">: <input type="hidden" name="jenis_req[2]" value="NOMOR_REKENING"><input type="text" name="data_request[2]" value="<?= isset($rekening->nomor) ? $rekening->nomor : '' ?>" style="width: 75%;"></td></tr>
                    <tr><td style="width: 25%;border: 0px;"><h3>Cabang </h3></td><td style="border: 0px;">:<input type="hidden" name="jenis_req[3]" value="CABANG"><input type="text" name="data_request[3]" value="<?= isset($rekening->cabang) ? $rekening->cabang : '' ?>" style="width: 75%;"></td></tr>
                    </table>
                    <button type="submit" class="btn btn-lg border-2 border-radius-0 btn-warning btn-block">Request Ganti Nomer Rekening</button>
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