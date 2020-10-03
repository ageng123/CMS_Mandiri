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
              <label for="">Nama Roles</label>
              <input type="text" name="nama_role" value="<?= isset($form_data) ? $form_data->nama_role : '' ?>" id="" class="form-control">
            </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-lg btn-success">Simpan</button>
          <button class="btn btn-lg btn-danger">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>