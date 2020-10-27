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
              <label for="">Gambar</label>
              <input type="file" name="cover_slider" data-preview="#cover_slider" id="" class="form-control">
              <br>
                <?php if(isset($form_data) && $form_data->nama_file != null): ?>
                  <img src="<?= base_url('resources/Slider/'.$form_data->nama_file) ?>" alt="Image placeholder" class="card-img-top" style="width: 20%;">
                <?php endif; ?>
            </div>
            <div class="form-group col-md-12">
              <label for="">Status</label>
              <select name="status_slider" id="" class="form-control">
                  <?php foreach($status_list as $key => $val): ?>
                    <option value="<?= $key ?>" <?= isset($form_data) && $form_data->status_slider == $key ? 'selected' : ''  ?> ><?= $val ?></option>  
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