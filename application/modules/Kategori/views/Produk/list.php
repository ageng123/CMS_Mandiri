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
                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Data"><i class="fa fa-plus"></i></button>
              </span>
            </div>
        </div>
      </div>

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
      <?php if($this->session->flashdata('message')) : ?>
      <!-- <div class="alert alert-block alert-success fade in block-inner">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                  <h6><?php echo $this->session->flashdata('message') ?></h6>
              </div> -->
      <?php endif; ?>

      <div class="table-responsive py-4">
        <table class="table table-flush initDTOnly" data-url="<?= base_url('Kategori/Product/getJSON') ?>" id="userTbl">
          <thead class="thead-light">
            <tr>
              <th>No.</th>
              <th>Nama Kategori Produk</th>
              <th>Deskripsi</th>
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


<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-primary modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card bg-secondary border-0 mb-0">
          <div class="card-header bg-transparent class="form-control-label pb-1">
            <div class="text-muted text-center"> <b>Form Input Data</b> </div>
          </div>
          <div class="card-body px-lg-5 py-lg-5">
            <form action="<?= $form_url ?>" class='row' method="POST" enctype="multipart/form-data">
              <div class="form-group col-md-12">
                <label for="" class="form-control-label">Nama Kategori Produk</label>
                <input type="text" name="nama_kategori" value="<?= isset($form_data) ? $form_data->nama_kategori : '' ?>" id="" class="form-control">
              </div>
              <div class="form-group col-md-12">
                <label for="" class="form-control-label">Deskripsi Kategori</label>
                <textarea name="deskripsi_kategori" id="" rows="3" class="form-control"><?= isset($form_data) ? $form_data->deskripsi_kategori : '' ?></textarea>
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