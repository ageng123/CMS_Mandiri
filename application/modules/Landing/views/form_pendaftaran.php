<section class="padding-tb-30px">
  <style>

  </style>
  <div class="container">
    <form id="step-form" action="#">
      <div>
        <h3>Data Diri</h3>
        <section>
          <div class="form-group">
            <label for="">Apakah Sudah Menjadi Member Komunitas PanenSaham ?</label><br>
            <div class="w-50 daftar-radio">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">Sudah</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">Belum</label>
              </div>
            </div>
          </div>
          <div class="form-group w-50 d-flex flex-row">
            <label style="min-width: 4vw" for="">Client Id</label>
            <input type="text" name="client_id" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Apakah Sudah Memiliki Kartu Tanda Penduduk (diatas 17 tahun)?</label> <br>
            <div class="w-50 daftar-radio">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">Sudah</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">Belum</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <table>
              <tr>
                <td>
                  <label for="">Upload E-KTP</label>
                  <input type="file" name="" id=""></td>
                <td>
                  <label for="">Upload KTP Ahli Waris</label>
                  <input type="file" name="" id=""></td>
                <td>
                  <label for="">Upload KK</label>
                  <input type="file" name="" id=""></td>
              </tr>
            </table>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="">Alamat Email</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="col">
              <label for="">Ulangi Alamat Email</label>
              <input type="text" class="form-control" name="Cemail">
            </div>
          </div>
          <div class="form-row pt-2">
            <div class="col">
              <label for="">Kata Sandi</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="col">
              <label for="">Ulangi Kata Sandi</label>
              <input type="text" class="form-control" name="Cemail">
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
              <input type="text" class="form-control" id="colFormLabelSm" name="nama" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label">Nomor Identitas (E-KTP / KTP AHLI
              WARIS / KK)</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="colFormLabelSm" name="nomor_identity" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-7">
              <div class="form-group">
                <label for="">Tempat/Tanggal/Bulan/Tahun Lahir</label>
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="tempat" placeholder="Tempat" class="form-control">
                  </div>
                  <div class="col-md-2">
                    <input type="text" name="hari" placeholder="DD" class="form-control">
                  </div>
                  <div class="col-md-2">
                    <input type="text" name="bulan" placeholder="MM" class="form-control">
                  </div>
                  <div class="col-md-2">
                    <input type="text" name="tahun" placeholder="YYYY" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="row">
                <label for="" class="col-form-label col-md-5">Jenis Kelamin</label>
                <div class="col-md-6">
                  <select name="jenis_kelamin" id="" class="form-control">
                    <option value="l">Laki-Laki</option>
                    <option value="p">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Alamat Rumah</label>
            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Provinsi</label>
                <select name="provinsi" class="form-control" id=""></select>
              </div>
              <div class="form-group">
                <label for="">Kecamatan</label>
                <input type="text" name="kecamatan" id="" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Kabupaten</label>
                <select name="kabupaten" class="form-control" id=""></select>
              </div>
              <div class="form-group">
                <label for="">Kelurahan</label>
                <input type="text" name="kelurahan" id="" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">RT / RW</label>
                <input type="text" name="rt" id="" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Kode Pos</label>
                <input type="text" name="kodepos" id="" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 row">
              <label class="col-form-label col-md-5" for="">Nomor Handphone</label>
              <div class="col-md-6">
                <input type="text" name="hp">
              </div>
            </div>
            <div class="col-md-6 row">
              <label class="col-form-label col-md-5" for="">Nomor Rumah</label>
              <div class="col-md-6">
                <input type="text" name="rumah">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label col-md-2" for="">Pendidikan</label>
            <div class="col-md-4">
              <select name="pendidikan" class="form-control" id=""></select>
            </div>
          </div>
          <div class="form-group">
            <label style="display: flex; flex-direction: row; width: 80%; justify-content: space-between" for="">Alamat
              Rumah
              <div class="daftar-radio">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="alamatradio" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Alamat Sama Dengan Alamat E-KTP / KTP Ahli Waris /
                    KK</label>
                </div>
              </div>
            </label>
            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
        </section>
        <h3>STEP 2</h3>
        <section>
          <h2>Data Pekerjaan</h2>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="">Pekerjaan</label>
              <select class="form-control" name="pekerjaan[jenis]" id="">
                <option value="">Programmer</option>
                <option value="">IRT</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="">Nama Perusahaan</label>
              <input type="text" class="form-control" name="pekerjaan[perusahaan]" id="">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="">Divisi</label>
              <input type="text" class="form-control" name="pekerjaan[divisi]" id="">
            </div>
            <div class="col-md-6">
              <label for="">Lama Bekerja</label>
              <input type="text" class="form-control" name="pekerjaan[lama]" placeholder="ex. : 2 tahun / 6 bulan"
                id="">
            </div>
          </div>
          <div class="form-group">
            <label for="">Alamat Perusahaan</label>
            <textarea name="pekerjaan[alamat]" class="form-control" id="" cols="30" rows="10"
              class="form-control"></textarea>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Provinsi</label>
                <select name="pekerjaan[provinsi]" class="form-control" id=""></select>
              </div>
              <div class="form-group">
                <label for="">Kecamatan</label>
                <input type="text" name="pekerjaan[kecamatan]" id="" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Kabupaten</label>
                <select name="pekerjaan[kabupaten]" class="form-control" id=""></select>
              </div>
              <div class="form-group">
                <label for="">Kelurahan</label>
                <input type="text" name="pekerjaan[kelurahan]" id="" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">RT / RW</label>
                <input type="text" name="pekerjaan[rt]" id="" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Kode Pos</label>
                <input type="text" name="pekerjaan[kodepos]" id="" class="form-control">
              </div>
            </div>
          </div>
          <h2>Data Rekening Pembayaran <br> Sisa Hasil Usaha (SHU)</h2>
          <div class="form-group row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Nama Rekening</label>
                <input type="text" name="shu[nama]" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Nama Bank</label>
                <input type="text" name="shu[bank]" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">No Rekening</label>
                <input type="text" name="shu[norek]" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Cabang</label>
                <input type="text" name="shu[cabang]" class="form-control">
              </div>
            </div>
          </div>
          <h2>Data Ahli Waris</h2>
          <div class="form-group">
            <label for="">Nama Ahli Waris</label>
            <input type="text" name="waris[nama]" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Hubungan Ahli Waris</label>
            <input type="text" name="waris[hubungan]" id="" class="form-control">
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
                <select name="wajib" id="select_wajib" class="form-control-sm">
                  <?php for($i = 1; $i <= 12; $i++): ?>
                  <option value="<?= $i ?>"> <?= $i.' Bulan' ?> </option>
                  <?php endfor; ?>
                </select>
              </td>
              <td id="wajib" data-biaya="15000">Rp. 15.000</td>
            </tr>
            <tr>
              <td colspan="2"><b>3. Simpanan Sukarela</b></td>
              <td class="row p-3">RP. <input id="sukarela" type="text" class="form-control-sm" name="sukarela"></td>
            </tr>
            <tr>
              <td colspan="2"><b>Total Pembayaran</b></td>
              <td id="biaya-total">RP. 115.000</td>
            </tr>
          </table>
          <div class="daftar-radio">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="aggreement[ketentuan]" id="inlineRadio2"
                value="option2">
              <label class="form-check-label" for="inlineRadio2">Alamat Sama Dengan Alamat E-KTP / KTP Ahli Waris /
                KK</label>
            </div>
          </div>
          <div class="daftar-radio">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="aggreement[anggota]" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Alamat Sama Dengan Alamat E-KTP / KTP Ahli Waris /
                KK</label>
            </div>
          </div>
        </section>
        <h3>Hints</h3>
        <section>
          <ul>
            <li>Foo</li>
            <li>Bar</li>
            <li>Foobar</li>
          </ul>
        </section>
        <h3>Finish</h3>
        <section>
          <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree
            with the Terms and Conditions.</label>
        </section>
      </div>
    </form>
  </div>
</section>