<!DOCTYPE html>
<html>
<head>
	<title>Data Matkul</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
	<h2><?php echo $nama_matkul; ?></h2>
	<a href="#" onclick="history.go(-1)" class="btn btn-success">Go Back</a>
	<a href="<?php echo base_url()."matkul_smt_genap/export/$nama_matkul" ?>" class="btn btn-primary">Export to Excel</a>
	<table class="table table-striped">
		<tr>
			<td>NO</td>
			<td>TIMESTAMP</td>
			<td>NIM</td>
			<td>NAMA LENGKAP</td>
		</tr>
		<?php 
		$no = 1;
		foreach($matkul as $m){
			echo "<tr>";
			echo "<td>"; echo $no++; echo"</td>";
			echo "<td>$m->TIMESTAMP</td>";
			echo "<td>$m->NIM</td>";
			echo "<td>$m->NAMA_LENGKAP</td>";
			echo "</tr>";
		} ?>
	</table>
</div>
</body>
</html>