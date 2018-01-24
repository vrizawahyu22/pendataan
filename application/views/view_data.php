<?php
	if (isset($_POST['submit'])) {
		$mata_kuliah = $_POST['mata_kuliah'];
		redirect(base_url()."matkul_smt_genap/view_matkul/$mata_kuliah");
	}

	if (isset($_POST['submit_all'])) {
		redirect(base_url()."matkul_smt_genap/view_all");
	}

	if (isset($_POST['submit_keluhan'])) {
		redirect(base_url()."matkul_smt_genap/view_keluhan");
	}

	if (isset($_POST['submit_2011_2013'])) {
		redirect(base_url()."matkul_smt_genap/view_all_2011_2013");
	}

	if (isset($_POST['submit_2014'])) {
		redirect(base_url()."matkul_smt_genap/view_all_2014");
	}

	if (isset($_POST['submit_2015'])) {
		redirect(base_url()."matkul_smt_genap/view_all_2015");
	}

	if (isset($_POST['submit_2016'])) {
		redirect(base_url()."matkul_smt_genap/view_all_2016");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Data Crisis Center KRS</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		.tengahin{
			margin: 20px 300px 0px 300px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<h1 class="text-center">DATA CC KRS INFORMATIKA TA 2016/2017</h1>
		<form class="tengahin" action="" method="POST">
			<div class="form-group">
				<label>Mata Kuliah</label>
				<select class="form-control" name="mata_kuliah">
					<option value="Mata Kuliah 1">Mata Kuliah 1</option>
					<?php include "data_matkul_genap.txt" ?>
				</select>
			</div>
			<center><button type="submit" class="btn btn-primary" name="submit">View Data</button>
			<h2>Atau</h2>
			<button type="submit" class="btn btn-danger text-center" name="submit_keluhan">View Data Keluhan</button>
			<button type="submit" class="btn btn-success text-center" name="submit_all">View ALL Data</button>
			<h2>Angkatan</h2>
			<button type="submit" class="btn btn-danger text-center" name="submit_2011_2013">2011-2013</button>
			<button type="submit" class="btn btn-warning text-center" name="submit_2014">2014</button>
			<button type="submit" class="btn btn-success text-center" name="submit_2015">2015</button>
			<button type="submit" class="btn btn-primary text-center" name="submit_2016">2016</button>
			</center>
		</form>
	</div>
</body>
</html>