    
  <style>
        .wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active {
            background: #aaa;
            color: #aaa;
        }
        .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active {
            background: #f7a91e;
            color: #fff;
            font-weight: bold;
            display: block;
            padding: 1em 3em;
            text-decoration: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 50px;
        }
      </style>


      <!-- <section class="padding-tb-6px" style="background-color: #f7a91e;">
        <div class="container">
          <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
        </div>
      </section> -->


      <section style="background-color: #432a19;">
        <section class="padding-tb-50px" style="background-image: url('<?= base_url('assets/img/') ?>bg-pendaftaran.jpg');">
          <div class="container">
            <!-- section title -->
            <div class="row justify-content-left wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <div class="col-xs-12 col-lg-12">
                <img src="<?= base_url('assets/img/logo_kjpki _putih.png') ?>" height="100" alt="">
              </div>
            </div>


            <div class="row">
              <div class="col-xs-12 col-lg-12"> 
                <p class="text-extra-large" style="font-size:40px;">
                  <b style="color: #f7a91e; ">PENDAFTARAN</b> 
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-lg-6"> 
                <a href="#" class="btn btn-xl border-2 border-radius-30 border-orange btn-block margin-top-23px btn-secondary text-white">Online</a>
              </div>
              <div class="col-xs-12 col-lg-6"> 
                <a href="#" class="btn btn-xl border-2 border-radius-30 border-orange btn-block margin-top-23px btn-light text-dark">Offline</a>
              </div>
            </div>
          </div>
        </section>
      </section>
      
      <section class="padding-tb-6px" style="background-image: url('<?= base_url('assets/img/') ?>list2.jpg');">
        <div class="container">
          <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
        </div>
      </section>

        <section class="padding-tb-5px" style="background-color: #432a19;">
          <div class="container">
            <div class="row justify-content-center"></div>
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="text-left">
                  <h2 class="text-extra-large  margin-tb-10px">
                     <b style="color: #ffffff;">PENDAFTARAN</b> <b style="color: #f7a91e;">ONLINE</b>
                  </h2>
                </div>
              </div>
            </div>
            <!-- // row -->
          </div>
        </section>




