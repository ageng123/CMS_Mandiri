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
                <label for="">Nama Kategori Produk</label>
                <input type="text" name="nama_kategori" value="<?= isset($form_data) ? $form_data->nama_kategori : '' ?>" id="" class="form-control">
              </div>
              <div class="form-group col-md-12">
                <label for="">Deskripsi Kategori</label>
                <textarea name="deskripsi_kategori" id="" rows="3" class="form-control"><?= isset($form_data) ? $form_data->deskripsi_kategori : '' ?></textarea>
              </div>
        </div>
        <div class="card-footer text-right">
            <button type="button" class="btn btn-lg btn-danger" onClick="javascript:history.go(-1)"><i class="fa fa-times"></i> &nbsp;Batal</button>
            <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-paper-plane"></i> &nbsp;Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </div>