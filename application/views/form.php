

<!DOCTYPE html>
<html>
<head>
	<title>Crisis Center KRS Semester Genap 2017/2018</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		.tengahin{
			margin: 20px 300px 20px 300px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<h1 class="text-center">Crisis Center KRS Semester Genap TA 2017/2018
			<?php
			// if ($stat_angkatan == "biasa") {
			// 	echo $angkatan;
			// } else {
			// 	$angkatan = 2000;
			// 	echo "2011 - 2013";
			// }
			?></h1>
			<form class="tengahin" action="<?php echo base_url(). "matkul_smt_genap/submit"; ?>" method="POST">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" class="form-control" placeholder="Nama Lengkap (wajib diisi)" name="nama_lengkap" required="">
				</div>
				<div class="form-group">
					<label>NIM</label>
					<input type="number" class="form-control" placeholder="NIM (wajib diisi)" name="nim" required="">
				</div>
				<div class="form-group">
					<label>Mata Kuliah 1</label>
					<select class="form-control" name="mata_kuliah_1">
						<option value="">Mata Kuliah 1</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 2</label>
					<select class="form-control" name="mata_kuliah_2">
						<option value="">Mata Kuliah 2</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 3</label>
					<select class="form-control" name="mata_kuliah_3">
						<option value="">Mata Kuliah 3</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 4</label>
					<select class="form-control" name="mata_kuliah_4">
						<option value="">Mata Kuliah 4</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 5</label>
					<select class="form-control" name="mata_kuliah_5">
						<option value="">Mata Kuliah 5</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 6</label>
					<select class="form-control" name="mata_kuliah_6">
						<option value="">Mata Kuliah 6</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 7</label>
					<select class="form-control" name="mata_kuliah_7">
						<option value="">Mata Kuliah 7</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Keluhan Seputar KRS (boleh dikosongi)</label><br>
					<textarea class="form-control" rows="4" cols="100" name="keluhan"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>
		<p class="text-center" style="font:14px;">
		&copy; Departemen Advokasi dan Kesejahteraan Mahasiswa<br>
		Eksekutif Mahasiswa Informatika UB 2017<br>
		#AndalanKita<br>
		#SatuPaduInformatika</p>

	</body>
	</html>
