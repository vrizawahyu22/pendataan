<?php
$nama_matkul = array(
	" ",
	"MPK-4001 - Pendidikan Agama Islam",
	"MPK-4002 - Pendidikan Agama Katolik",
	"MPK-4003 - Pendidikan Agama Protestan",
	"MPK-4004 - Pendidikan Agama Hindu",
	"MPK-4005 - Pendidikan Agama Budha ",
	"MPK-4008 - Bahasa Indonesia",
	"COM60010 - Pemrograman Dasar",
	"COM60013 - Pengantar Ilmu Komputer",
	"COM50012 - Matematika Komputasi",
	"CIF60113 - Sistem Digital",
	"UBU-4008 - Bahasa Inggris",
	"COM60011 - Arsitektur & Organisasi Komputer",
	"CID62120 - Pemrograman Lanjut",
	"CID62122 - Interaksi Manusia & Komputer",
	"CID62121 - Matematika Komputasi Lanjut",
	"CID62125 - Statistika",
	"MPK-4007 - Pendidikan Pancasila",
	"CIF61230 - Algoritma & Struktur Data",
	"CID61132 - Metode Numerik",
	"CID61133 - Sistem Operasi",
	"CID61134 - Sistem Multimedia",
	"CID61236 - Sistem Basis Data",
	"CIF62240 - Desain & Analisis Algoritma",
	"CIF62242 - Kecerdasan Buatan",
	"CIF62245 - Analisis & Perancangan Sistem",
	"CIF62246 - Pemrograman Web",
	"CCE61153 - Jaringan Komputer",
	"CIF61251 - Keamanan Informasi",
	"CIF61252 - Pengenalan Pola",
	"CIF61255 - Rekayasa Perangkat Lunak",
	"CIF61256 - Pemrograman Platform Khusus",
	"CIF61551 - Rekayasa & Manajemen Kebutuhan",
	"CIF61552 - Rekayasa Pengetahuan",
	"CIF61450 - Pengolahan Citra Digital",
	"CIF61451 - Text Mining",
	"CIF61453 - Sistem Pakar",
	"CIF61454 - Logika Fuzzy",
	"CIF61455 - Sistem Pendukung Keputusan",
	"CCE62361 - Administrasi Sistem Server",
	"CCE62161 - Administrasi Jaringan",
	"CIF61351 - Keamanan Jaringan",
	"CIF61651 - Perancangan Game",
	"CIF61652 - Pembuatan Konten 2D dan 3D",
	"CIF61654 - Pemrograman Aplikasi Perangkat Bergerak",
	"UBU-4005 - Kewirausahaan",
	"MPK-4006 - Kewarganegaraan",
	"COM60061 - Metodologi Penelitian TI",
	"CIF62564 - Administrasi Basis Data",
	"CIF62568 - Arsitektur Aplikasi Enterprise",
	"CIF62563 - Basis Data Terdistribusi",
	"CIF62562 - Kualitas dan Kehandalan Perangkat Lunak",
	"CIF62569 - Manajemen Proyek Perangkat Lunak",
	"CIF62561 - Pengujian Perangkat Lunak",
	"CIF62567 - Perancangan User Experience",
	"CIF62565 - Pola-pola Perancangan",
	"CIF62460 - Visi Komputer",
	"CIF62461 - Data Mining",
	"CIF62462 - Sistem Temu Kembali Informasi",
	"CIF62463 - Jaringan Syaraf Tiruan",
	"CIF62466 - Pemrosesan Bahasa Alami",
	"CIF62363 - Perancangan dan Analisa Jaringan",
	"CCE61372 - Sistem Komputasi Terdistribusi",
	"CIF62362 - Jaringan Multimedia",
	"CCE61371 - Arsitektur Jaringan Terkini",
	"CIF62364 - Pemrograman Jaringan",
	"CIF62365 - Sistem Forensik Digital",
	"CIF61653 - Grafika Komputer dan Visualisasi",
	"CIF62661 - Pemrograman Game",
	"CIF62663 - Pemrograman GPU",
	"CIF62662 - Kecerdasan Buatan dalam Game",
	"CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut",
	"CIF62665 - Rekayasa Aplikasi Perangkat Bergerak",
	"COM60062 - Etika Profesi TI",
	"CIF61574 - Manajemen Konfigurasi Perangkat Lunak",
	"CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak",
	"CIF61573 - Rekayasa Embedded System",
	"CIF61571 - Web Semantik",
	"CIF61452 - Algoritma Evolusi",
	"CIF61456 - Analisis Big Data",
	"CIF61471 - Swarm Intelligence",
	"CCE61360 - Jaringan Nirkabel",
	"CIF61371 - Kriptografi",
	"TIF61673 - Augmented & Virtual Reality",
	"TIF61675 - Desain Kreatif Aplikasi & Game",
	"CIF60973 - Kewirausahaan Teknologi Informasi",
	"CIF60974 - Manajemen Industri Teknologi Informasi",
	"CID60981 - Kapita Selekta"
	);
