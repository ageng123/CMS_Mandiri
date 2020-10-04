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
              <label for="">User</label>
              <select name="user_id" id="" class="form-control">
                <?php foreach($user_data as $val): ?>
                  <option value="<?= $val->id_user ?>" <?= isset($form_data) && $form_data->id_user == $val->id_user ? 'Selected' : '';  ?> ><?= $val->username ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label for="">Roles</label>
              <select name="role_id" id="" class="form-control">
                <?php foreach($role_data as $val): ?>
                  <option value="<?= $val->id_role ?>" <?= isset($form_data) && $form_data->id_role == $val->id_role ? 'Selected' : '';  ?> ><?= $val->nama_role ?></option>
                <?php endforeach; ?>
              </select>
            </div>
        </div>
        <div class="card-footer text-right">
              <button type="button" class="btn btn-lg btn-danger" onClick="javascript:history.go(-1)"><i class="fa fa-times"></i> &nbsp;Batal</button>
              <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-edit"></i> &nbsp;Update</button>
        </div>
      </div>
    </div>
  </div>