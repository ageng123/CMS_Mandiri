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
              <label for="">Parent Menu</label>
              <select name="parent_id" id="" class="form-control">
                <option value="">No Parent</option>
                <?php foreach($menu_data as $val): ?>
                  <option value="<?= $val->id_menu ?>" <?= isset($form_data) && $form_data->parent_menu == $val->id_menu ? 'Selected' : '';  ?> ><?= $val->nama_menu ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label for="">Nama Menu</label>
              <input type="text" name="nama_menu" id="" value="<?= isset($form_data) ? $form_data->nama_menu : '' ?>" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">Link Menu</label>
              <input type="text" name="link_menu" value="<?= isset($form_data) ? $form_data->link_menu : '' ?>" id="" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">Icon Menu</label>
              <input type="text" name="icon_menu" value="<?= isset($form_data) ? $form_data->icon_menu : '' ?>" id="" class="form-control">
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