<section class="padding-tb-30px">
  <style>

  </style>

  <div class="container">
    <form id="step-form" method="post" enctype="multipart/form-data" action="<?= base_url('Landing/pendaftaran_nasabah') ?>">
      <div>
        <h3>Data Diri</h3>
        <section style="background-color: #ffffff;">
          <div class="form-group">
            <label for=""><h5>Apakah Sudah Menjadi Member <b style="color: #432a19;">Komunitas</b> <b style="color: #f7a91e;">PanenSaham</b> ?</h5></label><br>
            <div class="w-50 daftar-radio">
              <div class="form-check form-check-inline">
                <input class="form-check-input member required" type="radio" name="data_diri[member]" id="" value="sudah">
                <label class="form-check-label" for="inlineRadio1"><h5>Sudah</h5></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input member required" type="radio" name="data_diri[member]" checked id="" value="belum">
                <label class="form-check-label" for="inlineRadio2"><h5>Belum</h5></label>
              </div>
            </div>
          </div>
          <div class="form-group w-50 flex-row hide" id="client_id">
            <label style="min-width: 6vw;" for=""><h5>Client Id</h5></label>
            <input type="text" name="data_diri[client_id]" data-bind="client_id" id="" class="form-control">
            <p style="min-width: 6vw; margin-top: 10px;" for=""><h6>*Wajib memasukan Client ID jika sudah menjadi member</h6></p>
          </div>
          <br/>
          <div class="form-group">
            <label for=""><h5>Apakah Sudah Memiliki <b style="color: #432a19;">Kartu Tanda Penduduk</b> <b style="color: #f7a91e;">(Diatas 17 Tahun)</b> ?</h5></label> <br>
            <div class="w-50 daftar-radio">
              <div class="form-check form-check-inline">
                <input class="form-check-input ktp" type="radio" name="data_diri[punya_ktp]" checked id="" value="sudah">
                <label class="form-check-label" for="inlineRadio3"><h5>Sudah</h5></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input ktp" type="radio" name="data_diri[punya_ktp]"  id="" value="belum">
                <label class="form-check-label" for="inlineRadio4"><h5>Belum</h5></label>
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

          <label for=""><h5>Pilih <b style="color: red;">SALAH SATU</b> dari dokumen yang akan di upload : </h5></label> <br>


          
          <div class="form-row">
            <div class="col show" id="ktp">
              <img src="<?= base_url('assets/img/ktpkk.png') ?>" height="110" alt="">
              <label for=""><h5>Upload <b style="color: #f7a91e;">E-KTP</b></h5></label>
              <input type="file" class="required" name="ktp" id="">
            </div>
            <div class="col show" id="kk2">
              <img src="<?= base_url('assets/img/ktpkk.png') ?>" height="110" alt="">
              <label for=""><h5>Upload <b style="color: #f7a91e;">KK</b>* (Optional)</h5></label>
              <input type="file" name="kk" id="">
            </div>
            <div class="col hide" id="ktp_ahli">
              <img src="<?= base_url('assets/img/ktpkk.png') ?>" height="110" alt="">
              <label for=""><h5>Upload <b style="color: #f7a91e;">E-KTP AHLI WARIS</h4></b></label>
              <input type="file" name="ktp_ahli" id="">
            </div>
            <div class="col hide" id="kk">
              <img src="<?= base_url('assets/img/ktpkk.png') ?>" height="110" alt="">
              <label for=""><h5>Upload <b style="color: #f7a91e;">KK</b>* </h5></label> <br/>
              <label for=""><h6>*Wajib Upload jika belum memiliki KTP</h6></label>
              <input type="file" name="kk" id="">
            </div>
          </div>

          <br/><br/>
          <div class="form-row">
            <div class="col">
              <label for=""><h5>Alamat Email</h5></label>
              <input type="email" id="email" class="form-control" name="data_diri[email]" data-bind="email">
              <label for=""><h6>*nama@mail.com</h6></label>
            </div>
            <div class="col">
              <label for=""><h5>Ulangi Alamat Email</h5></label>
              <input type="email" id="Cemail" class="form-control" name="Cemail">
            </div>
          </div>
          <div class="form-row pt-2">
            <div class="col">
              <label for=""><h5>Kata Sandi</h5></label>
              <input type="password" id="password" class="form-control" minlength="8" 
              passwordCheck="passwordCheck" name="data_diri[password]">
              <label for=""><h6>*Kata Sandi harus diantara 8-20 karakter, dan mengandung paling sedikit satu angka, huruf kapital. Simbol tidak diperkenankan </h6></label>
            </div>
            <div class="col">
              <label for=""><h5>Ulangi Kata Sandi</h5></label>
              <input type="password" class="form-control" name="Cpassword">
            </div>
          </div>
          <br/>
          <div class="form-group pt-4">
            <h1><b style="color: #432a19;">MOHON DIISI INFORMASI BERIKUT :</b></h1>
            <h6><p>(Seluruh Data Formulir <b style="color: red;">WAJIB</b> diisi dengan lengkap dan benar) </p></h6>
          </div>
          <br/>
          <div class="form row">
            <div class="col">
              <label for=""><h5>Nama Lengkap Sesuai Identitas</h5></label>
              <input type="text" class="form-control" id="colFormLabelSm" name="data_diri[nama]" data-bind="nama" placeholder="">
            </div>
            <div class="col">
              <label for=""><h5>Nomor Identitas (E-KTP/KTP AHLI WARIS/KK)</h5></label>
              <input type="text" class="form-control" id="colFormLabelSm" name="data_diri[nomor_identity]" data-bind="nomor_identity" placeholder="">
            </div>
          </div>
          <br/>
          <div class="form row">
            <div class="col">
              <div class="form-group">
                <label for=""><h5>Tempat/Tanggal/Bulan/Tahun Lahir</h5></label>
                <div class="row">
                  <div class="col-md-3">
                    <input type="text" name="data_diri[tempat]" placeholder="PLACE" class="form-control" data-bind="tempat">
                  </div>
                  <div class="col-md-3">
                    <!-- <input type="text" name="data_diri[tanggal]" placeholder="DD" class="form-control haripicker" data-bind="hari"> -->
                    <select name="data_diri[tanggal]" class="form-control" id="" data-bind="hari">
                      <option value="">DD</option>
                      <?php for($i = 1; $i <= 31; $i++): ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <!-- <input type="text" name="data_diri[bulan]" placeholder="MM" class="form-control bulanpicker" data-bind="bulan"> -->
                    <select name="data_diri[bulan]" data-bind="bulan" class="form-control" id="">
                      <option value="">MM</option>
                      <?php for($i = 1; $i <= 12; $i++): ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="data_diri[tahun]" placeholder="YYYY" class="form-control tahunpicker"
                      data-bind="tahun">
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="row">
                <label for="" class="col-form-label col-md-6"><h5>Jenis Kelamin</h5></label>
                <div class="col-md-6">
                  <select name="data_diri[jenis_kelamin]" id="" data-bind="jenis_kelamin" class="form-control">
                  <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <br/>
          <div class="form-group">
            <label for=""><h5>Alamat Rumah (Sesuai KTP / E-KTP / KK) </h5></label>
            <textarea name="data_diri[alamat]" id="diri_alamat" cols="30" rows="10" class="form-control" data-bind="alamat"></textarea>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <div class="form-group">
                <label for=""><h5>Provinsi</h5></label>
                <select name="data_diri[provinsi]" class="form-control getProvinsi" id="provinsi" data-kabupatenlist='#kabupaten1'
                  data-bind="provinsi">
                  <option value="">Pilih Provinsi</option>
                </select>
              </div>
              <div class="form-group">
                <label for=""><h5>Kecamatan</h5></label>
                <input type="text" name="data_diri[kecamatan]" id="diri_kecamatan" class="form-control" data-bind="kecamatan">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for=""><h5>Kabupaten</h5></label>
                <select name="data_diri[kabupaten]" class="form-control" id="kabupaten1" data-bind="kabupaten">
                <option value="">Pilih Kabupaten</option>

                </select>
              </div>
              <div class="form-group">
                <label for=""><h5>Kelurahan</h5></label>
                <input type="text" name="data_diri[kelurahan]" id="diri_kelurahan" data-bind="kelurahan" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for=""><h5>RT / RW</h5></label>
                <input type="text" name="data_diri[rt]" id="diri_rt" data-bind="rt" class="form-control">
              </div>
              <div class="form-group">
                <label for=""><h5>Kode Pos</h5></label>
                <input type="text" name="data_diri[kodepos]" data-bind="kodepos" id="diri_kodepos" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 row">
              <label class="col-form-label col-md-5" for=""><h5>Nomor Handphone</h5></label>
              <div class="col-md-6">
                <input type="text" data-bind="hp" name="data_diri[hp]">
              </div>
            </div>
            <div class="col-md-6 row">
              <label class="col-form-label col-md-5" for=""><h5>Nomor Rumah</h5></label>
              <div class="col-md-6">
                <input type="text" data-bind="rumah" name="data_diri[rumah]">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label col-md-2" for=""><h5>Pendidikan</h5></label>
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
          <br/>
          <div class="form-group">
            <label style="display: flex; flex-direction: row; width: 100%; justify-content: space-between" for=""><h5>Alamat Rumah (Sesuai KTP / E-KTP / KK)</h5>
              <div class="daftar-radio">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="alamatradio" id="alamat_radio" value="option2">
                  <label class="form-check-label" for="alamat_radio"><h5><b style="color: red;">Sama Dengan Alamat Rumah</b></h5></label>
                </div>
              </div>
            </label>
            <textarea name="data_diri[alamat_rumah]" id="alamat_rumah" data-bind="alamat_rumah" data-update="alamat_lengkap" cols="30" rows="10"
              class="form-control"></textarea>
          </div>
        </section>

        <h3>STEP 2</h3>
        <section style="background-color: #ffffff;">
          <h2><b style="color: #432a19;">DATA</b> <b style="color: #f7a91e;">PEKERJAAN</b></h2>
          <div class="form row">
