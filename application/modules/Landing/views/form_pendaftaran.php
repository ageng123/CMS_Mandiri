<section class="padding-tb-30px">
  <style>

  </style>
  <div class="container">
    <form id="step-form" method="post" enctype="multipart/form-data" action="<?= base_url('landing/pendaftaran_nasabah') ?>">
      <div>
        <h3>Data Diri</h3>
        <section>
          <div class="form-group">
            <label for="">Apakah Sudah Menjadi Member Komunitas PanenSaham ?</label><br>
            <div class="w-50 daftar-radio">
              <div class="form-check form-check-inline">
                <input class="form-check-input member" type="radio" name="data_diri[member]" id="" value="sudah">
                <label class="form-check-label" for="inlineRadio1">Sudah</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input member" type="radio" name="data_diri[member]" checked id="" value="belum">
                <label class="form-check-label" for="inlineRadio2">Belum</label>
              </div>
            </div>
          </div>
          <div class="form-group w-50 d-flex flex-row hide" id="client_id">
            <label style="min-width: 6vw" for="">Client Id</label>
            <input type="text" name="data_diri[client_id]" data-bind="client_id" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Apakah Sudah Memiliki Kartu Tanda Penduduk (diatas 17 tahun)?</label> <br>
            <div class="w-50 daftar-radio">
              <div class="form-check form-check-inline">
                <input class="form-check-input ktp" type="radio" name="data_diri[punya_ktp]" checked id="" value="sudah">
                <label class="form-check-label" for="inlineRadio3">Sudah</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input ktp" type="radio" name="data_diri[punya_ktp]"  id="" value="belum">
                <label class="form-check-label" for="inlineRadio4">Belum</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <table>
              <tr>
                <td id="ktp" class="hide">
                  <label for="">Upload E-KTP</label>
                  <input type="file" name="ktp" id=""></td>
                <td id="ktp_ahli" class="hide">
                  <label for="">Upload KTP Ahli Waris</label>
                  <input type="file" name="ktp_ahli" id=""></td>
                <td id="kk" class="hide">
                  <label for="">Upload KK</label>
                  <input type="file" name="kk" id=""></td>
              </tr>
            </table>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="">Alamat Email</label>
              <input type="email" id="email" class="form-control" name="data_diri[email]" data-bind="email">
            </div>
            <div class="col">
              <label for="">Ulangi Alamat Email</label>
              <input type="email" id="Cemail" class="form-control" name="Cemail">
            </div>
          </div>
          <div class="form-row pt-2">
            <div class="col">
              <label for="">Kata Sandi</label>
              <input type="password" id="password" class="form-control" name="data_diri[password]">
            </div>
            <div class="col">
              <label for="">Ulangi Kata Sandi</label>
              <input type="password" class="form-control" name="Cpassword">
            </div>
          </div>
          <div class="form-group pt-4">
            <h3>MOHON DIISI INFORMASI BERIKUT :</h3>
            <p>(Seluru Data Formulir <b class="red">Wajib</b> diisi dengan lengkap dan benar) </p>
          </div>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label">Nama Lengkap Sesuai
              Identitas</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="colFormLabelSm" name="data_diri[nama]" data-bind="nama" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label">Nomor Identitas (E-KTP / KTP AHLI
              WARIS / KK)</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="colFormLabelSm" name="data_diri[nomor_identity]"
                data-bind="nomor_identity" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-7">
              <div class="form-group">
                <label for="">Tempat/Tanggal/Bulan/Tahun Lahir</label>
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="data_diri[tempat]" placeholder="Tempat" class="form-control" data-bind="tempat">
                  </div>
                  <div class="col-md-2">
                    <input type="text" name="data_diri[tanggal]" placeholder="DD" class="form-control haripicker" data-bind="hari">
                  </div>
                  <div class="col-md-2">
                    <input type="text" name="data_diri[bulan]" placeholder="MM" class="form-control bulanpicker" data-bind="bulan">
                  </div>
                  <div class="col-md-2">
                    <input type="text" name="data_diri[tahun]" placeholder="YYYY" class="form-control tahunpicker"
                      data-bind="tahun">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="row">
                <label for="" class="col-form-label col-md-5">Jenis Kelamin</label>
                <div class="col-md-6">
                  <select name="data_diri[jenis_kelamin]" id="" data-bind="jenis_kelamin" class="form-control">
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Alamat Rumah</label>
            <textarea name="data_diri[alamat]" id="diri_alamat" cols="30" rows="10" class="form-control" data-bind="alamat"></textarea>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Provinsi</label>
                <select name="data_diri[provinsi]" class="form-control getProvinsi" id="provinsi" data-kabupatenlist='#kabupaten1'
                  data-bind="provinsi"></select>
              </div>
              <div class="form-group">
                <label for="">Kecamatan</label>
                <input type="text" name="data_diri[kecamatan]" id="diri_kecamatan" class="form-control" data-bind="kecamatan">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Kabupaten</label>
                <select name="data_diri[kabupaten]" class="form-control" id="kabupaten1" data-bind="kabupaten"></select>
              </div>
              <div class="form-group">
                <label for="">Kelurahan</label>
                <input type="text" name="data_diri[kelurahan]" id="diri_kelurahan" data-bind="kelurahan" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">RT / RW</label>
                <input type="text" name="data_diri[rt]" id="diri_rt" data-bind="rt" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Kode Pos</label>
                <input type="text" name="data_diri[kodepos]" data-bind="kodepos" id="diri_kodepos" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 row">
              <label class="col-form-label col-md-5" for="">Nomor Handphone</label>
              <div class="col-md-6">
                <input type="text" data-bind="hp" name="data_diri[hp]">
              </div>
            </div>
            <div class="col-md-6 row">
              <label class="col-form-label col-md-5" for="">Nomor Rumah</label>
              <div class="col-md-6">
                <input type="text" data-bind="rumah" name="data_diri[rumah]">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label col-md-2" for="">Pendidikan</label>
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
          <div class="form-group">
            <label style="display: flex; flex-direction: row; width: 80%; justify-content: space-between" for="">Alamat
              Rumah
              <div class="daftar-radio">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="alamatradio" id="alamat_radio" value="option2">
                  <label class="form-check-label" for="alamat_radio">Alamat Sama Dengan Alamat E-KTP / KTP Ahli Waris /
                    KK</label>
                </div>
              </div>
            </label>
            <textarea name="data_diri[alamat_rumah]" id="alamat_rumah" data-bind="alamat_rumah" data-update="alamat_lengkap" cols="30" rows="10"
              class="form-control"></textarea>
          </div>
        </section>
        <h3>STEP 2</h3>
        <section>
          <h2>Data Pekerjaan</h2>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="">Pekerjaan</label>
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
            <div class="col-md-6">
              <label for=""></label><br>
              <input type="text" class="form-control hide" data-bind="jenis_pekerjaan" id="detail_pekerjaan" placeholder="Isikan nama pekerjaan..."
                name="pekerjaan[jenis]">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <label for="">Nama Perusahaan</label>
              <input type="text" class="form-control" data-bind="nama_perusahaan" name="pekerjaan[perusahaan]" id="">
            </div>
            <div class="col-md-6">
              <label for="">Divisi</label>
              <input type="text" class="form-control" data-bind="divisi" name="pekerjaan[divisi]" id="">
            </div>
            <div class="col-md-6">
              <label for="">Lama Bekerja</label>
              <input type="text" class="form-control" data-bind="lama" name="pekerjaan[lama]" placeholder="ex. : 2 tahun / 6 bulan"
                id="">
            </div>
          </div>
          <div class="form-group">
            <label for="">Alamat Perusahaan</label>
            <textarea name="pekerjaan[alamat]" data-bind="alamat_perusahaan" class="form-control" id="" cols="30" rows="10"
              class="form-control"></textarea>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Provinsi</label>
                <select name="pekerjaan[provinsi]" data-bind="provinsi_perusahaan" class="form-control getProvinsi" id="provinsi2"
                  data-kabupatenlist='#kabupaten2'></select>
              </div>
              <div class="form-group">
                <label for="">Kecamatan</label>
                <input type="text" name="pekerjaan[kecamatan]" data-bind="kecamatan_perusahaan" id="" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Kabupaten</label>
                <select name="pekerjaan[kabupaten]" data-bind="kabupaten_perusahaan" class="form-control" id="kabupaten2"></select>
              </div>
              <div class="form-group">
                <label for="">Kelurahan</label>
                <input type="text" name="pekerjaan[kelurahan]" data-bind="kelurahan_perusahaan" id="" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">RT / RW</label>
                <input type="text" name="pekerjaan[rt]" data-bind="rt_perusahaan" id="" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Kode Pos</label>
                <input type="text" name="pekerjaan[kodepos]" data-bind="kodepos_perusahaan" id="" class="form-control">
              </div>
            </div>
          </div>
          <h2>Data Rekening Pembayaran <br> Sisa Hasil Usaha (SHU)</h2>
          <div class="form-group row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Nama Rekening</label>
                <input type="text" name="shu[nama]" data-bind="nama_rekening" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Nama Bank</label>
                <input type="text" name="shu[bank]" data-bind="nama_bank" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">No Rekening</label>
                <input type="text" name="shu[norek]" data-bind="nomor_rekening" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Cabang</label>
                <input type="text" name="shu[cabang]" data-bind="cabang_bank" class="form-control">
              </div>
            </div>
          </div>
          <h2>Data Ahli Waris</h2>
          <div class="form-group">
            <label for="">Nama Ahli Waris</label>
            <input type="text" name="waris[nama]" data-bind="nama_ahli_waris" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Hubungan Ahli Waris</label>
            <input type="text" name="waris[hubungan]" data-bind="hubungan_ahli_waris" id="" class="form-control">
          </div>
          <h2>Data Simpanan</h2>
          <table style="width: 100%">
            <tr>
              <td style="width: 70%" colspan="2"><b>1. Simpanan Pokok</b></td>
              <td>RP. 100.000</td>
            </tr>
            <tr>
              <td><b>2. Simpanan Wajib</b></td>
              <td style="float: right">
                <select data-bind="simpanan_wajib" name="simpanan[wajib]" id="select_wajib" class="form-control-sm">
                  <?php for($i = 1; $i <= 12; $i++): ?>
                  <option value="<?= $i ?>"> <?= $i.' Bulan' ?> </option>
                  <?php endfor; ?>
                </select>
              </td>
              <td id="wajib" data-biaya="15000" data-bind="total_biaya_wajib">Rp. 15.000</td>
            </tr>
            <tr>
              <td colspan="2"><b>3. Simpanan Sukarela</b></td>
              <td class="row p-3">RP. <input id="sukarela" type="text" data-bind="simpanan_sukarela" class="form-control-sm" name="simpanan[sukarela]"></td>
            </tr>
            <tr>
              <td colspan="2"><b>Total Pembayaran</b></td>
              <td id="biaya-total" data-bind="total_biaya">RP. 115.000 </td>
            </tr>
          </table>
          <div class="daftar-radio">
            <div class="form-check form-check-inline">
              <input class="form-check-input required" type="radio" name="aggreement[ketentuan]" id="inlineRadio2"
                value="option2">
              <label class="form-check-label" for="inlineRadio2">Alamat Sama Dengan Alamat E-KTP / KTP Ahli Waris /
                KK</label>
            </div>
          </div>
          <div class="daftar-radio">
            <div class="form-check form-check-inline">
              <input class="form-check-input required" type="radio" name="aggreement[anggota]" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Alamat Sama Dengan Alamat E-KTP / KTP Ahli Waris /
                KK</label>
            </div>
          </div>
        </section>
        <h3>Hints</h3>
        <section>
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