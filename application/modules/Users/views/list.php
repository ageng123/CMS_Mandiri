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
              <h3><?= isset($card_title) ? $card_title : 'Tabel' ?></h3>
            </div>
            <div class="col-6 text-right"> 

              <span data-toggle="modal" data-target="#modal-form">
                <button type="button" class="btn btn-primary btn-sm" onclick="UserServices.buttonAddClicked()" data-toggle="tooltip" title="Tambah Data"><i class="fa fa-plus"></i></button>
              </span>
            </div>
        </div>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush initDTOnly" data-url="<?= base_url('Users/getJSON') ?>" id="userTbl">
          <thead class="thead-light">
            <tr>
              <th>No.</th>
              <th>Username</th>
              <th>Jabatan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="userModal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-primary modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card bg-secondary border-0 mb-0">
          <div class="card-header bg-transparent class="form-control-label pb-1">
            <div class="text-muted text-center"> <b>Form Input Data</b> </div>
          </div>
          <div class="card-body px-lg-5 py-lg-5">
            <form action="<?= $form_url ?>" class='row' id="userForm" method="POST" enctype="multipart/form-data">
              <div class="form-group col-md-12">
                <label class="form-control-label" for="">Nama Lengkap</label>
                <input type="text" name="full_name" id="" class="form-control" required>
              </div>
              <div class="form-group col-md-7">
                <label class="form-control-label" for="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="" class="form-control">
              </div>
              <div class="form-group col-md-5">
                <label class="form-control-label for="">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" id="" class="form-control datepicker">
              </div>
              <div class="form-group col-md-12">
                <label class="form-control-label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="" class="form-control">
                  <option value="">Pilih Jenis Kelamin </option>
                  <option value="Laki-Laki">Laki - Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label class="form-control-label for="">Email</label>
                <input type="text" name="email" id="" class="form-control">
              </div>
              <div class="form-group col-md-12">
                <label class="form-control-label for="">Username</label>
                <input type="text" name="username" id="" class="form-control">
              </div>
              <div class="form-group col-md-12">
                <label class="form-control-label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
              </div>
              <style>
                .file-border{
                  border: 1px solid #666;
                }
              </style>
              <div class="form-group col-md-12">
                <label class="form-control-label for="">Foto</label>
                <input type="file" name="photo" data-preview='#foto' id="" class="form-control">
                <!-- <embed src="" type="" id="foto" class="mt-2 p-2"> -->
                <div class="preview mt-2 p-2" id="foto"></div>
              </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-lg btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp;Batal</button>
                <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-paper-plane"></i> &nbsp;Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