<<<<<<< HEAD
            <div class="col-md-6 col-xs-12">
=======
            <div class="col-xs-12 col-md-6">
>>>>>>> 9e2555a58568892da57415bf79786782c77f7554
              <label for=""><h5>Pekerjaan</h5></label>
              <select class="form-control" data-bind="jenis_pekerjaan" name="pekerjaan[jenis]" id="pekerjaan">
                <option value="">Pilih Pekerjaan</option>
                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="PNS">PNS</option>
                <option value="Pelajar">Pelajar</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Profesional">Profesional</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
<<<<<<< HEAD
            <div class="col-md-6 col-xs-12">
=======
            <div class="col-xs-12 col-md-6">
>>>>>>> 9e2555a58568892da57415bf79786782c77f7554
              <label for=""><h5 style="color: #ffffff;">Pekerjaan Lainnya</h5></label>
              <input type="text" class="form-control hide" data-bind="jenis_pekerjaan" id="detail_pekerjaan" placeholder="Pekerjaan Lainnya"
                name="pekerjaan[jenis_detail]">
            </div>
          </div>
          <br/>
          <div id="alamat_perusahaan_section">
          <div class="form row">
<<<<<<< HEAD
            <div class="col-md-6 col-xs-12">
=======
            <div class="col-xs-12 col-md-4">
