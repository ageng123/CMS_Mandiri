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
              <label for="">Cover Berita</label>
              <input type="file" name="cover_berita" data-preview="#cover_berita" id="" class="form-control">
              <div class="preview" id="cover_berita">
                <?php if(isset($form_data) && $form_data->thumbnail != null): ?>
                  <embed src="<?= base_url('resources/Berita/'.$form_data->thumbnail) ?>" type="" id="foto_ahli_waris" class="mt-2 p-2 file-border">
                <?php endif; ?>
              </div>
            </div>
            <div class="form-group col-md-12">
              <label for="">Judul Berita</label>
              <input type="text" name="judul" value="<?= isset($form_data) ? $form_data->title : '' ?>" id="" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">subjudul Berita</label>
              <input type="text" name="subjudul" value="<?= isset($form_data) ? $form_data->sub : '' ?>" id="" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">Kategori Berita</label>
              <select name="kategori_berita[]" multiple='multiple' id="" class="form-control select2">
                <option value="">Pilih Kategori</option>
              <?php $value = isset($form_data) ? explode(',',$form_data->tag_id) : [] ;foreach($kategori_list as $key => $val): ?>

                <option value="<?= $val->id_kategori ?>" <?= in_array($val->id_kategori, $value) ? 'selected' : '' ?> ><?= $val->nama_kategori ?></option>  
              <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label for="">Isi Berita</label>
              <textarea class="form-control news-content" name="isi_berita" id="" cols="30" rows="10"><?= isset($form_data) ? $form_data->content : '' ?></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="">Status Berita</label>
              <select name="status_berita" id="" class="form-control">
              <?php foreach($status_list as $key => $val): ?>
                <option value="<?= $key ?>" <?= isset($form_data) && $form_data->status == $key ? 'selected' : ''  ?> ><?= $val ?></option>  
              <?php endforeach; ?>
              </select>
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