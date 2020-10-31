<?php header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Form Nasabah.doc");

	$no = 0;
	foreach($data_user as $row){ 
	$no++; ?>
<html> 
    <head>
        <title>
          ::SURAT PERMOHONAN::  
        </title>
        <style>
        body {size:29.7cm 21cm;margin:-1cm -1cm -1cm -1cm;}</style>
    </head>

<body lang=IN style="width:110%;margin-right:-5.0cm;margin-left:-1.0cm;font-family: Calibri;">

<table style="width:110%;font-size: 11px;" cellpadding="5">
 <tr>
  <td style="width: 20%;">
  <p><img width=211 height=56 src="<?= base_url('assets/img/');?>logo.png"></p>
  <p style="font-family: Calibri;">Rukan Gading Bukit Indah Blok
  A 27. Kelapa Gading Barat. Jakarta
  Utara</b></p>
  </td>
  <td style="width: 90%;border-left: 1px black solid;border-right: 1px black solid;border-top: 1px black solid;border-bottom: 1px black solid;font-size: 11px;font-family: Calibri;"><b>
  <ul>
  <li>Seluruh data formulir WAJIB untuk diisi dengan lengkap dan benar</li>
  <li>Calon anggota wajib melampirkan KTP </li>
  <li>Wajib melampirkan KTP dan KK untuk ahli waris. Khusus anggota luar biasa karena belum dewasa, pengalihan akan diberkan kepada orang tua atau wali</li>
  <li>Mohon mendaftarkan autodebit untuk simpanan pokok dan simpanan wajib melalui pilihan bank di: BCA, Bank Mandiri,
  BRI dan BNI (akan diinformasikan lebih lanjut)</li>
  <li>(Bukti transfer dikirim
  ke KJKPI) up. Bagian administrasi dengan menyertakan formulir pendaftaran </li></ul></b>
  </td>
 </tr>
</table>


<table style="width:110%;font-size: 11px;font-family: Calibri;" cellpadding="5"><tr><td style="text-align: center;">
<h3 style="text-align: center;font-family: Calibri;">FORMULIR PENDAFTARAN ANGGOTA</h3></td></tr>
</table>
<p style="font-size: 11px;font-family: Calibri;"><b>Saya yang bertanda tangan di bawah ini mengajukan permohonan untuk menjadi anggota:</b></p>

<table style="width:110%;border-left: 1px black solid;border-right: 1px black solid;border-top: 1px black solid;border-bottom: 1px black solid;font-size: 11px;font-family: Calibri;" cellpadding="5">
 <tr>
  <td style="width: 30%;"><b>Apakah Anda Member Komunitas PanenSaham? </b></td>
  <td><b>  <?php if($row->sudah_member ==1){ echo "Ya";}else{ echo "Tidak"; } ?> </b></td>
 </tr>
 <tr>
  <td style="width: 30%;"><b>Apakah Anda Sudah Memiliki Kartu Tanda Penduduk (di atas 17 tahun)?</b></td>
  <td><b> <?php if(empty($row->ektp)){ echo "Tidak";}else{ echo "Ya"; } ?> </b></td>
 </tr>
 <tr>
  <td style="width: 30%;"><b>Nama Lengkap</b> </td>
  <td><b>: <?= $row->full_name; ?> (sesuai KTP/sesuai KK untuk  Anak di bawah 17 tahun) </b></td>
 </tr>
 <tr>
  <td style="width: 30%;"><b>Jenis Kelamin</b> </td>
  <td><b>: <?= $row->jenis_kelamin; ?> </b></td>
 </tr>
 <tr>
  <td style="width: 30%;"><b>Nomor KTP</b> </td>
  <td><b>: <?= $row->ektp; ?> </b></td>
 </tr>
 <tr>
  <td><b>Tempat & Tanggal Lahir</b> </td>
  <td><b>: <?= $row->tempat_lahir.' , '.date('d/m/Y',strtotime($row->tanggal_lahir)); ?> </b></td>
 </tr>
 <tr>
  <td><b>Alamat (sesuai KTP)</b> </td>
  <td><b>: <?= $row->alamat; ?> </b></td>
 </tr>
 <!--tr>
  <td> </td>
  <td><b>Kelurahan : -</b>	
  			<br><b>Kecamatan :  -</b>	
			<br><b>Kabupaten/kotamadya : -</b>	
			<br><b>Kode Pos :  -</b>	</td>

 </tr-->

 <tr>
  <td><b>Alamat Korespondensi</b> </td>
  <td><b>: <?= $row->email; ?> </b></td>
 </tr>
 <tr>
  <td><b>No telepon</b> </td>
  <td><b>: <?= $row->no_hp; ?> </b></td>
 </tr>
 <tr>
  <td><b>Email</b> </td>
  <td><b>: <?= $row->email; ?> </b></td>
 </tr>
 <!--tr>
  <td><b>Pendidikan Terakhir</b> </td>
  <td><b>:  </b></td>
 </tr>
 <tr>
  <td><b>Nama Ibu Kandung</b> </td>
  <td><b>:  </b></td>
 </tr-->
 <tr>
  <td><b>Nama Ahli Waris</b> </td>
  <td><b>: <?= $row->nama_ahli_waris; ?> </b></td>
 </tr>
 <tr>
  <td><b>Hubungan Ahli Waris</b> </td>
  <td><b>: <?= $row->hubungan_ahli_waris; ?> </b></td>
 </tr>
 <tr>
  <td><b>Referal</b> </td>
  <td><b>:  </b></td>
 </tr>
</table>

<br>
<table style="width:110%;border-left: 1px black solid;border-right: 1px black solid;border-top: 1px black solid;border-bottom: 1px black solid;font-size: 11px;font-family: Calibri;" cellpadding="5">
 <tr>
  <td style="width: 30%;"><b>Nama Perusahaan </b></td>
  <td><b>: <?= $row->nama_perusahaan; ?> </b></td>
 </tr>
 <tr>
  <td style="width: 30%;"><b>Divisi/Bagian/Jabatan </b></td>
  <td><b>: <?= $row->divisi; ?> </b></td>
 </tr>
 <tr>
  <td style="width: 30%;"><b>Lama bekerja </b></td>
  <td><b>: <?= $row->lama_bekerja; ?> </b></td>
 </tr>
</table>


<br>
<table style="width:110%;border-left: 1px black solid;border-right: 1px black solid;border-top: 1px black solid;border-bottom: 1px black solid;font-size: 11px;font-family: Calibri;" cellpadding="5">
<tr>
<td colspan="2"><b>Rekening untuk pembayaran Sisa Hasil Usaha (SHU)</b></td>
</tr>
 <tr>
  <td style="width: 30%;"><b>Nama Rekening </b></td>
  <td><b>: <?= $row->nama_rekening; ?> </b></td>
 </tr>
 <tr>
  <td style="width: 30%;"><b>No. Rekening </b></td>
  <td><b>: <?= $row->nomor_rekening; ?> </b></td>
 </tr>
 <tr>
  <td style="width: 30%;"><b>Bank Penerima </b></td>
  <td><b>: <?= $row->nama_bank; ?> </b></td>
 </tr>
 <tr>
  <td style="width: 30%;"><b>Cabang </b></td>
  <td><b>: <?= $row->cabang; ?> </b></td>
 </tr>
<tr>
<td colspan="2"><b>(Mohon diinformasikan apabila ada perubahan di kemudian hari untuk bank penerima Sisa Hasil Usaha)</b></td>
</tr>
</table>


<table style="width:110%;font-size: 11px;font-family: Calibri;" cellpadding="5"><tr><td style="text-align: justify;"><b>Bersedia memenuhi semua ketentuan yang tertera dalam Anggaran Dasar, Anggaran Rumah Tangga dan kebijakan-kebijakan lainnya yang telah ditetapkan di Koperasi Jasa Komunitas PanenSaham Indonesia. <i>(Pengisian data secara online berarti menyetujui semua aturan dan semua informasi yang diberikan adalah benar sehingga tidak perlu menggunakan tanda tangan)</i></b></td></tr></table>
<br>
<table style="width:110%;border-left: 1px black solid;border: 1px black solid;font-size: 11px;font-family: Calibri;" cellpadding="5">
<tr>
<td colspan="4"><b>Verifikasi oleh pihak Koperasi Jasa Komunitas PanenSaham Indonesia
<br>No Anggota		:
<br>Kartu			:
</b>
</td>
</tr>
 <tr>
  <td style="text-align: center;"><b>Pemohon</b></td>
  <td style="text-align: center;"><b>Tanggal</b></td>
  <td style="text-align: center;"><b>Nama</b></td>
  <td style="text-align: center;"><b>Paraf</b></td>
 </tr>
 <tr>
  <td style="height: 60px;text-align: center;"><b><br><br><br><br><br><br>(<?= $row->full_name; ?>)</b></td>
  <td style="height: 60px;text-align: center;"><b><br><br><br><br><br><br><?= date('Y-m-d') ?></b></td>
  <td style="height: 60px;text-align: center;"><b><br><br><br><br><br><br></b>(.....................)</td>
  <td style="height: 60px;text-align: center;"><b><br><br><br><br><br><br></b></td>
 </tr>
</table>





<p><b><i style='mso-bidi-font-style:normal'><span lang=EN-ID
style='font-size:8.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:EN-ID'><o:p>&nbsp;</o:p></i></b></p>

<b><i style='mso-bidi-font-style:normal'><span
lang=EN-ID style='font-size:8.0pt;font-family:"Times New Roman",serif;
mso-fareast-font-family:"Times New Roman";mso-fareast-theme-font:minor-fareast;
mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;mso-ansi-language:
EN-ID;mso-fareast-language:IN;mso-bidi-language:AR-SA'><br clear=all
style='mso-special-character:line-break;page-break-before:always'>
</i></b>

<p style='mso-margin-top-alt:auto;margin-right:-1.0cm;
margin-left:-1.0cm'><o:p>&nbsp;</o:p></p>


<table style="width:110%;font-size: 11px;" cellpadding="5">
 <tr>
  <td style="width: 20%;">
  <p><img width=211 height=56 src="<?= base_url('assets/img/');?>logo.png"></p>
  <p style="font-family: Calibri;">Rukan Gading Bukit Indah Blok
  A 27. Kelapa Gading Barat. Jakarta
  Utara</b></p>
  </td>
  <td style="width: 90%;"> </td>
 </tr>
</table>

<table style="width:110%;font-size: 11px;font-family: Calibri;" cellpadding="5"><tr><td style="text-align: center;">
<h3 style="text-align: center;font-family: Calibri;">SYARAT, KEWAJIBAN DAN HAK ANGGOTA KOPERASI</h3></td></tr>
</table>


<table style="width:110%;border-left: 1px black solid;border-right: 1px black solid;border-top: 1px black solid;border-bottom: 1px black solid;font-size: 11px;font-family: Calibri;" cellpadding="5">
<tr><td>
  
<b>Syarat untuk menjadi Anggota Koperasi:
<br>a. Warga Negara Indonesia;
<br>b. Mempunyai kemampuan penuh untuk melakukan tindakan hokum (dewasa dan tidak dalam perwakilan dan sebagainya);
<br>c. Bertempat tinggal di seluruh wilayah Republik Indonesia;
<br>d. Telah menyatakan kesanggupan tertulis untuk melunasi simpanan pokok dan simpanan wajib yang besarnya berdasarkan hasil Keputusan Rapat Anggota;
<br>e. Telah menyetujui isi Anggaran Dasar dan ketentuan yang berlaku;
<br>f. Tidak diputuskan bersalah oleh peradilan di Indonesia melakukan perbuatan suatu pidana kejahatan dengan hukuman minimal 5 (lima) tahun atau tindak pidana narkotika dan obat-obat terlarang;
<br>g. Tidak menunggak selama 6 (enam) kali atas kewajiban membayar simpanan wajib;
<br>h. Keanggotaan Koperasi diperoleh jika seluruh persyaratan telah dipenuhi, simpanan pokok telah dilunasi dan bersangkutan didaftar dan telah menandatangani Buku Daftar Anggota Koperasi;
<br>i. Koperasi secara terbuka dapat menerima Anggota lain sebagai Anggota luar biasa;
<br>j. Tata cara penerimaan Anggota sebagaimana dimaksud ayat (4) diatur dalam Anggaran Rumah Tangga;
<br>
<br>Setiap Anggota mempunyai kewajiban: 
<br>a. Mematuhi Anggaran Dasar, Anggaran Rumah Tangga, peraturan --- lainnya dan Keputusan Rapat Anggota; 
<br>b. Menghadiri Rapat Anggota;
<br>c. Berpartisipasi aktif dalam kegiatan usaha Koperasi; 
<br>d. Turut mengawasi pengelolaan organisasi dan usaha Koperasi;
<br>e. Melunasi Simpanan Pokok dan membayar Simpanan Wajib secara - rutin yang besaran dan tata caranya ditetapkan dalam Anggaran --- Rumah Tangga; dan 
<br>f. Mengembangkan dan memelihara prinsip Koperasi sebagaimana.
<br>
<br>Setiap Anggota berhak: 
<br>a. Menghadiri, menyatakan pendapat, dan memberikan suara dalam-- Rapat Anggota; 
<br>b. Mengemukakan pendapat atau saran kepada Pengawas dan Pengurus di luar Rapat Anggota baik diminta atau tidak; 
<br>c. Memilih Pengawas atau Pengurus sesuai persyaratan yang ditetapkan dalam Anggaran Dasar; 
<br>d. Meminta diadakan Rapat Anggota menurut ketentuan dalam Anggaran dasar; 
<br>e. Mendapat pelayanan kegiatan usaha yang telah disediakan oleh Koperasi;
<br>f. Mendapat keterangan mengenai perkembangan Koperasi sesuai dengan ketentuan dalam Anggaran Dasar; dan 
<br>g. Mendapatkan bagian dari sisa hasil usaha Koperasi sebanding dengan jumlah simpanan pokok dan simpanan wajib di Koperasi dan transaksi usaha yang dilakukan oleh masing-masing Anggota dengan Koperasi; 
<br>h. Mendapatkan pengembalian simpanan–simpanan yang menjadi miliknya apabila keluar atau berakhir dari keanggotaan, dan atau sisa hasil penyelesaian Koperasi apabila Koperasi membubarkan diri atau dibubarkan oleh pemerintah.

  </td>
 </tr>
</table>
<br>

<table style="width:110%;font-size: 11px;font-family: Calibri;" cellpadding="5"><tr><td style="text-align: justify;"><b>Bersedia menerima syarat, melakukan kewajiban dan menerima hak sebagai anggota sesuai dengan poin-poin yang telah dijelaskan di atas</b></td></tr></table>

<br>

<p style="font-size: 11px;font-family: Calibri;"><b>Pemohon</b></p>

<br><br><br>

<p style="font-size: 11px;font-family: Calibri;"><b>(<?= $row->full_name; ?>)</b></p>


</body>

</html>
<?php } ?>