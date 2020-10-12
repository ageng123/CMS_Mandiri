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
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Sudah</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Belum</label>
              </div>
            </div>
          </div>
          <div class="form-group w-50 d-flex flex-row">
              <label style="min-width: 4vw" for="">Client Id</label>
              <input type="text" name="client_id" id="" class="form-control">
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
          <div class="form-group">
            <label for="">Apakah Sudah Memiliki Kartu Tanda Penduduk (diatas 17 tahun)?</label> <br>
            <div class="w-50 daftar-radio">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Sudah</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Belum</label>
              </div>
            </div>
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
            <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label">Nama Lengkap Sesuai Identitas</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="colFormLabelSm" name="nama" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label">Nomor Identitas (E-KTP / KTP AHLI WARIS / KK)</label>
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
              <label  class="col-form-label col-md-5" for="">Nomor Handphone</label>
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
            <label style="display: flex; flex-direction: row; width: 80%; justify-content: space-between" for="">Alamat Rumah
              <div class="daftar-radio">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="alamatradio" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Alamat Sama Dengan Alamat E-KTP / KTP Ahli Waris / KK</label>
                </div>
              </div>
            </label>
            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
        </section>
        <h3>Profile</h3>
        <section>
          <label for="name">First name *</label>
          <input id="name" name="name" type="text" class="required form-control">
          <label for="surname">Last name *</label>
          <input id="surname" name="surname" type="text" class="required form-control">
          <label for="email">Email *</label>
          <input id="email" name="email" type="text" class="required email">
          <label for="address">Address</label>
          <input id="address" name="address" type="text">
          <p>(*) Mandatory</p>
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