>>>>>>> 9e2555a58568892da57415bf79786782c77f7554
              <label for=""><h5>Nama Perusahaan</h5></label>
              <input type="text" class="form-control" data-bind="nama_perusahaan" name="pekerjaan[perusahaan]" id="">
            </div>
            <br/><br/>
<<<<<<< HEAD
            <div class="col-md-6 col-xs-12">
              <label for=""><h5>Divisi</h5></label>
              <input type="text" class="form-control" data-bind="divisi" name="pekerjaan[divisi]" id="">
            </div>
            <div class="col-md-6 col-xs-12">
=======
            <div class="col-xs-12 col-md-4">
              <label for=""><h5>Divisi</h5></label>
              <input type="text" class="form-control" data-bind="divisi" name="pekerjaan[divisi]" id="">
            </div>
            <div class="col-xs-12 col-md-4">
>>>>>>> 9e2555a58568892da57415bf79786782c77f7554
              <label for=""><h5>Lama Bekerja</h5></label>
              <input type="text" class="form-control" data-bind="lama" name="pekerjaan[lama]" placeholder="12 Tahun / 2012 / Maret"
                id="">
            </div>
          </div>
          <br/>
          <div class="form-group">
            <label for=""><h5>Alamat Perusahaan</h5></label>
            <textarea name="pekerjaan[alamat]" data-bind="alamat_perusahaan" class="form-control" id="" cols="30" rows="10"
              class="form-control"></textarea>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <div class="form-group">
                <label for=""><h5>Provinsi</h5></label>
                <select name="pekerjaan[provinsi]" data-bind="provinsi_perusahaan" class="form-control getProvinsi" id="provinsi2"
                  data-kabupatenlist='#kabupaten2'></select>
              </div>
              <div class="form-group">
                <label for=""><h5>Kecamatan</h5></label>
                <input type="text" name="pekerjaan[kecamatan]" data-bind="kecamatan_perusahaan" id="" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for=""><h5>Kabupaten</h5></label>
                <select name="pekerjaan[kabupaten]" data-bind="kabupaten_perusahaan" class="form-control" id="kabupaten2"></select>
              </div>
              <div class="form-group">
                <label for=""><h5>Kelurahan</h5></label>
                <input type="text" name="pekerjaan[kelurahan]" data-bind="kelurahan_perusahaan" id="" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for=""><h5>RT / RW</h5></label>
                <input type="text" name="pekerjaan[rt]" data-bind="rt_perusahaan" id="" class="form-control">
              </div>
              <div class="form-group">
                <label for=""><h5>Kode Pos</h5></label>
                <input type="text" name="pekerjaan[kodepos]" data-bind="kodepos_perusahaan" id="" class="form-control">
              </div>
            </div>
          </div>
          </div>
          <br/>
          <h2><b style="color: #432a19;">DATA REKENING PEMBAYARAN</b> <b style="color: #f7a91e;">SISA HASIL USAHA (SHU)</b></h2>
          <div class="form-group row">
            <div class="col-md-6">
              <div class="form-group">
                <label for=""><h5>Nama Rekening</h5></label>
                <input type="text" name="shu[nama]" data-bind="nama_rekening" class="form-control">
              </div>
              <div class="form-group">
                <label for=""><h5>Nama Bank</h5></label>
                <input type="text" name="shu[bank]" data-bind="nama_bank" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for=""><h5>No Rekening</h5></label>
                <input type="text" name="shu[norek]" data-bind="nomor_rekening" class="form-control">
              </div>
              <div class="form-group">
                <label for=""><h5>Cabang</h5></label>
                <input type="text" name="shu[cabang]" data-bind="cabang_bank" class="form-control">
              </div>
            </div>
          </div>
          <br/>
          <h2><b style="color: #432a19;">DATA</b> <b style="color: #f7a91e;">AHLI WARIS</b></h2>
          <div class="form-group">
            <label for=""><h5>Nama Ahli Waris</h5></label>
            <input type="text" name="waris[nama]" data-bind="nama_ahli_waris" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for=""><h5>Hubungan Ahli Waris</h5></label>
            <input type="text" name="waris[hubungan]" data-bind="hubungan_ahli_waris" id="" class="form-control">
          </div>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-md-12">
          <h2><b style="color: #432a19;">DATA</b> <b style="color: #f7a91e;">SIMPANAN</b></h2>
          <table style="width: 100%">
            <tr>
              <td style="width: 80%" colspan="2"><h7><b>1. Simpanan Pokok</b></h7></td>
              <td style="width: 20%"><h7>RP. 100.000</h7></td>
            </tr>
            <tr>
              <td><h7><b>2. Simpanan Wajib</b></h7></td>
              <td style="text-align: right">
                <select data-bind="simpanan_wajib" name="simpanan[wajib]" id="select_wajib" >
                  <?php for($i = 1; $i <= 12; $i++): ?>
                  <option value="<?= $i ?>"> <?= $i.' Bulan' ?> </option>
                  <?php endfor; ?>
                </select>
              </td>
              <td id="wajib" data-biaya="15000" data-bind="total_biaya_wajib"><h7>Rp. 15.000</h7></td>
            </tr>
            <tr>
              <td colspan="2"><h7><b>3. Simpanan Sukarela</b></h7></td>
              <td class="row p-3"><h7>RP.</h7> <input id="sukarela" type="text" data-bind="simpanan_sukarela" class="form-control-sm" name="simpanan[sukarela]"></td>
            </tr>
            <tr>
              <td colspan="2"><h7><b>Total Pembayaran</b></h5></td>
              <td data-bind="total_biaya"><h7 id="biaya-total">RP. 115.000 </h7><input type="hidden" name="total_pembayaran" data-bind="biaya_total"></td>
            </tr>
          </table>
          </div></div>
          <br/>
          <div class="daftar-radio">
            <div class="form-check form-check-inline">
              <input class="form-check-input required" type="radio" name="aggreement[ketentuan]" id="inlineRadio2"
                value="option2">
              <label class="form-check-label" for="inlineRadio2"><h5>Bersedia memenuhi semua ketentuan yang tertera dalam Anggaran dasar,
                Anggaran Rumah Tangga dan kebijakan-kebijakan lainnya yang telah ditetapkan 
                di <b style="color: #432a19;">Koperasi Jasa</b> <b style="color: #f7a91e;">Komunitas PanenSaham Indonesia</b>.</h5></label>
            </div>
          </div>
          <div class="daftar-radio">
            <div class="form-check form-check-inline">
              <input class="form-check-input required" type="radio" name="aggreement[anggota]" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2"><h5>Bersedia menerima hak dan melakukan kewajiban sebagai anggota.</h5></label>
            </div>
          </div>
        </section>
        <h3>Hints</h3>
        <section style="background-color: #ffffff;">
          <h2><b style="color: #432a19;">DATA</b> <b style="color: #f7a91e;">PREVIEW</b></h2>
          <br/>
          <table>
            <tr>
              <td style="width: 40%">Client ID</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="client_id"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Nomor Identitas </td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="nomor_identity"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Nama ( sesuai dengan identitas )</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="nama"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Email </td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="email"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Tempat, Tanggal Lahir </td>
              <td style="width: 1%">:</td>
              <td class="d-flex">
                <p data-update="tempat"> - </p>
                <p>,&nbsp;</p>
                <p data-update="hari"> - </p>
                <p>/</p>
                <p data-update="bulan"> - </p>
                <p>/</p>
                <p data-update="tahun"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Jenis Kelamin</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="jenis_kelamin"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Alamat Rumah</td>
              <td style="width: 1%">:</td>
              <td class="d-flex" data-bind="alamt_lengkap">
                <p data-update="alamat"> - </p>
                <p data-update="">&nbsp;</p>
                <p data-update="rt"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="kelurahan"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="kecamatan"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="kabupaten"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="provinsi"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="kodepos"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Nomor Handphone</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="hp"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Nomor Rumah</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="rumah"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Pendidikan</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="pendidikan"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Alamat Rumah</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="alamat_rumah"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Pekerjaan</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="jenis_pekerjaan"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Nama Perusahaan</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="nama_perusahaan"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Divisi</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="divisi"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Lama Bekerja</td>
              <td style="width: 1%">:</td>
              <td>
                <p data-update="lama"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Alamat Perusahaan</td>
              <td style="width: 1%">:</td>
              <td class="d-flex" data-bind="alamat_perusahaan_lengkap">
                <p data-update="alamat_perusahaan"> - </p>
                <p data-update="">&nbsp;</p>
                <p data-update="rt_perusahaan"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="kelurahan_perusahaan"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="kecamatan_perusahaan"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="kabupaten_perusahaan"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="provinsi_perusahaan"> - </p>
                <p data-update="">,&nbsp;</p>
                <p data-update="kodepos_perusahaan"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Simpanan Wajib</td>
              <td style="width: 1%">:</td>
              <td class="d-flex">
                <p data-update="total_biaya_wajib"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Simpanan Sukarela</td>
              <td style="width: 1%">:</td>
              <td class="d-flex">
                <p data-update="simpanan_sukarela"> - </p>
              </td>
            </tr>
            <tr>
              <td style="width: 40%">Total Pembayaran</td>
              <td style="width: 1%">:</td>
              <td class="d-flex">
                <p data-update="total_biaya"> - </p>
              </td>
            </tr>
            </tr>
          </table>
        </section>
      </div>
    </form>
  </div>
