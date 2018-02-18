<!DOCTYPE html>
<html>
<head>
	<title>Crisis Center KRS Semester Genap 2017/2018</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>
	<style type="text/css">
	select{
			margin-bottom: 5px;
		}
</style>
</head>
<body style="background-color: #35405a;">
	<div class="container" style="background-color: white;">
		<h1 class="text-center" ><b>Pendataan Mata Kuliah Semester Genap 2017/2018 untuk Batal/Tambah Mata Kuliah</b></h1>
		<hr>
		<label>Form ini digunakan untuk pendataan mahasiswa yang sampai saat ini masih belum mendapatakan kelas mata kuliah semester genap yang nantinya akan digunakan untuk acuan pembukaan kelas pada saat batal/tambah mata kuliah. Silahkan isi mata kuliah yang belum didapatkan.</label>
		<hr>
		<?php
		foreach ($user as $u) {
			if ($u->MATA_KULIAH_1 == "") {
				$val1 = $u->MATA_KULIAH_1;
				$label1 = "Mata Kuliah 1";
			} else {
				$val1 = $u->MATA_KULIAH_1;
				$label1 = $u->MATA_KULIAH_1;
			}

			if ($u->MATA_KULIAH_2 == "") {
				$val2 = $u->MATA_KULIAH_2;
				$label2 = "Mata Kuliah 2";
			} else {
				$val2 = $u->MATA_KULIAH_2;
				$label2 = $u->MATA_KULIAH_2;
			}

			if ($u->MATA_KULIAH_3 == "") {
				$val3 = $u->MATA_KULIAH_3;
				$label3 = "Mata Kuliah 3";
			} else {
				$val3 = $u->MATA_KULIAH_3;
				$label3 = $u->MATA_KULIAH_3;
			}

			if ($u->MATA_KULIAH_4 == "") {
				$val4 = $u->MATA_KULIAH_4;
				$label4 = "Mata Kuliah 4";
			} else {
				$val4 = $u->MATA_KULIAH_4;
				$label4 = $u->MATA_KULIAH_4;
			}

			if ($u->MATA_KULIAH_5 == "") {
				$val5 = $u->MATA_KULIAH_5;
				$label5 = "Mata Kuliah 5";
			} else {
				$val5 = $u->MATA_KULIAH_5;
				$label5 = $u->MATA_KULIAH_5;
			}

			if ($u->MATA_KULIAH_6 == "") {
				$val6 = $u->MATA_KULIAH_6;
				$label6 = "Mata Kuliah 6";
			} else {
				$val6 = $u->MATA_KULIAH_6;
				$label6 = $u->MATA_KULIAH_6;
			}

			if ($u->MATA_KULIAH_7 == "") {
				$val7 = $u->MATA_KULIAH_7;
				$label7 = "Mata Kuliah 7";
			} else {
				$val7 = $u->MATA_KULIAH_7;
				$label7 = $u->MATA_KULIAH_7;
			}

			if ($u->MATA_KULIAH_8 == "") {
				$val8 = $u->MATA_KULIAH_8;
				$label8 = "Mata Kuliah 8";
			} else {
				$val8 = $u->MATA_KULIAH_8;
				$label8 = $u->MATA_KULIAH_8;
			}

			
			?>
			<form action="<?php echo base_url(). "matkul_smt_genap/update"; ?>" method="POST">
				<div class="form-group">
					<label>NIM</label>
					<input type="number" class="form-control" placeholder="NIM" name="" value="<?php echo $u->NIM;?>" disabled>
					<input type="hidden" name="nim" value="<?php echo $u->NIM;?>">
				</div>
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" required="" value="<?php echo $u->NAMA_LENGKAP;?>">
				</div>
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="number" class="form-control" placeholder="Jumlah SKS Saat Ini" name="jumlah_sks" required="" value="<?php echo $u->JUMLAH_SKS_SAAT_INI;?>">
				</div>
				<div class="form-group">
					<label>Mata Kuliah 1</label>
					<select class="form-control" name="mata_kuliah_1">
						<option value="<?php echo "$val1"; ?>"><?php echo $label1; ?></option>
						<option value="">Mata Kuliah 1</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 2</label>
					<select class="form-control" name="mata_kuliah_2">
						<option value="<?php echo "$val2"; ?>"><?php echo $label2; ?></option>
						<option value="">Mata Kuliah 2</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 3</label>
					<select class="form-control" name="mata_kuliah_3">
						<option value="<?php echo "$val3"; ?>"><?php echo $label3; ?></option>
						<option value="">Mata Kuliah 3</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 4</label>
					<select class="form-control" name="mata_kuliah_4">
						<option value="<?php echo "$val4"; ?>"><?php echo $label4; ?></option>
						<option value="">Mata Kuliah 4</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 5</label>
					<select class="form-control" name="mata_kuliah_5">
						<option value="<?php echo "$val5"; ?>"><?php echo $label5; ?></option>
						<option value="">Mata Kuliah 5</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 6</label>
					<select class="form-control" name="mata_kuliah_6">
						<option value="<?php echo "$val6"; ?>"><?php echo $label6; ?></option>
						<option value="">Mata Kuliah 6</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 7</label>
					<select class="form-control" name="mata_kuliah_7">
						<option value="<?php echo "$val7"; ?>"><?php echo $label7; ?></option>
						<option value="">Mata Kuliah 7</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Mata Kuliah 8</label>
					<select class="form-control" name="mata_kuliah_8">
						<option value="<?php echo "$val8"; ?>"><?php echo $label8; ?></option>
						<option value="">Mata Kuliah 8</option>
						<?php include "data_matkul_genap.txt" ?>
					</select>
				</div>
				<div class="form-group">
					<label>Keluhan Seputar KRS (boleh dikosongi)</label><br>
					<textarea class="form-control" rows="4" cols="100" name="keluhan"><?php echo $u->KELUHAN; ?></textarea>
				</div>

				<button type="submit" class="btn btn-primary btn-block" name="submit"><b>Update</b></button>
			</form>
			<?php } ?>
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
