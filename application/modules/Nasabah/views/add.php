<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-3">

      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-6">
              <h3><?= $card_title ?></h3>
            </div>
          </div>
        </div>
        <div class="table-responsive card-body py-4">
          <form action="<?= $form_url ?>" class='row' method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-12">
              <label for="">Nama Lengkap</label>
              <input type="text" name="full_name" id="" class="form-control">
            </div>
            <div class="form-group col-md-7">
              <label for="">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" id="" class="form-control">
            </div>
            <div class="form-group col-md-5">
              <label for="">Tanggal Lahir</label>
              <input type="text" name="tanggal_lahir" id="" class="form-control datepicker">
            </div>
            <div class="form-group col-md-12">
              <label for="">Jenis Kelamin</label>
              <input type="text" name="jenis_kelamin" id="" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="">Nomor KTP</label>
              <input type="text" name="ektp" id="" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="">Nomor Kartu Keluarga</label>
              <input type="text" name="no_kk" id="" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="">Nomor Handphone</label>
              <input type="text" name="no_hp" id="" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">Email</label>
              <input type="text" name="email" id="" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">Username</label>
              <input type="text" name="username" id="" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control">
            </div>
            <style>
              .file-border{
                border: 1px solid #666;
              }
            </style>
            <div class="form-group col-md-12">
              <label for="">Foto</label>
              <input type="file" name="photo" data-preview='#foto' id="" class="form-control">
              <!-- <embed src="" type="" id="foto" class="mt-2 p-2"> -->
              <div class="preview mt-2 p-2" id="foto"></div>
            </div>
            <div class="form-group col-md-12">
              <label for="">Foto KTP</label>
              <input type="file" name="foto_ktp" data-preview='#foto_ktp' id="" class="form-control">
              <div class="preview mt-2 p-2" id="foto_ktp"></div>
            </div>
            <div class="form-group col-md-12">
              <label for="">Foto Kartu Keluarga</label>
              <input type="file" name="foto_kk" id="" data-preview="#foto_kk" class="form-control">
              <div class="preview mt-2 p-2" id="foto_kk"></div>

            </div>
            <div class="form-group col-md-12">
              <label for="">Foto KTP Ahli Waris</label>
              <input type="file" name="foto_ktp_ahli_waris" data-preview="#foto_ahli_waris" id="" class="form-control">
              <div class="preview mt-2 p-2"id="foto_ahli_waris" ></div>

            </div>
            <div class="form-group col-md-12">
              <label for="">Additional</label>
              <textarea name="additional" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-lg btn-danger" onClick="javascript:history.go(-1)"><i class="fa fa-times"></i> &nbsp;Batal</button>
              <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> &nbsp;Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>