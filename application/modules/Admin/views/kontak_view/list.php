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
              <a href="<?= base_url();?>email/excel" class="btn btn-success btn-sm" data-toggle="tooltip"
                data-placement="top" title="Export Excel"> <span class="btn-inner--text"><i
                    class="fa fa-file-excel"></i></span>
              </a>
            </div>
        </div>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush initDTOnly" data-url="<?= base_url('Admin/Kontak/getJSON') ?>" id="userTbl">
          <thead class="thead-light">
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Pesan</th>              
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



