<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$nama_matkul.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Matkul</title>
</head>
<body>
<div class="container-fluid">
	<h4><?php echo $nama_matkul ?></h4>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>NIM</td>
			<td>NAMA LENGKAP</td>
		</tr>
		<?php 
		$no = 1;
		foreach($matkul as $m){
			echo "<tr>";
			echo "<td>"; echo $no++; echo"</td>";
			echo "<td>$m->NIM</td>";
			echo "<td>$m->NAMA_LENGKAP</td>";
			echo "</tr>";
		} ?>
	</table>
</div>
	

</body>
</html>