<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Mata Kuliah Semester Genap 2017/2018 untuk Batal/Tambah Mata Kuliah</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		select{
			margin-bottom: 5px;
		}
	</style>
</head>
<body style="background-color: #35405a;">
	<div class="container" style="background-color: white;">
		<h1 class="text-center" ><b>Pendataan Mata Kuliah Semester Genap 2017/2018 untuk Batal/Tambah Mata Kuliah</b>
			<?php
			// if ($stat_angkatan == "biasa") {
			// 	echo $angkatan;
			// } else {
			// 	$angkatan = 2000;
			// 	echo "2011 - 2013";
			// }
			?></h1>
			<hr>
			<label>Form ini digunakan untuk pendataan mahasiswa yang sampai saat ini masih belum mendapatakan kelas mata kuliah semester genap yang nantinya akan digunakan untuk acuan pembukaan kelas pada saat batal/tambah mata kuliah. Silahkan isi mata kuliah yang belum didapatkan.</label>

			<hr>
			<form action="<?php echo base_url(). "matkul_smt_genap/submit"; ?>" method="POST">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" class="form-control" placeholder="Nama Lengkap (wajib diisi)" name="nama_lengkap" required="">
				</div>
				<div class="form-group">
					<label>NIM</label>
					<input type="number" class="form-control" placeholder="NIM (wajib diisi)" name="nim" required="">
				</div>
				<div class="form-group">
					<label>Jumlah SKS Sekarang</label>
					<input type="number" class="form-control" placeholder="Jumlah SKS" name="jumlah_sks" required="">
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
					<label>Mata Kuliah 8</label>
					<select class="form-control" name="mata_kuliah_8">
						<option value="">Mata Kuliah 8</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Keluhan Seputar KRS (boleh dikosongi)</label><br>
					<textarea class="form-control" rows="4" cols="100" name="keluhan"></textarea>
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="submit"><b>Submit</b></button>
			</form>
			<hr>
			<label>NB : Form ini hanya bertujuan untuk mengetahui jumlah kelas yang dibutuhkan. Mahasiswa harus melakukan proses batal tambah sendiri ke akademik. Batal tambah akan diadakan di minggu pertama kuliah yang nantinya akan mengisi di link <a href="#" onclick="window.open('http://filkom.ub.ac.id/info/akademik/bataltambah')">Batal/Tambah</a>.</label>
			<hr>
			<p class="text-center" style="font:14px;"><b>
			&copy; Departemen Advokasi dan Kesejahteraan Mahasiswa<br>
			Eksekutif Mahasiswa Informatika UB 2017<br>
			#AndalanKita<br>
			#SatuPaduInformatika </b></p>
		</div>
	</body>
	</html>
