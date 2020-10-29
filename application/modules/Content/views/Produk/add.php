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
        <!-- </div> 	 -->
        <div class="table-responsive card-body py-4">
        <div class="image_upload_div">
            <style>
            .produkDrop{
              min-height: 150px;
              border: 2px solid rgba(0, 0, 0, 0.3);
              background: white;
              padding: 20px 20px;
              cursor: pointer
            }
            </style>
            <label for="">Foto Produk</label>
            <form action="<?= base_url('content/product/upload_foto') ?>" data-delete="<?= base_url('content/product/delete_attachment?id=') ?>" <?= isset($form_data) ? 'data-get='.base_url('content/product/get_attachment?id=').$_GET['session_id'] : '' ?>" session_token="<?= $this->session->userdata('user_id') ?>" class="produkDrop dropzone" id="produkDrop" style="display: flex;flex-direction: row">
            <div class="fallback">
              <input name="foto_produk[]" type="file" multiple />
            </div>
            </form>
          </div>
          <form action="<?= $form_url ?>" class='row' method="POST" enctype="multipart/form-data">
          
            <!-- <div class="form-group col-md-12">
              <label for="">Foto Produk</label>
              <input type="file" name="foto_produk[]" multiple="multiple" data-preview="#foto_produk" id="" class="form-control">
              <div class="preview" id="foto_produk">
                <?php if(isset($form_data) && $form_data->thumbnail != null): ?>
                  <embed src="<?= base_url('resources/Produk/'.$form_data->thumbnail) ?>" type="" id="foto_ahli_waris" class="mt-2 p-2 file-border">
                <?php endif; ?>
              </div>
            </div> -->
            <!-- <?php if(isset($attachment)): ?>
              <?php foreach($img as $key => $val) ?>
                  <img src="<?= base_url('resources/Produk/').$this->session->userdata('user_id').'/'.$val->nama_file ?>" alt="">
            <?php endif; ?> -->
            <textarea name="attachment" value="<?= isset($form_data) ? $attachment : '' ?>" style="display: none" id="attch_list" cols="30" rows="10"><?= isset($form_data) ? $attachment : '' ?></textarea>
            <div class="form-group col-md-12">
              <label for="">Judul Produk</label>
              <input type="text" name="judul" value="<?= isset($form_data) ? $form_data->title : '' ?>" id="" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="">Harga Produk</label>
              <input type="number" name="subjudul" value="<?= isset($form_data) ? $form_data->harga : '' ?>" id="" class="form-control">
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
              <textarea class="form-control news-content" name="isi_berita" id="" cols="30" rows="10"><?= isset($form_data) ? $form_data->deskripsi : '' ?></textarea>
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