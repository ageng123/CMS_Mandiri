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
              <label for="">Foto Produk</label>
              <input type="file" name="foto_produk[]" multiple="multiple" data-preview="#foto_produk" id="" class="form-control">
              <div class="preview" id="foto_produk">
                <?php if(isset($form_data) && $form_data->thumbnail != null): ?>
                  <embed src="<?= base_url('resources/Produk/'.$form_data->thumbnail) ?>" type="" id="foto_ahli_waris" class="mt-2 p-2 file-border">
                <?php endif; ?>
              </div>
            </div>
            <div class="form-group col-md-12">
              <label for="">Judul Produk</label>
              <input type="text" name="judul" value="<?= isset($form_data) ? $form_data->title : '' ?>" id="" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">Harga Produk</label>
              <input type="number" name="subjudul" value="<?= isset($form_data) ? $form_data->sub : '' ?>" id="" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">Kategori Produk</label>
              <select name="kategori_berita[]" multiple='multiple' id="" class="form-control select2">
                <option value="">Pilih Kategori</option>
              <?php $value = isset($form_data) ? explode(',',$form_data->tag_id) : [] ;foreach($kategori_list as $key => $val): ?>

                <option value="<?= $val->id_kategori ?>" <?= in_array($val->id_kategori, $value) ? 'selected' : '' ?> ><?= $val->nama_kategori ?></option>  
              <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label for="">Deskripsi Produk</label>
              <textarea class="form-control news-content" name="isi_berita" id="" cols="30" rows="10"><?= isset($form_data) ? $form_data->content : '' ?></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="">Status Produk</label>
              <select name="status_berita" id="" class="form-control">
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