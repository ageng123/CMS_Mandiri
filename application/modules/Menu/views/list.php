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
              <a class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data" href="<?= base_url('menu/add') ?>"> <span class="btn-inner--text"><i class="fa fa-plus"></i></span>Tambah Data</a>
              <a class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Export Excel" href="#"> <span class="btn-inner--text"><i class="fa fa-file-excel"></i></span>Export Excel</a>
            </div>
        </div>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush init-DataTable" data-url="<?= base_url('Menu/getJSON') ?>" id="menuTbl">
          <thead class="thead-light">
            <tr>
              <th></th>
              <th class="text-center" style="padding: 1.3vh"><input type="checkbox" class="form-check-input all-checkbox-dt" style="position: inherit; margin: auto" name="" id=""></th>
              <th>Nama Menu</th>
              <th>Parent Menu</th>
              <th>Icon</th>
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


