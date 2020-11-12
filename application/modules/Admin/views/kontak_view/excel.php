<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Data Email.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table border="1">
	<tr>
		<td style="text-align:center;">No</td>
		<td style="text-align:center;">Email</td>
	</tr>
    <?php
        $no = 0;
        foreach($data_email as $row){ 
        $no++; ?>
	<tr>
		<td style="text-align:center;"><?= $no; ?></td>
		<td style="text-align:left;"><?= $row->email; ?></td>
	</tr>

        <?php } ?>
</table>