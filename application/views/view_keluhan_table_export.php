<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=export_keluhan.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Matkul</title>
	<!-- Latest compiled and minified CSS -->
</head>
<body>
<div class="container-fluid">
	<h2>Keluhan Seputar KRS</h2>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>TIMESTAMP</td>
			<td>NIM</td>
			<td>NAMA LENGKAP</td>
			<td>KELUHAN</td>
		</tr>
		<?php 
		$no = 1;
		foreach($keluhan as $m){
			echo "<tr>";
			echo "<td>"; echo $no++; echo"</td>";
			echo "<td>$m->TIMESTAMP</td>";
			echo "<td>$m->NIM</td>";
			echo "<td>$m->NAMA_LENGKAP</td>";
			echo "<td>$m->KELUHAN</td>";
			echo "</tr>";
		} ?>
	</table>
</div>
	

</body>
</html>