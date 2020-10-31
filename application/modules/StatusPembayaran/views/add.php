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
              <div class="form-group col-md-6">
                <label class="form-control-label" for="">ID Nasabah</label>
                <input type="text" name="id_nasabah" value="<?= isset($form_data) ? $form_data->id_nasabah : '' ?>" id="" class="form-control" disabled>
              </div>
              <div class="form-group col-md-6">
                <label class="form-control-label" for="">Jenis Bayar</label>
                <input type="text" name="jenis_bayar" value="<?= isset($form_data) ? $form_data->jenis_bayar : '' ?>" id="" class="form-control" required>
              </div>
              <div class="form-group col-md-6">
                <label class="form-control-label" for="">Jumlah Bayar</label>
                <input type="number" name="jml_pembayaran" value="<?= isset($form_data) ? $form_data->jml_pembayaran : '' ?>" id="" class="form-control" required>
              </div>
              <div class="form-group col-md-6">
                <label class="form-control-label" for="">Tgl Bayar</label>
                <input type="date" name="tgl_pembayaran" value="<?= isset($form_data) ? $form_data->tgl_pembayaran : '' ?>" id="" class="form-control" required>
              </div>
              <div class="form-group col-md-12">
                <label class="form-control-label" for="">Status</label>
                <select name="status" id="" class="form-control">
                    <?php foreach($status_list as $key => $val): ?>
                      <option value="<?= $key ?>" <?= isset($form_data) && $form_data->status == $key ? 'selected' : ''  ?> ><?= $val ?></option>  
                    <?php endforeach; ?>
                </select>
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