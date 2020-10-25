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
              <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data" href="<?= base_url('content/berita/add') ?>"> <i class="fa fa-plus"></i></a>
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
          <table class="table table-flush init-DataTable" data-url="<?= base_url('gambarslider/getJSON') ?>"
            id="userTbl">
            <thead class="thead-light">
              <tr>
                <th></th>
                <th class="text-center" style="padding: 1.3vh"><input type="checkbox"
                    class="form-check-input all-checkbox-dt" style="position: inherit; margin: auto" name="" id=""></th>
                <th>Nama Gambar</th>
                <th>Status Gambar</th>
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
