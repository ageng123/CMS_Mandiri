<div class="blog-item thum-hover border-radius-15 hidden background-white hvr-float hvr-sh2">
            <div class="position-relative">
             
                <div class="item-thumbnail background-dark"><img id="profilePreview" src="<?= base_url('assets/img/');?>opening.jpg" alt=""></div>
            </div>
            <form action="">
              <input type="file" name="profilePhoto" id="profileUpload" style="display:none"/> 
              <button type="submit" id="profilUploadButton" class="btn btn-primary btn-block m-t-1 hide">Save</button>
              </form>
               <div  style="cursor: pointer" id="edit_photo" class="border-radius-15 width-50px padding-10px background-main-color text-white text-center position-absolute top-20px right-20px">
                <a title="Ganti Foto"data-original-title="Ganti Foto"><i class="fa fa-setting"></i></a>
              </div>
              
          </div>
          <div class="blog-item">
            <div class="position-relative" style="background-color: #fafafa;">
                <div class="item-thumbnail rounded-circle">
                  <img src="<?= base_url('assets/img/');?>user.png">
                  
                </div>
                <br>
                <center>Welcome Back <b style="color: #f7a91e;"><?= $user->full_name ?></b></center>
            </div>
            <form action="">
              <input type="file" name="profilePhoto" id="profileUpload" style="display:none"/> 
              <button type="submit" id="profilUploadButton" class="btn btn-primary btn-block m-t-1 hide">Save</button>
              </form>
          </div>
          
          <div class="border-radius-15 width-50px padding-10px background-main-color text-white text-center position-absolute top-20px right-20px">
            <a href="<?= base_url();?>profile/edit_foto" title="Ganti Foto" data-original-title="Ganti Foto"><i class="fa fa-cog"></i></a>
          </div>