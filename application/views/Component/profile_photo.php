
<div class="blog-item">
    <div class="position-relative" style="background-color: #fafafa;">
        <div class="item-thumbnail text-center" style="height: 10vw; width: 10vw; overflow: hidden">
            <?php if(isset($user->photo)): ?>
                <img src="<?= base_url('resources/upload/').$this->session->userdata('user_id').'/'.$user->photo;?>" style="height: 100%" id="profilePreview">
            <?php else: ?>
                <img src="<?= base_url('assets/img/');?>user.png" style="height: 100%" id="profilePreview">

            <?php endif; ?>
        </div>
        <br>
        Welcome Back <b style="color: #f7a91e;"><?= $user->full_name ?></b>
    </div>
    <br>
    <form action="<?= base_url('Profile/save_changes') ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="profilePhoto" id="profileUpload" style="display:none" />
        <button type="submit" id="profilUploadButton" class="btn btn-primary btn-sm m-t-1 hide">Save</button>
    </form>
</div>
<br><br>

<div id="edit_photo" style="cursor: pointer; background-color: #f7a91e;"
    class="border-radius-15 width-50px padding-10px text-white text-center position-absolute top-20px right-20px">
    <a title="Ganti Foto" data-original-title="Ganti Foto"><i class="fa fa-cog"></i></a>
</div>