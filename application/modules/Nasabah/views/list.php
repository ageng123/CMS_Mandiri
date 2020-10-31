<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-3">

      </div>
    </div>
  </div>
</div>
<style></style>
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
                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Data"><i
                    class="fa fa-plus"></i></button>
              </span>

              <!-- <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tambah Data" href="<?= base_url('users/add') ?>"> <span class="btn-inner--text"><i class="fa fa-plus"></i></span></a> -->
              <a href="<?= base_url();?>nasabah/excel" class="btn btn-success btn-sm" data-toggle="tooltip"
                data-placement="top" title="Export Excel"> <span class="btn-inner--text"><i
                    class="fa fa-file-excel"></i></span></a>
            </div>
          </div>
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush init-DataTable" data-url="<?= base_url('Nasabah/getJSON') ?>" id="userTbl">
            <thead class="thead-light">
              <tr>
                <th></th>
                <th class="text-center" style="padding: 1.3vh"><input type="checkbox"
                    class="form-check-input all-checkbox-dt" style="position: inherit; margin: auto" name="" id=""></th>
                <th>Sudah Member</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Created On</th>
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
    <div class="modal-dialog modal-primary modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent class=" form-control-label pb-1">
              <div class="text-muted text-center"> <b>Form Input Data</b> </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form id="step-form" method="post" enctype="multipart/form-data"
                action="<?= base_url('landing/pendaftaran_nasabah') ?>">
                <div>
                  <h3>Data Diri</h3>
                  <section style="background-color: #ffffff;">
                    <div class="form-group">
                      <label for="">
                        <h5>Apakah Sudah Menjadi Member <b style="color: #432a19;">Komunitas</b> <b
                            style="color: #f7a91e;">PanenSaham</b> ?</h5>
                      </label><br>
                      <div class="w-50 daftar-radio">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input member required" type="radio" name="data_diri[member]" id=""
                            value="sudah">
                          <label class="form-check-label" for="inlineRadio1">
                            <h5>Sudah</h5>
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input member required" type="radio" name="data_diri[member]" checked
                            id="" value="belum">
                          <label class="form-check-label" for="inlineRadio2">
                            <h5>Belum</h5>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group w-50 flex-row hide" id="client_id">
                      <label style="min-width: 6vw;" for="">
                        <h5>Client Id</h5>
                      </label>
                      <input type="text" name="data_diri[client_id]" data-bind="client_id" id="" class="form-control">
                      <p style="min-width: 6vw; margin-top: 10px;" for="">
                        <h6>*Wajib memasukan Client ID jika sudah menjadi member</h6>
                      </p>
                    </div>
                    <br />
                    <div class="form-group">
                      <label for="">
                        <h5>Apakah Sudah Memiliki <b style="color: #432a19;">Kartu Tanda Penduduk</b> <b
                            style="color: #f7a91e;">(Diatas 17 Tahun)</b> ?</h5>
                      </label> <br>
                      <div class="w-50 daftar-radio">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input ktp" type="radio" name="data_diri[punya_ktp]" checked id=""
                            value="sudah">
                          <label class="form-check-label" for="inlineRadio3">
                            <h5>Sudah</h5>
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input ktp" type="radio" name="data_diri[punya_ktp]" id=""
                            value="belum">
                          <label class="form-check-label" for="inlineRadio4">
                            <h5>Belum</h5>
                          </label>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="form-group">
            <table>
              <tr>
                <td id="ktp" class="show">
                  <label for="">Upload E-KTP</label>
                  <input type="file" name="ktp" id=""></td>
                  <td id="kk2" class="show">
                    <label for="">Upload KK* (Optional)</label> <br/>
                    <label for="">*Wajib Upload jika belum memiliki KTP</label>
                    <input type="file" name="kk" id=""></td>

                <td id="ktp_ahli" class="hide">
                  <label for="">Upload KTP Ahli Waris</label>
                  <input type="file" name="ktp_ahli" id=""></td>
                <td id="kk" class="hide">
                  <label for="">Upload KK*</label> <br/>
                  <label for="">*Wajib Upload jika belum memiliki KTP</label>
                  <input type="file" name="kk" id=""></td>
              </tr>
            </table>
          </div> -->

                    <label for="">
                      <h5>Pilih <b style="color: red;">SALAH SATU</b> dari dokumen yang akan di upload : </h5>
                    </label> <br>



                    <div class="form-row">
                      <div class="col show" id="ktp">
                        <img src="<?= base_url('assets/img/ktpkk.png') ?>" height="110" alt="">
                        <label for="">
                          <h5>Upload <b style="color: #f7a91e;">E-KTP</b></h5>
                        </label>
                        <input type="file" name="ktp" id="">
                      </div>
                      <div class="col show" id="kk2">
                        <img src="<?= base_url('assets/img/ktpkk.png') ?>" height="110" alt="">
                        <label for="">
                          <h5>Upload <b style="color: #f7a91e;">KK</b>* (Optional)</h5>
                        </label>
                        <input type="file" name="kk" id="">
                      </div>
                      <div class="col hide" id="ktp_ahli">
                        <img src="<?= base_url('assets/img/ktpkk.png') ?>" height="110" alt="">
                        <label for="">
                          <h5>Upload <b style="color: #f7a91e;">E-KTP AHLI WARIS</h4></b>
                        </label>
                        <input type="file" name="ktp_ahli" id="">
                      </div>
                      <div class="col hide" id="kk">
                        <img src="<?= base_url('assets/img/ktpkk.png') ?>" height="110" alt="">
                        <label for="">
                          <h5>Upload <b style="color: #f7a91e;">KK</b>* </h5>
                        </label> <br />
                        <label for="">
                          <h6>*Wajib Upload jika belum memiliki KTP</h6>
                        </label>
                        <input type="file" name="kk" id="">
                      </div>
                    </div>

                    <br /><br />
                    <div class="form-row">
                      <div class="col">
                        <label for="">
                          <h5>Alamat Email</h5>
                        </label>
                        <input type="email" id="email" class="form-control" name="data_diri[email]" data-bind="email">
                        <label for="">
                          <h6>*nama@mail.com</h6>
                        </label>
                      </div>
                      <div class="col">
                        <label for="">
                          <h5>Ulangi Alamat Email</h5>
                        </label>
                        <input type="email" id="Cemail" class="form-control" name="Cemail">
                      </div>
                    </div>
                    <div class="form-row pt-2">
                      <div class="col">
                        <label for="">
                          <h5>Kata Sandi</h5>
                        </label>
                        <input type="password" id="password" class="form-control" name="data_diri[password]">
                        <label for="">
                          <h6>*Kata Sandi harus diantara 8-20 karakter, dan mengandung paling sedikit satu angka, huruf
                            kapital. Simbol tidak diperkenankan </h6>
                        </label>
                      </div>
                      <div class="col">
                        <label for="">
                          <h5>Ulangi Kata Sandi</h5>
                        </label>
                        <input type="password" class="form-control" name="Cpassword">
                      </div>
                    </div>
                    <br />
                    <div class="form-group pt-4">
                      <h1><b style="color: #432a19;">MOHON DIISI INFORMASI BERIKUT :</b></h1>
                      <h6>
                        <p>(Seluruh Data Formulir <b style="color: red;">WAJIB</b> diisi dengan lengkap dan benar) </p>
                      </h6>
                    </div>
                    <br />
                    <div class="form row">
                      <div class="col">
                        <label for="">
                          <h5>Nama Lengkap Sesuai Identitas</h5>
                        </label>
                        <input type="text" class="form-control" id="colFormLabelSm" name="data_diri[nama]"
                          data-bind="nama" placeholder="">
                      </div>
                      <div class="col">
                        <label for="">
                          <h5>Nomor Identitas (E-KTP/KTP AHLI WARIS/KK)</h5>
                        </label>
                        <input type="text" class="form-control" id="colFormLabelSm" name="data_diri[nomor_identity]"
                          data-bind="nomor_identity" placeholder="">
                      </div>
                    </div>
                    <br />
                    <div class="form row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">
                            <h5>Tempat/Tanggal/Bulan/Tahun Lahir</h5>
                          </label>
                          <div class="row">
                            <div class="col-md-4">
                              <input type="text" name="data_diri[tempat]" placeholder="PLACE" class="form-control"
                                data-bind="tempat">
                            </div>
                            <div class="col-md-2">
                            <select name="data_diri[tanggal]" class="form-control" id="">
                              <option value="">DD</option>
                              <?php for($i = 1; $i <= 31; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                              <?php endfor; ?>
                            </select>
                            </div>
                            <div class="col-md-2">
                            <select name="data_diri[bulan]" class="form-control" id="">
                              <option value="">MM</option>
                              <?php for($i = 1; $i <= 12; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                              <?php endfor; ?>
                            </select>
                            </div>
                            <div class="col-md-3">
                              <input type="text" name="data_diri[tahun]" placeholder="YYYY"
                                class="form-control tahunpicker" data-bind="tahun">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="row">
                          <label for="" class="col-form-label col-md-6">
                            <h5>Jenis Kelamin</h5>
                          </label>
                          <div class="col-md-6">
                            <select name="data_diri[jenis_kelamin]" id="" data-bind="jenis_kelamin"
                              class="form-control">
                              <option value="">Pilih Jenis Kelamin</option>
                              <option value="Laki-laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br />
                    <div class="form-group">
                      <label for="">
                        <h5>Alamat Rumah (Sesuai KTP / E-KTP / KK) </h5>
                      </label>
                      <textarea name="data_diri[alamat]" id="diri_alamat" cols="30" rows="10" class="form-control"
                        data-bind="alamat"></textarea>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">
                            <h5>Provinsi</h5>
                          </label>
                          <select name="data_diri[provinsi]" class="form-control getProvinsi" id="provinsi"
                            data-kabupatenlist='#kabupaten1' data-bind="provinsi"></select>
                        </div>
                        <div class="form-group">
                          <label for="">
                            <h5>Kecamatan</h5>
                          </label>
                          <input type="text" name="data_diri[kecamatan]" id="diri_kecamatan" class="form-control"
                            data-bind="kecamatan">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">
                            <h5>Kabupaten</h5>
                          </label>
                          <select name="data_diri[kabupaten]" class="form-control" id="kabupaten1"
                            data-bind="kabupaten"></select>
                        </div>
                        <div class="form-group">
                          <label for="">
                            <h5>Kelurahan</h5>
                          </label>
                          <input type="text" name="data_diri[kelurahan]" id="diri_kelurahan" data-bind="kelurahan"
                            class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">
                            <h5>RT / RW</h5>
                          </label>
                          <input type="text" name="data_diri[rt]" id="diri_rt" data-bind="rt" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">
                            <h5>Kode Pos</h5>
                          </label>
                          <input type="text" name="data_diri[kodepos]" data-bind="kodepos" id="diri_kodepos"
                            class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6 row">
                        <label class="col-form-label col-md-5" for="">
                          <h5>Nomor Handphone</h5>
                        </label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" data-bind="hp" name="data_diri[hp]">
                        </div>
                      </div>
                      <div class="col-md-6 row">
                        <label class="col-form-label col-md-5" for="">
                          <h5>Nomor Rumah</h5>
                        </label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" data-bind="rumah" name="data_diri[rumah]">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-2" for="">
                        <h5>Pendidikan</h5>
                      </label>
                      <div class="col-md-4">
                        <select name="data_diri[pendidikan]" data-bind="pendidikan" class="form-control" id="">
                          <option value="Belum Sekolah">Belum Sekolah</option>
                          <option value="TK">TK</option>
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA">SMA</option>
                          <option value="D3">D3</option>
                          <option value="Akademi">Akademi</option>
                          <option value="S1 Sarjana">S1 Sarjana</option>
                          <option value="S2 Master">S2 Master</option>
                          <option value="S3 Doktor">S3 Doktor</option>
                        </select>
                      </div>
                    </div>
                    <br />
                    <div class="form-group">
                      <label style="display: flex; flex-direction: row; width: 100%; justify-content: space-between"
                        for="">
                        <h5>Alamat Rumah (Sesuai KTP / E-KTP / KK)</h5>
                        <div class="daftar-radio">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alamatradio" id="alamat_radio"
                              value="option2">
                            <label class="form-check-label" for="alamat_radio">
                              <h5><b style="color: red;">Sama Dengan Alamat Rumah</b></h5>
                            </label>
                          </div>
                        </div>
                      </label>
                      <textarea name="data_diri[alamat_rumah]" id="alamat_rumah" data-bind="alamat_rumah"
                        data-update="alamat_lengkap" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                  </section>

                  <h3>STEP 2</h3>

                  <section style="background-color: #ffffff;">
                    <h2><b style="color: #432a19;">DATA</b> <b style="color: #f7a91e;">PEKERJAAN</b></h2>
                    <div class="form row">
                      <div class="col">
                        <label for="">
                          <h5>Pekerjaan</h5>
                        </label>
                        <select class="form-control" data-bind="jenis_pekerjaan" name="pekerjaan[jenis]" id="pekerjaan">
                          <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="PNS">PNS</option>
                          <option value="Pelajar">Pelajar</option>
                          <option value="Mahasiswa">Mahasiswa</option>
                          <option value="Profesional">Profesional</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                      </div>
                      <div class="col">
                        <label for="">
                          <h5 style="color: #ffffff;">Pekerjaan Lainnya</h5>
                        </label>
                        <input type="text" class="form-control hide" data-bind="jenis_pekerjaan" id="detail_pekerjaan"
                          placeholder="Pekerjaan Lainnya" name="pekerjaan[jenis]">
                      </div>
                    </div>
                    <br />
                    <div class="form row">
                      <div class="col">
                        <label for="">
                          <h5>Nama Perusahaan</h5>
                        </label>
                        <input type="text" class="form-control" data-bind="nama_perusahaan" name="pekerjaan[perusahaan]"
                          id="">
                      </div>
                      <br /><br />
                      <div class="col">
                        <label for="">
                          <h5>Divisi</h5>
                        </label>
                        <input type="text" class="form-control" data-bind="divisi" name="pekerjaan[divisi]" id="">
                      </div>
                      <div class="col">
                        <label for="">
                          <h5>Lama Bekerja</h5>
                        </label>
                        <input type="text" class="form-control" data-bind="lama" name="pekerjaan[lama]"
                          placeholder="12 Tahun / 2012 / Maret" id="">
                      </div>
                    </div>
                    <br />
                    <div class="form-group">
                      <label for="">
                        <h5>Alamat Perusahaan</h5>
                      </label>
                      <textarea name="pekerjaan[alamat]" data-bind="alamat_perusahaan" class="form-control" id=""
                        cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">
                            <h5>Provinsi</h5>
                          </label>
                          <select name="pekerjaan[provinsi]" data-bind="provinsi_perusahaan"
                            class="form-control getProvinsi" id="provinsi2" data-kabupatenlist='#kabupaten2'></select>
                        </div>
                        <div class="form-group">
                          <label for="">
                            <h5>Kecamatan</h5>
                          </label>
                          <input type="text" name="pekerjaan[kecamatan]" data-bind="kecamatan_perusahaan" id=""
                            class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">
                            <h5>Kabupaten</h5>
                          </label>
                          <select name="pekerjaan[kabupaten]" data-bind="kabupaten_perusahaan" class="form-control"
                            id="kabupaten2"></select>
                        </div>
                        <div class="form-group">
                          <label for="">
                            <h5>Kelurahan</h5>
                          </label>
                          <input type="text" name="pekerjaan[kelurahan]" data-bind="kelurahan_perusahaan" id=""
                            class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">
                            <h5>RT / RW</h5>
                          </label>
                          <input type="text" name="pekerjaan[rt]" data-bind="rt_perusahaan" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">
                            <h5>Kode Pos</h5>
                          </label>
                          <input type="text" name="pekerjaan[kodepos]" data-bind="kodepos_perusahaan" id=""
                            class="form-control">
                        </div>
                      </div>
                    </div>
                    <br />
                    <h2><b style="color: #432a19;">DATA REKENING PEMBAYARAN</b> <b style="color: #f7a91e;">SISA HASIL
                        USAHA (SHU)</b></h2>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">
                            <h5>Nama Rekening</h5>
                          </label>
                          <input type="text" name="shu[nama]" data-bind="nama_rekening" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">
                            <h5>Nama Bank</h5>
                          </label>
                          <input type="text" name="shu[bank]" data-bind="nama_bank" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">
                            <h5>No Rekening</h5>
                          </label>
                          <input type="text" name="shu[norek]" data-bind="nomor_rekening" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">
                            <h5>Cabang</h5>
                          </label>
                          <input type="text" name="shu[cabang]" data-bind="cabang_bank" class="form-control">
                        </div>
                      </div>
                    </div>
                    <br />
                    <h2><b style="color: #432a19;">DATA</b> <b style="color: #f7a91e;">AHLI WARIS</b></h2>
                    <div class="form-group">
                      <label for="">
                        <h5>Nama Ahli Waris</h5>
                      </label>
                      <input type="text" name="waris[nama]" data-bind="nama_ahli_waris" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">
                        <h5>Hubungan Ahli Waris</h5>
                      </label>
                      <input type="text" name="waris[hubungan]" data-bind="hubungan_ahli_waris" id=""
                        class="form-control">
                    </div>
                    <br />
                    <h2><b style="color: #432a19;">DATA</b> <b style="color: #f7a91e;">SIMPANAN</b></h2>
                    <table style="width: 100%">
                      <tr>
                        <td style="width: 70%" colspan="2">
                          <h5><b>1. Simpanan Pokok</b></h5>
                        </td>
                        <td>
                          <h5>RP. 100.000</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5><b>2. Simpanan Wajib</b></h5>
                        </td>
                        <td style="float: right">
                          <select data-bind="simpanan_wajib" name="simpanan[wajib]" id="select_wajib"
                            class="form-control-sm">
                            <?php for($i = 1; $i <= 12; $i++): ?>
                            <option value="<?= $i ?>"> <?= $i.' Bulan' ?> </option>
                            <?php endfor; ?>
                          </select>
                        </td>
                        <td id="wajib" data-biaya="15000" data-bind="total_biaya_wajib">
                          <h5>Rp. 15.000</h5>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <h5><b>3. Simpanan Sukarela</b></h5>
                        </td>
                        <td class="row p-3">
                          <h5>RP.</h5> <input id="sukarela" type="text" data-bind="simpanan_sukarela"
                            class="form-control-sm" name="simpanan[sukarela]">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <h5><b>Total Pembayaran</b></h5>
                        </td>
                        <td data-bind="total_biaya">
                          <h5 id="biaya-total">RP. 115.000 </h5><input type="hidden" name="total_pembayaran"
                            data-bind="biaya_total">
                        </td>
                      </tr>
                    </table>
                    <br />
                  </section>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>