</section>

  <label style="margin-left: 20px;text-align: center;><h5><i>Bermasalah dengan Pendaftaran Online ? Daftar melalui Form</i> <b style="color: #f7a91e;">Pendaftaran Offline</b></h5></label>
  <br/>
  <br/>
  <div class="" style="background-color: #efebe8;">
    <section class="padding-tb-6px" style="background-color: #f7a91e;">
      <div class="container">
        <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
      </div>
    </section>
  
    <section class="padding-tb-5px" style="background-color: #432a19;">
      <div class="container">
        <div class="row justify-content-center"></div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="text-left">
              <h2 class="text-extra-large  margin-tb-10px">
                 <b style="color: #ffffff;">PENDAFTARAN</b> <b style="color: #f7a91e;">OFFLINE</b>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>


    <section style="background-color: #efebe8;">
      <div class="col-xs-12 col-lg-12" style="text-align: center;">
        <label for=""><h5>Daftar dengan mengisi Form Pendaftaran 
             <b style="color: #432a19;">Koperasi Jasa</b> <br/> <b style="color: #f7a91e;">Komunitas PanenSaham Indonesia</b> yang dapat di Download di bawah ini:</h5></label><br>
      </div>
      <div style="width: 80%; margin: 0 auto;text-align: center;">
        <a href="#" class="btn btn-xl border-2 border-radius-30 border-orange btn-block margin-top-33px margin-bottom-33px btn-warning text-white"><b>DOWNLOAD FORM PENDAFTARAN</b></a>
      </div>
     <div class="col-xs-12 col-lg-12" style="text-align: center;">
        <label for=""><h5>Kirimkan Formulir Pendaftaran yang telah di isi ke alamat kami: <br/> <br/>
             <b style="color: #432a19;">Koperasi Jasa</b>  <b style="color: #f7a91e;">Komunitas PanenSaham Indonesia</b> <br/> Rukan Gading Bukit Indah Blok A No 27 <br/>
             Kelapa Gading Jakarta Utara 14240
             <br/><br/>
             Tel:  021-45852710</h5></label><br>
      </div>
    </section>


  </div> 


  <section class="padding-tb-5px" style="background-color: #432a19;">
    <div class="container">
      <div class="row justify-content-center"></div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="text-left">
            <h2 class="text-extra-large  margin-tb-10px">
               <b style="color: #432a19;">PENDAFTARAN</b> <b style="color: #432a19;">OFFLINE</b>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-6px" style="background-color: #f7a91e;">
    <div class="container">
      <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
    </div>
  </section>
  
  


  <style>
    .no-border {
      border-color: transparent;
    }

    .no-bg {
      background-color: transparent;
    }
    .section-bg2{
      background-color: #efebe8;
    }
    
      .kontak-heading {
        border-bottom: 4px solid #ddaa37;
        width: max-content;
      }
      .text-primary{
        color: #795839 !important;
      }
  </style>