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
                <h3>Nama Judul</h3>
            </div>
            <div class="col-6 text-right"> 
              <a class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Add" href="#"> <span class="btn-inner--text"><i class="fa fa-plus"></i></span> </a>
              <a class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Export Excel" href="#"> <span class="btn-inner--text"><i class="fa fa-file-excel"></i></span> </a>
            </div>
        </div>
      </div>
 
      <div class="table-responsive py-4">
        <table class="table table-flush init-DataTable" data-url="<?= base_url('Admin/getJSON') ?>" id="userTbl">
          <thead class="thead-light">
            <tr>
              <th>No</th>
              <th>Kolom A</th>
              <th>Kolom B</th>
              <th>Kolom C</th>
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


