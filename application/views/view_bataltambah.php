<!DOCTYPE html>
<html>
<head>
	<title>Data Semua Matkul</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid" style="margin-top: 10px;">
		<a href="#" onclick="history.go(-1)" class="btn btn-success">Go Back</a>
		<a href="<?php echo base_url()."matkul_smt_genap/export_data_per_mahasiswa" ?>" class="btn btn-primary">Export to Excel</a>
	</div>


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