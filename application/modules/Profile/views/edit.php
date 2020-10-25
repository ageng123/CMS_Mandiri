<!-- <img src="<?= base_url('assets/img/') ?>list.png" width="200%"> -->
    


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
                    
                    <div class="image_upload_div">
                    <style>
                    .produkDrop{
                      min-height: 150px;
                      border: 2px solid rgba(0, 0, 0, 0.3);
                      background: #eaa400;
                      padding: 20px 20px;
                      cursor: pointer;
                    }
                    </style>
                    <label for="">Foto Profile</label>
                    <form action="<?= base_url('content/product/upload_foto') ?>" data-delete="<?= base_url('content/product/delete_attachment?id=') ?>" <?= isset($form_data) ? 'data-get='.base_url('content/product/get_attachment?id=').$_GET['session_id'] : '' ?>" class="produkDrop dropzone" id="produkDrop" style="display: flex;flex-direction: row">
                    <div class="fallback">
                      <input name="foto_produk[]" type="file" multiple />
                      </div>
                       </form>
                    </div>
                   

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