if ($temp == "2011_2013") {
	$dump = "matkul_smt_genap/export_all_2011_2013";
}
else if ($temp == "2014") {
	$dump = "matkul_smt_genap/export_all_2014";
}
else if ($temp == "2015") {
	$dump = "matkul_smt_genap/export_all_2015";
}
else if ($temp == "2016") {
	$dump = "matkul_smt_genap/export_all_2016";
} else {
	$dump = "matkul_smt_genap/export_all";
}
?>

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
		<a href="<?php echo base_url().$dump ?>" class="btn btn-primary">Export to Excel</a>
	</div>


	<?php 
		//matkul1
	for ($i=1; $i <=87 ; $i++) { 
		if($stat[$i] == "ada isi"){
		echo "<div class=\"container-fluid\">";
		echo "<h4>$nama_matkul[$i]</h4>";
		echo "<table border=\"1\" class=\"text-center\">";
		echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
		$no = 1;
			foreach($matkul[$i] as $m){
					if ($m->MATA_KULIAH_1 == $nama_matkul[$i]) {
						echo "<tr>";
						echo "<td>"; echo $no++; echo"</td>";
						echo "<td>$m->TIMESTAMP</td>";
						echo "<td>$m->NIM</td>";
						echo "<td>$m->NAMA_LENGKAP</td>";
						echo "</tr>";
					}
					elseif ($m->MATA_KULIAH_2 == $nama_matkul[$i]) {
						echo "<tr>";
						echo "<td>"; echo $no++; echo"</td>";
						echo "<td>$m->TIMESTAMP</td>";
						echo "<td>$m->NIM</td>";
						echo "<td>$m->NAMA_LENGKAP</td>";
						echo "</tr>";
					}
					elseif ($m->MATA_KULIAH_3 == $nama_matkul[$i]) {
						echo "<tr>";
						echo "<td>"; echo $no++; echo"</td>";
						echo "<td>$m->TIMESTAMP</td>";
						echo "<td>$m->NIM</td>";
						echo "<td>$m->NAMA_LENGKAP</td>";
						echo "</tr>";
					}
					elseif ($m->MATA_KULIAH_4 == $nama_matkul[$i]) {
						echo "<tr>";
						echo "<td>"; echo $no++; echo"</td>";
						echo "<td>$m->TIMESTAMP</td>";
						echo "<td>$m->NIM</td>";
						echo "<td>$m->NAMA_LENGKAP</td>";
						echo "</tr>";
					}
					elseif ($m->MATA_KULIAH_5 == $nama_matkul[$i]) {
						echo "<tr>";
						echo "<td>"; echo $no++; echo"</td>";
						echo "<td>$m->TIMESTAMP</td>";
						echo "<td>$m->NIM</td>";
						echo "<td>$m->NAMA_LENGKAP</td>";
						echo "</tr>";
					}
					elseif ($m->MATA_KULIAH_6 == $nama_matkul[$i]) {
						echo "<tr>";
						echo "<td>"; echo $no++; echo"</td>";
						echo "<td>$m->TIMESTAMP</td>";
						echo "<td>$m->NIM</td>";
						echo "<td>$m->NAMA_LENGKAP</td>";
						echo "</tr>";
					}
					elseif ($m->MATA_KULIAH_7 == $nama_matkul[$i]) {
						echo "<tr>";
						echo "<td>"; echo $no++; echo"</td>";
						echo "<td>$m->TIMESTAMP</td>";
						echo "<td>$m->NIM</td>";
						echo "<td>$m->NAMA_LENGKAP</td>";
						echo "</tr>";
					}
					elseif ($m->MATA_KULIAH_8 == $nama_matkul[$i]) {
						echo "<tr>";
						echo "<td>"; echo $no++; echo"</td>";
						echo "<td>$m->TIMESTAMP</td>";
						echo "<td>$m->NIM</td>";
						echo "<td>$m->NAMA_LENGKAP</td>";
						echo "</tr>";
					}
			}echo "</table>"; echo "</div>";
		}
	}
	// if($stat1 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[1]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul1 as $m){
	// 		if ($m->MATA_KULIAh_1 == "MPK-4001 - Pendidikan Agama Islam") {
	// 			# code...
	// 		}
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul2
	// if($stat2 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[2]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul2 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul3
	// if($stat3 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[3]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul3 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul4
	// if($stat4 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[4]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul4 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul5
	// if($stat5 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[5]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul5 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul6
	// if($stat6 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[6]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul6 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul7
	// if($stat7 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[7]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul7 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul8
	// if($stat8 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[8]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul8 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul9
	// if($stat9 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[9]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul9 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul10
	// if($stat10 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[10]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul10 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul11
	// if($stat11 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[11]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul11 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul12
	// if($stat12 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[12]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul12 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul13
	// if($stat13 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[13]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul13 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul14
	// if($stat14 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[14]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul14 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul15
	// if($stat15 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[15]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul15 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul16
	// if($stat16 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[16]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul16 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul17
	// if($stat17 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[17]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul17 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul18
	// if($stat18 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[18]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul18 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul19
	// if($stat19 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[19]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul19 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul20
	// if($stat20 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[20]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul20 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul21
	// if($stat21 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[21]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul21 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul22
	// if($stat22 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[22]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul22 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul23
	// if($stat23 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[23]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul23 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul24
	// if($stat24 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[24]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul24 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul25
	// if($stat25 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[25]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul25 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul26
	// if($stat26 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[26]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul26 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul27
	// if($stat27 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[27]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul27 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul28
	// if($stat28 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[28]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul28 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul29
	// if($stat29 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[29]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul29 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul30
	// if($stat30 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[30]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul30 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul31
	// if($stat31 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[31]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul31 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul32
	// if($stat32 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[32]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul32 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul33
	// if($stat33 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[33]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul33 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul34
	// if($stat34 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[34]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul34 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul35
	// if($stat35 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[35]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul35 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul36
	// if($stat36 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[36]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul36 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul37
	// if($stat37 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[37]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul37 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul38
	// if($stat38 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[38]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul38 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul39
	// if($stat39 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[39]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul39 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul40
	// if($stat40 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[40]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul40 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul41
	// if($stat41 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[41]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul41 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul42
	// if($stat42 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[42]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul42 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul43
	// if($stat43 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[43]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul43 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul44
	// if($stat44 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[44]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul44 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul45
	// if($stat45 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[45]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul45 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul46
	// if($stat46 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[46]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul46 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul47
	// if($stat47 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[47]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul47 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul48
	// if($stat48 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[48]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul48 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul49
	// if($stat49 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[49]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul49 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul50
	// if($stat50 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[50]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul50 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul51
	// if($stat51 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[51]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul51 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul52
	// if($stat52 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[52]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul52 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul53
	// if($stat53 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[53]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul53 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul54
	// if($stat54 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[54]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul54 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul55
	// if($stat55 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[55]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul55 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul56
	// if($stat56 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[56]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul56 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul57
	// if($stat57 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[57]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul57 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul58
	// if($stat58 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[58]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul58 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul59
	// if($stat59 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[59]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul59 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul60
	// if($stat60 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[60]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul60 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul61
	// if($stat61 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[61]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul61 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul62
	// if($stat62 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[62]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul62 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul63
	// if($stat63 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[63]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul63 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul64
	// if($stat64 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[64]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul64 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul65
	// if($stat65 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[65]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul65 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul66
	// if($stat66 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[66]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul66 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul67
	// if($stat67 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[67]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul67 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul68
	// if($stat68 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[68]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul68 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul69
	// if($stat69 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[69]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul69 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul70
	// if($stat70 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[70]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul70 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul71
	// if($stat71 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[71]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul71 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul72
	// if($stat72 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[72]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul72 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul73
	// if($stat73 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[73]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul73 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul74
	// if($stat74 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[74]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul74 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul75
	// if($stat75 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[75]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul75 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul76
	// if($stat76 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[76]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul76 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul77
	// if($stat77 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[77]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul77 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul78
	// if($stat78 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[78]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul78 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul79
	// if($stat79 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[79]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul79 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul80
	// if($stat80 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[80]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul80 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul81
	// if($stat81 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[81]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul81 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul82
	// if($stat82 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[82]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul82 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul83
	// if($stat83 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[83]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul83 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul84
	// if($stat84 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[84]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul84 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul85
	// if($stat85 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[85]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul85 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul86
	// if($stat86 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[86]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul86 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }

	// 	//matkul87
	// if($stat87 == "ada isi"){
	// 	echo "<div class=\"container-fluid\">";
	// 	echo "<h4>$nama_matkul[87]</h4>";
	// 	echo "<table border=\"1\" class=\"text-center\">";
	// 	echo "<tr><td style=\"width:30px;\">NO</td><td style=\"width:150px;\">TIMESTAMP</td><td style=\"width:200px;\">NIM</td><td style =\"width:250px;\">NAMA LENGKAP</td></tr>";
	// 	$no = 1;
	// 	foreach($matkul87 as $m){
	// 		echo "<tr>";
	// 		echo "<td>"; echo $no++; echo"</td>";
	// 		echo "<td>$m->TIMESTAMP</td>";
	// 		echo "<td>$m->NIM</td>";
	// 		echo "<td>$m->NAMA_LENGKAP</td>";
	// 		echo "</tr>";
	// 	}echo "</table>"; echo "</div>";
	// }
	?>
</body>
</html>