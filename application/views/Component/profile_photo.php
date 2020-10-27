
<div class="blog-item">
    <div class="position-relative" style="background-color: #fafafa;">
        <div class="item-thumbnail rounded-circle" style="height: 10vw; width: 10vw; overflow: hidden">
            <img src="<?= base_url('assets/img/');?>user.png" style="height: 100%" id="profilePreview">

        </div>
        <br>
        <center>Welcome Back <b style="color: #f7a91e;"><?= $user->full_name ?></b></center>
    </div>
    <form action="">
        <input type="file" name="profilePhoto" id="profileUpload" style="display:none" />
        <button type="submit" id="profilUploadButton" class="btn btn-primary btn-block m-t-1 hide">Save</button>
    </form>
</div>

<div id="edit_photo" style="cursor: pointer"
    class="border-radius-15 width-50px padding-10px background-main-color text-white text-center position-absolute top-20px right-20px">
    <a title="Ganti Foto" data-original-title="Ganti Foto"><i
            class="fa fa-cog"></i></a>
</div>