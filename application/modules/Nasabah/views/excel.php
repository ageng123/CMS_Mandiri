<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Data Nasabah.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table border="1">
	<tr>
		<td style="text-align:center;">No</td>
		<td style="text-align:center;">Sudah member</td>
		<td style="text-align:center;">Full name</td>
		<td style="text-align:center;">Email</td>
		<td style="text-align:center;">Jenis kelamin</td>
		<td style="text-align:center;">Tempat lahir</td>
		<td style="text-align:center;">Tanggal lahir</td>
		<td style="text-align:center;">No HP</td>
		<td style="text-align:center;">Alamat</td>
	</tr>
    <?php
        $no = 0;
        foreach($data_user as $row){ 
        $no++; ?>
	<tr>
		<td style="text-align:center;"><?= $no; ?></td>
		<td style="text-align:center;"><?= $row->sudah_member == 1 ? 'Sudah' : 'Belum'; ?></td>
		<td style="text-align:left;"><?= $row->full_name; ?></td>
		<td style="text-align:left;"><?= $row->email; ?></td>
		<td style="text-align:center;"><?= $row->jenis_kelamin; ?></td>
		<td style="text-align:center;"><?= $row->tempat_lahir; ?></td>
		<td style="text-align:center;"><?= date('d/m/Y',strtotime($row->tanggal_lahir)); ?></td>
		<td style="text-align:center;"><?= "'".$row->no_hp; ?></td>
		<td style="text-align:left;"><?= $row->alamat; ?></td>
	</tr>

        <?php } ?>
</table>