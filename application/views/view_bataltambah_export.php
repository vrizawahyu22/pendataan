<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=update_batal_tambah.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Batal Tambah</title>
</head>
<body>
	<?php 
	$no = 1;
	foreach ($data_mhs as $d) {
		$no_ = 1;
		echo "<div class=\"container-fluid\">";
		echo "<h4>";echo $no++;echo ". $d->NIM - $d->NAMA_LENGKAP (Jumlah SKS Saat ini : $d->JUMLAH_SKS_SAAT_INI)</h4>";
		echo "<table border=\"1\" class=\"text-center\">";
		echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style =\"width:400px;\">MATA KULIAH </td></tr>";

		if(!empty($d->MATA_KULIAH_1)){
			echo "<tr>";
			echo "<td>";echo $no_++ ;echo "</td>";
			echo "<td>$d->TIMESTAMP</td>";
			echo "<td>$d->MATA_KULIAH_1</td>";
			echo "</tr>";
		}

		if(!empty($d->MATA_KULIAH_2)){
			echo "<tr>";
			echo "<td>";echo $no_++ ;echo "</td>";
			echo "<td>$d->TIMESTAMP</td>";
			echo "<td>$d->MATA_KULIAH_2</td>";
			echo "</tr>";
		}

		if(!empty($d->MATA_KULIAH_3)){
			echo "<tr>";
			echo "<td>";echo $no_++ ;echo "</td>";
			echo "<td>$d->TIMESTAMP</td>";
			echo "<td>$d->MATA_KULIAH_3</td>";
			echo "</tr>";
		}

		if(!empty($d->MATA_KULIAH_4)){
			echo "<tr>";
			echo "<td>";echo $no_++ ;echo "</td>";
			echo "<td>$d->TIMESTAMP</td>";
			echo "<td>$d->MATA_KULIAH_4</td>";
			echo "</tr>";
		}

		if(!empty($d->MATA_KULIAH_5)){
			echo "<tr>";
			echo "<td>";echo $no_++ ;echo "</td>";
			echo "<td>$d->TIMESTAMP</td>";
			echo "<td>$d->MATA_KULIAH_5</td>";
			echo "</tr>";
		}

		if(!empty($d->MATA_KULIAH_6)){
			echo "<tr>";
			echo "<td>";echo $no_++ ;echo "</td>";
			echo "<td>$d->TIMESTAMP</td>";
			echo "<td>$d->MATA_KULIAH_6</td>";
			echo "</tr>";
		}

		if(!empty($d->MATA_KULIAH_7)){
			echo "<tr>";
			echo "<td>";echo $no_++ ;echo "</td>";
			echo "<td>$d->TIMESTAMP</td>";
			echo "<td>$d->MATA_KULIAH_7</td>";
			echo "</tr>";
		}

		if(!empty($d->MATA_KULIAH_8)){
			echo "<tr>";
			echo "<td>";echo $no_++ ;echo "</td>";
			echo "<td>$d->TIMESTAMP</td>";
			echo "<td>$d->MATA_KULIAH_8</td>";
			echo "</tr>";
		}
		echo "</table>"; echo "</div>";
	}
	?>
</body>
</html>