<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_smt_genap extends CI_Controller {
	private $temp = "";
	private $temp1 = "";
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index()
	{
		$this->load->view('form');
	}

	function angkatan_2011_2013(){
		$data = array(
			'stat_angkatan' => 'anzay'
		);
		$this->load->view('form',$data);
	}

	function angkatan_2014(){
		$angkatan = 2014;
		$data = array(
			'angkatan' => $angkatan,
			'stat_angkatan' => 'biasa'
		);
		$this->load->view('form',$data);
	}

	function angkatan_2015(){
		$angkatan = 2015;
		$data = array(
			'angkatan' => $angkatan,
			'stat_angkatan' => 'biasa'
		);
		$this->load->view('form',$data);
	}

	function angkatan_2016(){
		$angkatan = 2016;
		$data = array(
			'angkatan' => $angkatan,
			'stat_angkatan' => 'biasa'
		);
		$this->load->view('form',$data);
	}

	function redirect_hmif()
	{
		redirect('http://hmif.ub.ac.id');
	}

	function view()
	{
		$this->load->view('view_data');
	}

	

	function view_matkul($mata_kuliah)
	{
		$mata_kuliah = str_replace("%20", " ", $mata_kuliah);
		$data = array(
			'matkul' => $this->m_data->view_data_matkul($mata_kuliah)->result(),
			'nama_matkul' => $mata_kuliah
		);
		$this->load->view('view_data_table',$data);
	}

	function submit()
	{
		$nama_lengkap = $this->input->post('nama_lengkap');
		$nim = $this->input->post('nim');
		$jumlah_sks = $this->input->post('jumlah_sks');
		$mata_kuliah_1 = $this->input->post('mata_kuliah_1');
		$mata_kuliah_2 = $this->input->post('mata_kuliah_2');
		$mata_kuliah_3 = $this->input->post('mata_kuliah_3');
		$mata_kuliah_4 = $this->input->post('mata_kuliah_4');
		$mata_kuliah_5 = $this->input->post('mata_kuliah_5');
		$mata_kuliah_6 = $this->input->post('mata_kuliah_6');
		$mata_kuliah_7 = $this->input->post('mata_kuliah_7');
		$mata_kuliah_8 = $this->input->post('mata_kuliah_8');

		// $hari_matkul_1 = $this->input->post('hari_matkul_1');
		// $hari_matkul_2 = $this->input->post('hari_matkul_2');
		// $hari_matkul_3 = $this->input->post('hari_matkul_3');
		// $hari_matkul_4 = $this->input->post('hari_matkul_4');
		// $hari_matkul_5 = $this->input->post('hari_matkul_5');
		// $hari_matkul_6 = $this->input->post('hari_matkul_6');
		// $hari_matkul_7 = $this->input->post('hari_matkul_7');

		// $jam_matkul_mulai1 = $this->input->post('jam_matkul_mulai1');
		// $jam_matkul_mulai2 = $this->input->post('jam_matkul_mulai2');
		// $jam_matkul_mulai3 = $this->input->post('jam_matkul_mulai3');
		// $jam_matkul_mulai4 = $this->input->post('jam_matkul_mulai4');
		// $jam_matkul_mulai5 = $this->input->post('jam_matkul_mulai5');
		// $jam_matkul_mulai6 = $this->input->post('jam_matkul_mulai6');
		// $jam_matkul_mulai7 = $this->input->post('jam_matkul_mulai7');

		// $jam_matkul_selesai1 = $this->input->post('jam_matkul_selesai1');
		// $jam_matkul_selesai2 = $this->input->post('jam_matkul_selesai2');
		// $jam_matkul_selesai3 = $this->input->post('jam_matkul_selesai3');
		// $jam_matkul_selesai4 = $this->input->post('jam_matkul_selesai4');
		// $jam_matkul_selesai5 = $this->input->post('jam_matkul_selesai5');
		// $jam_matkul_selesai6 = $this->input->post('jam_matkul_selesai6');
		// $jam_matkul_selesai7 = $this->input->post('jam_matkul_selesai7');
		$keluhan = $this->input->post('keluhan');
		$nim_length = strlen($nim);

		$where = array(
			'nim' => $nim
		);
		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'nim' => $nim,
			'jumlah_sks_saat_ini' => $jumlah_sks,
			'mata_kuliah_1' => $mata_kuliah_1,
			// 'hari_1' => $hari_matkul_1,
			// 'jam_mulai_1' => $jam_matkul_mulai1,
			// 'jam_selesai_1' => $jam_matkul_selesai1,
			'mata_kuliah_2' => $mata_kuliah_2,
			'mata_kuliah_3' => $mata_kuliah_3,
			'mata_kuliah_4' => $mata_kuliah_4,
			'mata_kuliah_5' => $mata_kuliah_5,
			'mata_kuliah_6' => $mata_kuliah_6,
			'mata_kuliah_7' => $mata_kuliah_7,
			'mata_kuliah_8' => $mata_kuliah_8,
			// 'hari_2' => $hari_matkul_2,
			// 'hari_3' => $hari_matkul_3,
			// 'hari_4' => $hari_matkul_4,
			// 'hari_5' => $hari_matkul_5,
			// 'hari_6' => $hari_matkul_6,
			// 'hari_7' => $hari_matkul_7,
			// 'jam_mulai_2' => $jam_matkul_mulai2,
			// 'jam_mulai_3' => $jam_matkul_mulai3,
			// 'jam_mulai_4' => $jam_matkul_mulai4,
			// 'jam_mulai_5' => $jam_matkul_mulai5,
			// 'jam_mulai_6' => $jam_matkul_mulai6,
			// 'jam_mulai_7' => $jam_matkul_mulai7,
			// 'jam_selesai_2' => $jam_matkul_selesai2,
			// 'jam_selesai_3' => $jam_matkul_selesai3,
			// 'jam_selesai_4' => $jam_matkul_selesai4,
			// 'jam_selesai_5' => $jam_matkul_selesai5,
			// 'jam_selesai_6' => $jam_matkul_selesai6,
			// 'jam_selesai_7' => $jam_matkul_selesai7,
			'keluhan' => $keluhan
		);
		$cek = $this->m_data->check_data("data_krs",$where)->num_rows();
		if($cek > 0){
			$this->edit_page();
		} else {
			if($nim_length != 15){
				$message = "NIM anda tidak valid!";
				echo "<script type='text/javascript'>
				alert('$message');
				</script>";
			} else {
				$this->m_data->input_data($data,'data_krs');
				$message = "Input Data Sukses!";
				echo "<script type='text/javascript'>
				alert('$message');
				window.location.href = '" . base_url() . "matkul_smt_genap/redirect_hmif';
				</script>";
			}
		}
	}

	function edit_page()
	{
		$nim = $this->input->post('nim');
		$where = array(
			'nim' => $nim
		);
		$this->load->view('edit_page',$where);
	}

	function edit()
	{
		$nim = $this->input->post('nim');
		$where = array(
			'NIM' => $nim
		);
		$data['user'] = $this->m_data->check_data("data_krs",$where)->result();
		$this->load->view('edit',$data);
	}

	function export($mata_kuliah)
	{
		$mata_kuliah = str_replace("%20", " ", $mata_kuliah);
		$data = array(
			'matkul' => $this->m_data->view_data_matkul($mata_kuliah)->result(),
			'nama_matkul' => $mata_kuliah
		);
		//['matkul'] = $this->m_data->view_data_matkul($mata_kuliah)->result();
		$this->load->view('view_data_table_export',$data);
	}

	function update()
	{
		$nama_lengkap = $this->input->post('nama_lengkap');
		$nim = $this->input->post('nim');
		$jumlah_sks = $this->input->post('jumlah_sks');
		$mata_kuliah_1 = $this->input->post('mata_kuliah_1');
		$mata_kuliah_2 = $this->input->post('mata_kuliah_2');
		$mata_kuliah_3 = $this->input->post('mata_kuliah_3');
		$mata_kuliah_4 = $this->input->post('mata_kuliah_4');
		$mata_kuliah_5 = $this->input->post('mata_kuliah_5');
		$mata_kuliah_6 = $this->input->post('mata_kuliah_6');
		$mata_kuliah_7 = $this->input->post('mata_kuliah_7');
		$mata_kuliah_8 = $this->input->post('mata_kuliah_8');
		// $hari_matkul_1 = $this->input->post('hari_matkul_1');
		// $hari_matkul_2 = $this->input->post('hari_matkul_2');
		// $hari_matkul_3 = $this->input->post('hari_matkul_3');
		// $hari_matkul_4 = $this->input->post('hari_matkul_4');
		// $hari_matkul_5 = $this->input->post('hari_matkul_5');
		// $hari_matkul_6 = $this->input->post('hari_matkul_6');
		// $hari_matkul_7 = $this->input->post('hari_matkul_7');

		// $jam_matkul_mulai1 = $this->input->post('jam_matkul_mulai1');
		// $jam_matkul_mulai2 = $this->input->post('jam_matkul_mulai2');
		// $jam_matkul_mulai3 = $this->input->post('jam_matkul_mulai3');
		// $jam_matkul_mulai4 = $this->input->post('jam_matkul_mulai4');
		// $jam_matkul_mulai5 = $this->input->post('jam_matkul_mulai5');
		// $jam_matkul_mulai6 = $this->input->post('jam_matkul_mulai6');
		// $jam_matkul_mulai7 = $this->input->post('jam_matkul_mulai7');

		// $jam_matkul_selesai1 = $this->input->post('jam_matkul_selesai1');
		// $jam_matkul_selesai2 = $this->input->post('jam_matkul_selesai2');
		// $jam_matkul_selesai3 = $this->input->post('jam_matkul_selesai3');
		// $jam_matkul_selesai4 = $this->input->post('jam_matkul_selesai4');
		// $jam_matkul_selesai5 = $this->input->post('jam_matkul_selesai5');
		// $jam_matkul_selesai6 = $this->input->post('jam_matkul_selesai6');
		// $jam_matkul_selesai7 = $this->input->post('jam_matkul_selesai7');
		$keluhan = $this->input->post('keluhan');
		$where = array(
			'nim' => $nim
		);

		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'nim' => $nim,
			'jumlah_sks_saat_ini' => $jumlah_sks,
			'mata_kuliah_1' => $mata_kuliah_1,
			// 'hari_1' => $hari_matkul_1,
			// 'jam_mulai_1' => $jam_matkul_mulai1,
			// 'jam_selesai_1' => $jam_matkul_selesai1,
			'mata_kuliah_2' => $mata_kuliah_2,
			'mata_kuliah_3' => $mata_kuliah_3,
			'mata_kuliah_4' => $mata_kuliah_4,
			'mata_kuliah_5' => $mata_kuliah_5,
			'mata_kuliah_6' => $mata_kuliah_6,
			'mata_kuliah_7' => $mata_kuliah_7,
			'mata_kuliah_8' => $mata_kuliah_8,
			// 'hari_2' => $hari_matkul_2,
			// 'hari_3' => $hari_matkul_3,
			// 'hari_4' => $hari_matkul_4,
			// 'hari_5' => $hari_matkul_5,
			// 'hari_6' => $hari_matkul_6,
			// 'hari_7' => $hari_matkul_7,
			// 'jam_mulai_2' => $jam_matkul_mulai2,
			// 'jam_mulai_3' => $jam_matkul_mulai3,
			// 'jam_mulai_4' => $jam_matkul_mulai4,
			// 'jam_mulai_5' => $jam_matkul_mulai5,
			// 'jam_mulai_6' => $jam_matkul_mulai6,
			// 'jam_mulai_7' => $jam_matkul_mulai7,
			// 'jam_selesai_2' => $jam_matkul_selesai2,
			// 'jam_selesai_3' => $jam_matkul_selesai3,
			// 'jam_selesai_4' => $jam_matkul_selesai4,
			// 'jam_selesai_5' => $jam_matkul_selesai5,
			// 'jam_selesai_6' => $jam_matkul_selesai6,
			// 'jam_selesai_7' => $jam_matkul_selesai7,
			'keluhan' => $keluhan
		);
		$this->m_data->update_data($where,$data,'data_krs');
		$message = "Update Data Sukses!";
		echo "<script type='text/javascript'>
		alert('$message');
		window.location.href = '" . base_url() . "matkul_smt_genap/redirect_hmif';
		</script>";
	}

	function view_keluhan(){
		$data = array(
			'keluhan' => $this->m_data->view_keluhan()->result()
		);
		$this->load->view('view_keluhan_table',$data);
	}

	function export_keluhan(){
		$data = array(
			'keluhan' => $this->m_data->view_keluhan()->result()
		);
		$this->load->view('view_keluhan_table_export',$data);
	}

	function view_data_per_mahasiswa(){
		$data = array(
			'data_mhs' => $this->m_data->view_data_per_mahasiswa()->result()
		); 

		$this->load->view('view_bataltambah',$data);
		
	}

	function export_data_per_mahasiswa(){
		$data = array(
			'data_mhs' => $this->m_data->view_data_per_mahasiswa()->result()
		); 

		$this->load->view('view_bataltambah_export',$data);
		
	}

	function view_all(){
		$cek = array(
			" ",
			$this->m_data->view_data_matkul("MPK-4001 - Pendidikan Agama Islam")->result(),
			$this->m_data->view_data_matkul("MPK-4002 - Pendidikan Agama Katolik")->result(),
			$this->m_data->view_data_matkul("MPK-4003 - Pendidikan Agama Protestan")->result(),
			$this->m_data->view_data_matkul("MPK-4004 - Pendidikan Agama Hindu")->result(),
			$this->m_data->view_data_matkul("MPK-4005 - Pendidikan Agama Budha ")->result(),
			$this->m_data->view_data_matkul("MPK-4008 - Bahasa Indonesia")->result(),
			$this->m_data->view_data_matkul("COM60010 - Pemrograman Dasar")->result(),
			$this->m_data->view_data_matkul("COM60013 - Pengantar Ilmu Komputer")->result(),
			$this->m_data->view_data_matkul("COM50012 - Matematika Komputasi")->result(),
			$this->m_data->view_data_matkul("CIF60113 - Sistem Digital")->result(),
			$this->m_data->view_data_matkul("UBU-4008 - Bahasa Inggris")->result(),
			$this->m_data->view_data_matkul("COM60011 - Arsitektur & Organisasi Komputer")->result(),
			$this->m_data->view_data_matkul("CID62120 - Pemrograman Lanjut")->result(),
			$this->m_data->view_data_matkul("CID62122 - Interaksi Manusia & Komputer")->result(),
			$this->m_data->view_data_matkul("CID62121 - Matematika Komputasi Lanjut")->result(),
			$this->m_data->view_data_matkul("CID62125 - Statistika")->result(),
			$this->m_data->view_data_matkul("MPK-4007 - Pendidikan Pancasila")->result(),
			$this->m_data->view_data_matkul("CIF61230 - Algoritma & Struktur Data")->result(),
			$this->m_data->view_data_matkul("CID61132 - Metode Numerik")->result(),
			$this->m_data->view_data_matkul("CID61133 - Sistem Operasi")->result(),
			$this->m_data->view_data_matkul("CID61134 - Sistem Multimedia")->result(),
			$this->m_data->view_data_matkul("CID61236 - Sistem Basis Data")->result(),
			$this->m_data->view_data_matkul("CIF62240 - Desain & Analisis Algoritma")->result(),
			$this->m_data->view_data_matkul("CIF62242 - Kecerdasan Buatan")->result(),
			$this->m_data->view_data_matkul("CIF62245 - Analisis & Perancangan Sistem")->result(),
			$this->m_data->view_data_matkul("CIF62246 - Pemrograman Web")->result(),
			$this->m_data->view_data_matkul("CCE61153 - Jaringan Komputer")->result(),
			$this->m_data->view_data_matkul("CIF61251 - Keamanan Informasi")->result(),
			$this->m_data->view_data_matkul("CIF61252 - Pengenalan Pola")->result(),
			$this->m_data->view_data_matkul("CIF61255 - Rekayasa Perangkat Lunak")->result(),
			$this->m_data->view_data_matkul("CIF61256 - Pemrograman Platform Khusus")->result(),
			$this->m_data->view_data_matkul("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
			$this->m_data->view_data_matkul("CIF61552 - Rekayasa Pengetahuan")->result(),
			$this->m_data->view_data_matkul("CIF61450 - Pengolahan Citra Digital")->result(),
			$this->m_data->view_data_matkul("CIF61451 - Text Mining")->result(),
			$this->m_data->view_data_matkul("CIF61453 - Sistem Pakar")->result(),
			$this->m_data->view_data_matkul("CIF61454 - Logika Fuzzy")->result(),
			$this->m_data->view_data_matkul("CIF61455 - Sistem Pendukung Keputusan")->result(),
			$this->m_data->view_data_matkul("CCE62361 - Administrasi Sistem Server")->result(),
			$this->m_data->view_data_matkul("CCE62161 - Administrasi Jaringan")->result(),
			$this->m_data->view_data_matkul("CIF61351 - Keamanan Jaringan")->result(),
			$this->m_data->view_data_matkul("CIF61651 - Perancangan Game")->result(),
			$this->m_data->view_data_matkul("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
			$this->m_data->view_data_matkul("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
			$this->m_data->view_data_matkul("UBU-4005 - Kewirausahaan")->result(),
			$this->m_data->view_data_matkul("MPK-4006 - Kewarganegaraan")->result(),
			$this->m_data->view_data_matkul("COM60061 - Metodologi Penelitian TI")->result(),
			$this->m_data->view_data_matkul("CIF62564 - Administrasi Basis Data")->result(),
			$this->m_data->view_data_matkul("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
			$this->m_data->view_data_matkul("CIF62563 - Basis Data Terdistribusi")->result(),
			$this->m_data->view_data_matkul("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
			$this->m_data->view_data_matkul("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
			$this->m_data->view_data_matkul("CIF62561 - Pengujian Perangkat Lunak")->result(),
			$this->m_data->view_data_matkul("CIF62567 - Perancangan User Experience")->result(),
			$this->m_data->view_data_matkul("CIF62565 - Pola-pola Perancangan")->result(),
			$this->m_data->view_data_matkul("CIF62460 - Visi Komputer")->result(),
			$this->m_data->view_data_matkul("CIF62461 - Data Mining")->result(),
			$this->m_data->view_data_matkul("CIF62462 - Sistem Temu Kembali Informasi")->result(),
			$this->m_data->view_data_matkul("CIF62463 - Jaringan Syaraf Tiruan")->result(),
			$this->m_data->view_data_matkul("CIF62466 - Pemrosesan Bahasa Alami")->result(),
			$this->m_data->view_data_matkul("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
			$this->m_data->view_data_matkul("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
			$this->m_data->view_data_matkul("CIF62362 - Jaringan Multimedia")->result(),
			$this->m_data->view_data_matkul("CCE61371 - Arsitektur Jaringan Terkini")->result(),
			$this->m_data->view_data_matkul("CIF62364 - Pemrograman Jaringan")->result(),
			$this->m_data->view_data_matkul("CIF62365 - Sistem Forensik Digital")->result(),
			$this->m_data->view_data_matkul("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
			$this->m_data->view_data_matkul("CIF62661 - Pemrograman Game")->result(),
			$this->m_data->view_data_matkul("CIF62663 - Pemrograman GPU")->result(),
			$this->m_data->view_data_matkul("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
			$this->m_data->view_data_matkul("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
			$this->m_data->view_data_matkul("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
			$this->m_data->view_data_matkul("COM60062 - Etika Profesi TI")->result(),
			$this->m_data->view_data_matkul("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
			$this->m_data->view_data_matkul("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
			$this->m_data->view_data_matkul("CIF61573 - Rekayasa Embedded System")->result(),
			$this->m_data->view_data_matkul("CIF61571 - Web Semantik")->result(),
			$this->m_data->view_data_matkul("CIF61452 - Algoritma Evolusi")->result(),
			$this->m_data->view_data_matkul("CIF61456 - Analisis Big Data")->result(),
			$this->m_data->view_data_matkul("CIF61471 - Swarm Intelligence")->result(),
			$this->m_data->view_data_matkul("CCE61360 - Jaringan Nirkabel")->result(),
			$this->m_data->view_data_matkul("CIF61371 - Kriptografi")->result(),
			$this->m_data->view_data_matkul("TIF61673 - Augmented & Virtual Reality")->result(),
			$this->m_data->view_data_matkul("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
			$this->m_data->view_data_matkul("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
			$this->m_data->view_data_matkul("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
			$this->m_data->view_data_matkul("CID60981 - Kapita Selekta")->result(),);

			$stat = array();
			for($i=1;$i<=87;$i++){
				if(empty($cek[$i])){
					$stat[$i] = "kosong";
				} else {
					$stat[$i] = "ada isi";
				}
			}
			$data = array(
				'stat' => $stat,
				'matkul' => $cek,
				'temp' => ''
			);

			$this->load->view('view_all_data_table',$data);
	}

function view_all_2011_2013(){
	$temp = "2011_2013";
	$cek = array(
		" ",
		$this->m_data->view_data_matkul_2011_2013("MPK-4001 - Pendidikan Agama Islam")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4002 - Pendidikan Agama Katolik")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4003 - Pendidikan Agama Protestan")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4004 - Pendidikan Agama Hindu")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4005 - Pendidikan Agama Budha ")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4008 - Bahasa Indonesia")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60010 - Pemrograman Dasar")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60013 - Pengantar Ilmu Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM50012 - Matematika Komputasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF60113 - Sistem Digital")->result(),
		$this->m_data->view_data_matkul_2011_2013("UBU-4008 - Bahasa Inggris")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60011 - Arsitektur & Organisasi Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID62120 - Pemrograman Lanjut")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID62122 - Interaksi Manusia & Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID62121 - Matematika Komputasi Lanjut")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID62125 - Statistika")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4007 - Pendidikan Pancasila")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61230 - Algoritma & Struktur Data")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID61132 - Metode Numerik")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID61133 - Sistem Operasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID61134 - Sistem Multimedia")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID61236 - Sistem Basis Data")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62240 - Desain & Analisis Algoritma")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62242 - Kecerdasan Buatan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62245 - Analisis & Perancangan Sistem")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62246 - Pemrograman Web")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE61153 - Jaringan Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61251 - Keamanan Informasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61252 - Pengenalan Pola")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61255 - Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61256 - Pemrograman Platform Khusus")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61552 - Rekayasa Pengetahuan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61450 - Pengolahan Citra Digital")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61451 - Text Mining")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61453 - Sistem Pakar")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61454 - Logika Fuzzy")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61455 - Sistem Pendukung Keputusan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE62361 - Administrasi Sistem Server")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE62161 - Administrasi Jaringan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61351 - Keamanan Jaringan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61651 - Perancangan Game")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2011_2013("UBU-4005 - Kewirausahaan")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4006 - Kewarganegaraan")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60061 - Metodologi Penelitian TI")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62564 - Administrasi Basis Data")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62563 - Basis Data Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62561 - Pengujian Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62567 - Perancangan User Experience")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62565 - Pola-pola Perancangan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62460 - Visi Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62461 - Data Mining")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62462 - Sistem Temu Kembali Informasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62463 - Jaringan Syaraf Tiruan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62466 - Pemrosesan Bahasa Alami")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62362 - Jaringan Multimedia")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE61371 - Arsitektur Jaringan Terkini")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62364 - Pemrograman Jaringan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62365 - Sistem Forensik Digital")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62661 - Pemrograman Game")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62663 - Pemrograman GPU")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60062 - Etika Profesi TI")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61573 - Rekayasa Embedded System")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61571 - Web Semantik")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61452 - Algoritma Evolusi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61456 - Analisis Big Data")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61471 - Swarm Intelligence")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE61360 - Jaringan Nirkabel")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61371 - Kriptografi")->result(),
		$this->m_data->view_data_matkul_2011_2013("TIF61673 - Augmented & Virtual Reality")->result(),
		$this->m_data->view_data_matkul_2011_2013("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID60981 - Kapita Selekta")->result(),);
		$stat = array();
		for($i=1;$i<=87;$i++){
			if(empty($cek[$i])){
				$stat[$i] = "kosong";
			} else {
				$stat[$i] = "ada isi";
			}
		}
		$data = array(
			'stat' => $stat,
			'matkul' => $cek,
			'temp' => $temp
		);
		$this->load->view('view_all_data_table',$data);
	}

function view_all_2014(){
	$temp = "2014";
	$cek = array(
		" ",
		$this->m_data->view_data_matkul_2014("MPK-4001 - Pendidikan Agama Islam")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4002 - Pendidikan Agama Katolik")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4003 - Pendidikan Agama Protestan")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4004 - Pendidikan Agama Hindu")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4005 - Pendidikan Agama Budha ")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4008 - Bahasa Indonesia")->result(),
		$this->m_data->view_data_matkul_2014("COM60010 - Pemrograman Dasar")->result(),
		$this->m_data->view_data_matkul_2014("COM60013 - Pengantar Ilmu Komputer")->result(),
		$this->m_data->view_data_matkul_2014("COM50012 - Matematika Komputasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF60113 - Sistem Digital")->result(),
		$this->m_data->view_data_matkul_2014("UBU-4008 - Bahasa Inggris")->result(),
		$this->m_data->view_data_matkul_2014("COM60011 - Arsitektur & Organisasi Komputer")->result(),
		$this->m_data->view_data_matkul_2014("CID62120 - Pemrograman Lanjut")->result(),
		$this->m_data->view_data_matkul_2014("CID62122 - Interaksi Manusia & Komputer")->result(),
		$this->m_data->view_data_matkul_2014("CID62121 - Matematika Komputasi Lanjut")->result(),
		$this->m_data->view_data_matkul_2014("CID62125 - Statistika")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4007 - Pendidikan Pancasila")->result(),
		$this->m_data->view_data_matkul_2014("CIF61230 - Algoritma & Struktur Data")->result(),
		$this->m_data->view_data_matkul_2014("CID61132 - Metode Numerik")->result(),
		$this->m_data->view_data_matkul_2014("CID61133 - Sistem Operasi")->result(),
		$this->m_data->view_data_matkul_2014("CID61134 - Sistem Multimedia")->result(),
		$this->m_data->view_data_matkul_2014("CID61236 - Sistem Basis Data")->result(),
		$this->m_data->view_data_matkul_2014("CIF62240 - Desain & Analisis Algoritma")->result(),
		$this->m_data->view_data_matkul_2014("CIF62242 - Kecerdasan Buatan")->result(),
		$this->m_data->view_data_matkul_2014("CIF62245 - Analisis & Perancangan Sistem")->result(),
		$this->m_data->view_data_matkul_2014("CIF62246 - Pemrograman Web")->result(),
		$this->m_data->view_data_matkul_2014("CCE61153 - Jaringan Komputer")->result(),
		$this->m_data->view_data_matkul_2014("CIF61251 - Keamanan Informasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF61252 - Pengenalan Pola")->result(),
		$this->m_data->view_data_matkul_2014("CIF61255 - Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF61256 - Pemrograman Platform Khusus")->result(),
		$this->m_data->view_data_matkul_2014("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
		$this->m_data->view_data_matkul_2014("CIF61552 - Rekayasa Pengetahuan")->result(),
		$this->m_data->view_data_matkul_2014("CIF61450 - Pengolahan Citra Digital")->result(),
		$this->m_data->view_data_matkul_2014("CIF61451 - Text Mining")->result(),
		$this->m_data->view_data_matkul_2014("CIF61453 - Sistem Pakar")->result(),
		$this->m_data->view_data_matkul_2014("CIF61454 - Logika Fuzzy")->result(),
		$this->m_data->view_data_matkul_2014("CIF61455 - Sistem Pendukung Keputusan")->result(),
		$this->m_data->view_data_matkul_2014("CCE62361 - Administrasi Sistem Server")->result(),
		$this->m_data->view_data_matkul_2014("CCE62161 - Administrasi Jaringan")->result(),
		$this->m_data->view_data_matkul_2014("CIF61351 - Keamanan Jaringan")->result(),
		$this->m_data->view_data_matkul_2014("CIF61651 - Perancangan Game")->result(),
		$this->m_data->view_data_matkul_2014("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
		$this->m_data->view_data_matkul_2014("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2014("UBU-4005 - Kewirausahaan")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4006 - Kewarganegaraan")->result(),
		$this->m_data->view_data_matkul_2014("COM60061 - Metodologi Penelitian TI")->result(),
		$this->m_data->view_data_matkul_2014("CIF62564 - Administrasi Basis Data")->result(),
		$this->m_data->view_data_matkul_2014("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
		$this->m_data->view_data_matkul_2014("CIF62563 - Basis Data Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2014("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF62561 - Pengujian Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF62567 - Perancangan User Experience")->result(),
		$this->m_data->view_data_matkul_2014("CIF62565 - Pola-pola Perancangan")->result(),
		$this->m_data->view_data_matkul_2014("CIF62460 - Visi Komputer")->result(),
		$this->m_data->view_data_matkul_2014("CIF62461 - Data Mining")->result(),
		$this->m_data->view_data_matkul_2014("CIF62462 - Sistem Temu Kembali Informasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF62463 - Jaringan Syaraf Tiruan")->result(),
		$this->m_data->view_data_matkul_2014("CIF62466 - Pemrosesan Bahasa Alami")->result(),
		$this->m_data->view_data_matkul_2014("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
		$this->m_data->view_data_matkul_2014("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2014("CIF62362 - Jaringan Multimedia")->result(),
		$this->m_data->view_data_matkul_2014("CCE61371 - Arsitektur Jaringan Terkini")->result(),
		$this->m_data->view_data_matkul_2014("CIF62364 - Pemrograman Jaringan")->result(),
		$this->m_data->view_data_matkul_2014("CIF62365 - Sistem Forensik Digital")->result(),
		$this->m_data->view_data_matkul_2014("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF62661 - Pemrograman Game")->result(),
		$this->m_data->view_data_matkul_2014("CIF62663 - Pemrograman GPU")->result(),
		$this->m_data->view_data_matkul_2014("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
		$this->m_data->view_data_matkul_2014("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
		$this->m_data->view_data_matkul_2014("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2014("COM60062 - Etika Profesi TI")->result(),
		$this->m_data->view_data_matkul_2014("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF61573 - Rekayasa Embedded System")->result(),
		$this->m_data->view_data_matkul_2014("CIF61571 - Web Semantik")->result(),
		$this->m_data->view_data_matkul_2014("CIF61452 - Algoritma Evolusi")->result(),
		$this->m_data->view_data_matkul_2014("CIF61456 - Analisis Big Data")->result(),
		$this->m_data->view_data_matkul_2014("CIF61471 - Swarm Intelligence")->result(),
		$this->m_data->view_data_matkul_2014("CCE61360 - Jaringan Nirkabel")->result(),
		$this->m_data->view_data_matkul_2014("CIF61371 - Kriptografi")->result(),
		$this->m_data->view_data_matkul_2014("TIF61673 - Augmented & Virtual Reality")->result(),
		$this->m_data->view_data_matkul_2014("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
		$this->m_data->view_data_matkul_2014("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2014("CID60981 - Kapita Selekta")->result(),);
		
		$stat = array();
		for($i=1;$i<=87;$i++){
			if(empty($cek[$i])){
				$stat[$i] = "kosong";
			} else {
				$stat[$i] = "ada isi";
			}
		}
		
		$data = array(
			'stat' => $stat,
			'matkul' => $cek,
			'temp' => $temp
		);

		$this->load->view('view_all_data_table',$data);
	}

function view_all_2015(){
	$temp = "2015";
	$cek = array(
		" ",
		$this->m_data->view_data_matkul_2015("MPK-4001 - Pendidikan Agama Islam")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4002 - Pendidikan Agama Katolik")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4003 - Pendidikan Agama Protestan")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4004 - Pendidikan Agama Hindu")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4005 - Pendidikan Agama Budha ")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4008 - Bahasa Indonesia")->result(),
		$this->m_data->view_data_matkul_2015("COM60010 - Pemrograman Dasar")->result(),
		$this->m_data->view_data_matkul_2015("COM60013 - Pengantar Ilmu Komputer")->result(),
		$this->m_data->view_data_matkul_2015("COM50012 - Matematika Komputasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF60113 - Sistem Digital")->result(),
		$this->m_data->view_data_matkul_2015("UBU-4008 - Bahasa Inggris")->result(),
		$this->m_data->view_data_matkul_2015("COM60011 - Arsitektur & Organisasi Komputer")->result(),
		$this->m_data->view_data_matkul_2015("CID62120 - Pemrograman Lanjut")->result(),
		$this->m_data->view_data_matkul_2015("CID62122 - Interaksi Manusia & Komputer")->result(),
		$this->m_data->view_data_matkul_2015("CID62121 - Matematika Komputasi Lanjut")->result(),
		$this->m_data->view_data_matkul_2015("CID62125 - Statistika")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4007 - Pendidikan Pancasila")->result(),
		$this->m_data->view_data_matkul_2015("CIF61230 - Algoritma & Struktur Data")->result(),
		$this->m_data->view_data_matkul_2015("CID61132 - Metode Numerik")->result(),
		$this->m_data->view_data_matkul_2015("CID61133 - Sistem Operasi")->result(),
		$this->m_data->view_data_matkul_2015("CID61134 - Sistem Multimedia")->result(),
		$this->m_data->view_data_matkul_2015("CID61236 - Sistem Basis Data")->result(),
		$this->m_data->view_data_matkul_2015("CIF62240 - Desain & Analisis Algoritma")->result(),
		$this->m_data->view_data_matkul_2015("CIF62242 - Kecerdasan Buatan")->result(),
		$this->m_data->view_data_matkul_2015("CIF62245 - Analisis & Perancangan Sistem")->result(),
		$this->m_data->view_data_matkul_2015("CIF62246 - Pemrograman Web")->result(),
		$this->m_data->view_data_matkul_2015("CCE61153 - Jaringan Komputer")->result(),
		$this->m_data->view_data_matkul_2015("CIF61251 - Keamanan Informasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF61252 - Pengenalan Pola")->result(),
		$this->m_data->view_data_matkul_2015("CIF61255 - Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF61256 - Pemrograman Platform Khusus")->result(),
		$this->m_data->view_data_matkul_2015("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
		$this->m_data->view_data_matkul_2015("CIF61552 - Rekayasa Pengetahuan")->result(),
		$this->m_data->view_data_matkul_2015("CIF61450 - Pengolahan Citra Digital")->result(),
		$this->m_data->view_data_matkul_2015("CIF61451 - Text Mining")->result(),
		$this->m_data->view_data_matkul_2015("CIF61453 - Sistem Pakar")->result(),
		$this->m_data->view_data_matkul_2015("CIF61454 - Logika Fuzzy")->result(),
		$this->m_data->view_data_matkul_2015("CIF61455 - Sistem Pendukung Keputusan")->result(),
		$this->m_data->view_data_matkul_2015("CCE62361 - Administrasi Sistem Server")->result(),
		$this->m_data->view_data_matkul_2015("CCE62161 - Administrasi Jaringan")->result(),
		$this->m_data->view_data_matkul_2015("CIF61351 - Keamanan Jaringan")->result(),
		$this->m_data->view_data_matkul_2015("CIF61651 - Perancangan Game")->result(),
		$this->m_data->view_data_matkul_2015("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
		$this->m_data->view_data_matkul_2015("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2015("UBU-4005 - Kewirausahaan")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4006 - Kewarganegaraan")->result(),
		$this->m_data->view_data_matkul_2015("COM60061 - Metodologi Penelitian TI")->result(),
		$this->m_data->view_data_matkul_2015("CIF62564 - Administrasi Basis Data")->result(),
		$this->m_data->view_data_matkul_2015("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
		$this->m_data->view_data_matkul_2015("CIF62563 - Basis Data Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2015("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF62561 - Pengujian Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF62567 - Perancangan User Experience")->result(),
		$this->m_data->view_data_matkul_2015("CIF62565 - Pola-pola Perancangan")->result(),
		$this->m_data->view_data_matkul_2015("CIF62460 - Visi Komputer")->result(),
		$this->m_data->view_data_matkul_2015("CIF62461 - Data Mining")->result(),
		$this->m_data->view_data_matkul_2015("CIF62462 - Sistem Temu Kembali Informasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF62463 - Jaringan Syaraf Tiruan")->result(),
		$this->m_data->view_data_matkul_2015("CIF62466 - Pemrosesan Bahasa Alami")->result(),
		$this->m_data->view_data_matkul_2015("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
		$this->m_data->view_data_matkul_2015("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2015("CIF62362 - Jaringan Multimedia")->result(),
		$this->m_data->view_data_matkul_2015("CCE61371 - Arsitektur Jaringan Terkini")->result(),
		$this->m_data->view_data_matkul_2015("CIF62364 - Pemrograman Jaringan")->result(),
		$this->m_data->view_data_matkul_2015("CIF62365 - Sistem Forensik Digital")->result(),
		$this->m_data->view_data_matkul_2015("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF62661 - Pemrograman Game")->result(),
		$this->m_data->view_data_matkul_2015("CIF62663 - Pemrograman GPU")->result(),
		$this->m_data->view_data_matkul_2015("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
		$this->m_data->view_data_matkul_2015("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
		$this->m_data->view_data_matkul_2015("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2015("COM60062 - Etika Profesi TI")->result(),
		$this->m_data->view_data_matkul_2015("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF61573 - Rekayasa Embedded System")->result(),
		$this->m_data->view_data_matkul_2015("CIF61571 - Web Semantik")->result(),
		$this->m_data->view_data_matkul_2015("CIF61452 - Algoritma Evolusi")->result(),
		$this->m_data->view_data_matkul_2015("CIF61456 - Analisis Big Data")->result(),
		$this->m_data->view_data_matkul_2015("CIF61471 - Swarm Intelligence")->result(),
		$this->m_data->view_data_matkul_2015("CCE61360 - Jaringan Nirkabel")->result(),
		$this->m_data->view_data_matkul_2015("CIF61371 - Kriptografi")->result(),
		$this->m_data->view_data_matkul_2015("TIF61673 - Augmented & Virtual Reality")->result(),
		$this->m_data->view_data_matkul_2015("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
		$this->m_data->view_data_matkul_2015("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2015("CID60981 - Kapita Selekta")->result(),);
		
		$stat = array();
		for($i=1;$i<=87;$i++){
			if(empty($cek[$i])){
				$stat[$i] = "kosong";
			} else {
				$stat[$i] = "ada isi";
			}
		}
		
		$data = array(
			'stat' => $stat,
			'matkul' => $cek,
			'temp' => $temp
		);

		$this->load->view('view_all_data_table',$data);
	}

function view_all_2016(){
	$temp = "2016";
	$cek = array(
		" ",
		$this->m_data->view_data_matkul_2016("MPK-4001 - Pendidikan Agama Islam")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4002 - Pendidikan Agama Katolik")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4003 - Pendidikan Agama Protestan")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4004 - Pendidikan Agama Hindu")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4005 - Pendidikan Agama Budha ")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4008 - Bahasa Indonesia")->result(),
		$this->m_data->view_data_matkul_2016("COM60010 - Pemrograman Dasar")->result(),
		$this->m_data->view_data_matkul_2016("COM60013 - Pengantar Ilmu Komputer")->result(),
		$this->m_data->view_data_matkul_2016("COM50012 - Matematika Komputasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF60113 - Sistem Digital")->result(),
		$this->m_data->view_data_matkul_2016("UBU-4008 - Bahasa Inggris")->result(),
		$this->m_data->view_data_matkul_2016("COM60011 - Arsitektur & Organisasi Komputer")->result(),
		$this->m_data->view_data_matkul_2016("CID62120 - Pemrograman Lanjut")->result(),
		$this->m_data->view_data_matkul_2016("CID62122 - Interaksi Manusia & Komputer")->result(),
		$this->m_data->view_data_matkul_2016("CID62121 - Matematika Komputasi Lanjut")->result(),
		$this->m_data->view_data_matkul_2016("CID62125 - Statistika")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4007 - Pendidikan Pancasila")->result(),
		$this->m_data->view_data_matkul_2016("CIF61230 - Algoritma & Struktur Data")->result(),
		$this->m_data->view_data_matkul_2016("CID61132 - Metode Numerik")->result(),
		$this->m_data->view_data_matkul_2016("CID61133 - Sistem Operasi")->result(),
		$this->m_data->view_data_matkul_2016("CID61134 - Sistem Multimedia")->result(),
		$this->m_data->view_data_matkul_2016("CID61236 - Sistem Basis Data")->result(),
		$this->m_data->view_data_matkul_2016("CIF62240 - Desain & Analisis Algoritma")->result(),
		$this->m_data->view_data_matkul_2016("CIF62242 - Kecerdasan Buatan")->result(),
		$this->m_data->view_data_matkul_2016("CIF62245 - Analisis & Perancangan Sistem")->result(),
		$this->m_data->view_data_matkul_2016("CIF62246 - Pemrograman Web")->result(),
		$this->m_data->view_data_matkul_2016("CCE61153 - Jaringan Komputer")->result(),
		$this->m_data->view_data_matkul_2016("CIF61251 - Keamanan Informasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF61252 - Pengenalan Pola")->result(),
		$this->m_data->view_data_matkul_2016("CIF61255 - Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF61256 - Pemrograman Platform Khusus")->result(),
		$this->m_data->view_data_matkul_2016("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
		$this->m_data->view_data_matkul_2016("CIF61552 - Rekayasa Pengetahuan")->result(),
		$this->m_data->view_data_matkul_2016("CIF61450 - Pengolahan Citra Digital")->result(),
		$this->m_data->view_data_matkul_2016("CIF61451 - Text Mining")->result(),
		$this->m_data->view_data_matkul_2016("CIF61453 - Sistem Pakar")->result(),
		$this->m_data->view_data_matkul_2016("CIF61454 - Logika Fuzzy")->result(),
		$this->m_data->view_data_matkul_2016("CIF61455 - Sistem Pendukung Keputusan")->result(),
		$this->m_data->view_data_matkul_2016("CCE62361 - Administrasi Sistem Server")->result(),
		$this->m_data->view_data_matkul_2016("CCE62161 - Administrasi Jaringan")->result(),
		$this->m_data->view_data_matkul_2016("CIF61351 - Keamanan Jaringan")->result(),
		$this->m_data->view_data_matkul_2016("CIF61651 - Perancangan Game")->result(),
		$this->m_data->view_data_matkul_2016("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
		$this->m_data->view_data_matkul_2016("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2016("UBU-4005 - Kewirausahaan")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4006 - Kewarganegaraan")->result(),
		$this->m_data->view_data_matkul_2016("COM60061 - Metodologi Penelitian TI")->result(),
		$this->m_data->view_data_matkul_2016("CIF62564 - Administrasi Basis Data")->result(),
		$this->m_data->view_data_matkul_2016("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
		$this->m_data->view_data_matkul_2016("CIF62563 - Basis Data Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2016("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF62561 - Pengujian Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF62567 - Perancangan User Experience")->result(),
		$this->m_data->view_data_matkul_2016("CIF62565 - Pola-pola Perancangan")->result(),
		$this->m_data->view_data_matkul_2016("CIF62460 - Visi Komputer")->result(),
		$this->m_data->view_data_matkul_2016("CIF62461 - Data Mining")->result(),
		$this->m_data->view_data_matkul_2016("CIF62462 - Sistem Temu Kembali Informasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF62463 - Jaringan Syaraf Tiruan")->result(),
		$this->m_data->view_data_matkul_2016("CIF62466 - Pemrosesan Bahasa Alami")->result(),
		$this->m_data->view_data_matkul_2016("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
		$this->m_data->view_data_matkul_2016("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2016("CIF62362 - Jaringan Multimedia")->result(),
		$this->m_data->view_data_matkul_2016("CCE61371 - Arsitektur Jaringan Terkini")->result(),
		$this->m_data->view_data_matkul_2016("CIF62364 - Pemrograman Jaringan")->result(),
		$this->m_data->view_data_matkul_2016("CIF62365 - Sistem Forensik Digital")->result(),
		$this->m_data->view_data_matkul_2016("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF62661 - Pemrograman Game")->result(),
		$this->m_data->view_data_matkul_2016("CIF62663 - Pemrograman GPU")->result(),
		$this->m_data->view_data_matkul_2016("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
		$this->m_data->view_data_matkul_2016("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
		$this->m_data->view_data_matkul_2016("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2016("COM60062 - Etika Profesi TI")->result(),
		$this->m_data->view_data_matkul_2016("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF61573 - Rekayasa Embedded System")->result(),
		$this->m_data->view_data_matkul_2016("CIF61571 - Web Semantik")->result(),
		$this->m_data->view_data_matkul_2016("CIF61452 - Algoritma Evolusi")->result(),
		$this->m_data->view_data_matkul_2016("CIF61456 - Analisis Big Data")->result(),
		$this->m_data->view_data_matkul_2016("CIF61471 - Swarm Intelligence")->result(),
		$this->m_data->view_data_matkul_2016("CCE61360 - Jaringan Nirkabel")->result(),
		$this->m_data->view_data_matkul_2016("CIF61371 - Kriptografi")->result(),
		$this->m_data->view_data_matkul_2016("TIF61673 - Augmented & Virtual Reality")->result(),
		$this->m_data->view_data_matkul_2016("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
		$this->m_data->view_data_matkul_2016("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2016("CID60981 - Kapita Selekta")->result(),);
		
		$stat = array();
		for($i=1;$i<=87;$i++){
			if(empty($cek[$i])){
				$stat[$i] = "kosong";
			} else {
				$stat[$i] = "ada isi";
			}
		}
		
		$data = array(
			'stat' => $stat,
			'matkul' => $cek,
			'temp' => $temp
		);

		$this->load->view('view_all_data_table',$data);
	}

function export_all()
{
	$cek = array(
		" ",
		$this->m_data->view_data_matkul("MPK-4001 - Pendidikan Agama Islam")->result(),
		$this->m_data->view_data_matkul("MPK-4002 - Pendidikan Agama Katolik")->result(),
		$this->m_data->view_data_matkul("MPK-4003 - Pendidikan Agama Protestan")->result(),
		$this->m_data->view_data_matkul("MPK-4004 - Pendidikan Agama Hindu")->result(),
		$this->m_data->view_data_matkul("MPK-4005 - Pendidikan Agama Budha ")->result(),
		$this->m_data->view_data_matkul("MPK-4008 - Bahasa Indonesia")->result(),
		$this->m_data->view_data_matkul("COM60010 - Pemrograman Dasar")->result(),
		$this->m_data->view_data_matkul("COM60013 - Pengantar Ilmu Komputer")->result(),
		$this->m_data->view_data_matkul("COM50012 - Matematika Komputasi")->result(),
		$this->m_data->view_data_matkul("CIF60113 - Sistem Digital")->result(),
		$this->m_data->view_data_matkul("UBU-4008 - Bahasa Inggris")->result(),
		$this->m_data->view_data_matkul("COM60011 - Arsitektur & Organisasi Komputer")->result(),
		$this->m_data->view_data_matkul("CID62120 - Pemrograman Lanjut")->result(),
		$this->m_data->view_data_matkul("CID62122 - Interaksi Manusia & Komputer")->result(),
		$this->m_data->view_data_matkul("CID62121 - Matematika Komputasi Lanjut")->result(),
		$this->m_data->view_data_matkul("CID62125 - Statistika")->result(),
		$this->m_data->view_data_matkul("MPK-4007 - Pendidikan Pancasila")->result(),
		$this->m_data->view_data_matkul("CIF61230 - Algoritma & Struktur Data")->result(),
		$this->m_data->view_data_matkul("CID61132 - Metode Numerik")->result(),
		$this->m_data->view_data_matkul("CID61133 - Sistem Operasi")->result(),
		$this->m_data->view_data_matkul("CID61134 - Sistem Multimedia")->result(),
		$this->m_data->view_data_matkul("CID61236 - Sistem Basis Data")->result(),
		$this->m_data->view_data_matkul("CIF62240 - Desain & Analisis Algoritma")->result(),
		$this->m_data->view_data_matkul("CIF62242 - Kecerdasan Buatan")->result(),
		$this->m_data->view_data_matkul("CIF62245 - Analisis & Perancangan Sistem")->result(),
		$this->m_data->view_data_matkul("CIF62246 - Pemrograman Web")->result(),
		$this->m_data->view_data_matkul("CCE61153 - Jaringan Komputer")->result(),
		$this->m_data->view_data_matkul("CIF61251 - Keamanan Informasi")->result(),
		$this->m_data->view_data_matkul("CIF61252 - Pengenalan Pola")->result(),
		$this->m_data->view_data_matkul("CIF61255 - Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul("CIF61256 - Pemrograman Platform Khusus")->result(),
		$this->m_data->view_data_matkul("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
		$this->m_data->view_data_matkul("CIF61552 - Rekayasa Pengetahuan")->result(),
		$this->m_data->view_data_matkul("CIF61450 - Pengolahan Citra Digital")->result(),
		$this->m_data->view_data_matkul("CIF61451 - Text Mining")->result(),
		$this->m_data->view_data_matkul("CIF61453 - Sistem Pakar")->result(),
		$this->m_data->view_data_matkul("CIF61454 - Logika Fuzzy")->result(),
		$this->m_data->view_data_matkul("CIF61455 - Sistem Pendukung Keputusan")->result(),
		$this->m_data->view_data_matkul("CCE62361 - Administrasi Sistem Server")->result(),
		$this->m_data->view_data_matkul("CCE62161 - Administrasi Jaringan")->result(),
		$this->m_data->view_data_matkul("CIF61351 - Keamanan Jaringan")->result(),
		$this->m_data->view_data_matkul("CIF61651 - Perancangan Game")->result(),
		$this->m_data->view_data_matkul("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
		$this->m_data->view_data_matkul("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul("UBU-4005 - Kewirausahaan")->result(),
		$this->m_data->view_data_matkul("MPK-4006 - Kewarganegaraan")->result(),
		$this->m_data->view_data_matkul("COM60061 - Metodologi Penelitian TI")->result(),
		$this->m_data->view_data_matkul("CIF62564 - Administrasi Basis Data")->result(),
		$this->m_data->view_data_matkul("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
		$this->m_data->view_data_matkul("CIF62563 - Basis Data Terdistribusi")->result(),
		$this->m_data->view_data_matkul("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul("CIF62561 - Pengujian Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul("CIF62567 - Perancangan User Experience")->result(),
		$this->m_data->view_data_matkul("CIF62565 - Pola-pola Perancangan")->result(),
		$this->m_data->view_data_matkul("CIF62460 - Visi Komputer")->result(),
		$this->m_data->view_data_matkul("CIF62461 - Data Mining")->result(),
		$this->m_data->view_data_matkul("CIF62462 - Sistem Temu Kembali Informasi")->result(),
		$this->m_data->view_data_matkul("CIF62463 - Jaringan Syaraf Tiruan")->result(),
		$this->m_data->view_data_matkul("CIF62466 - Pemrosesan Bahasa Alami")->result(),
		$this->m_data->view_data_matkul("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
		$this->m_data->view_data_matkul("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
		$this->m_data->view_data_matkul("CIF62362 - Jaringan Multimedia")->result(),
		$this->m_data->view_data_matkul("CCE61371 - Arsitektur Jaringan Terkini")->result(),
		$this->m_data->view_data_matkul("CIF62364 - Pemrograman Jaringan")->result(),
		$this->m_data->view_data_matkul("CIF62365 - Sistem Forensik Digital")->result(),
		$this->m_data->view_data_matkul("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
		$this->m_data->view_data_matkul("CIF62661 - Pemrograman Game")->result(),
		$this->m_data->view_data_matkul("CIF62663 - Pemrograman GPU")->result(),
		$this->m_data->view_data_matkul("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
		$this->m_data->view_data_matkul("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
		$this->m_data->view_data_matkul("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul("COM60062 - Etika Profesi TI")->result(),
		$this->m_data->view_data_matkul("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul("CIF61573 - Rekayasa Embedded System")->result(),
		$this->m_data->view_data_matkul("CIF61571 - Web Semantik")->result(),
		$this->m_data->view_data_matkul("CIF61452 - Algoritma Evolusi")->result(),
		$this->m_data->view_data_matkul("CIF61456 - Analisis Big Data")->result(),
		$this->m_data->view_data_matkul("CIF61471 - Swarm Intelligence")->result(),
		$this->m_data->view_data_matkul("CCE61360 - Jaringan Nirkabel")->result(),
		$this->m_data->view_data_matkul("CIF61371 - Kriptografi")->result(),
		$this->m_data->view_data_matkul("TIF61673 - Augmented & Virtual Reality")->result(),
		$this->m_data->view_data_matkul("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
		$this->m_data->view_data_matkul("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul("CID60981 - Kapita Selekta")->result(),

	);
	
	$stat = array();
	for($i=1;$i<=87;$i++){
		if(empty($cek[$i])){
			$stat[$i] = "kosong";
		} else {
			$stat[$i] = "ada isi";
		}
	}
	
	$data = array(
		'stat' => $stat,
		'matkul' => $cek
	);

	$this->load->view('view_all_data_table_export',$data);
}

function export_all_2011_2013()
{
	$temp1 = "angkatan_2011-2013";
	$cek = array(
		" ",
		$this->m_data->view_data_matkul_2011_2013("MPK-4001 - Pendidikan Agama Islam")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4002 - Pendidikan Agama Katolik")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4003 - Pendidikan Agama Protestan")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4004 - Pendidikan Agama Hindu")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4005 - Pendidikan Agama Budha ")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4008 - Bahasa Indonesia")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60010 - Pemrograman Dasar")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60013 - Pengantar Ilmu Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM50012 - Matematika Komputasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF60113 - Sistem Digital")->result(),
		$this->m_data->view_data_matkul_2011_2013("UBU-4008 - Bahasa Inggris")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60011 - Arsitektur & Organisasi Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID62120 - Pemrograman Lanjut")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID62122 - Interaksi Manusia & Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID62121 - Matematika Komputasi Lanjut")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID62125 - Statistika")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4007 - Pendidikan Pancasila")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61230 - Algoritma & Struktur Data")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID61132 - Metode Numerik")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID61133 - Sistem Operasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID61134 - Sistem Multimedia")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID61236 - Sistem Basis Data")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62240 - Desain & Analisis Algoritma")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62242 - Kecerdasan Buatan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62245 - Analisis & Perancangan Sistem")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62246 - Pemrograman Web")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE61153 - Jaringan Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61251 - Keamanan Informasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61252 - Pengenalan Pola")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61255 - Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61256 - Pemrograman Platform Khusus")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61552 - Rekayasa Pengetahuan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61450 - Pengolahan Citra Digital")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61451 - Text Mining")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61453 - Sistem Pakar")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61454 - Logika Fuzzy")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61455 - Sistem Pendukung Keputusan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE62361 - Administrasi Sistem Server")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE62161 - Administrasi Jaringan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61351 - Keamanan Jaringan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61651 - Perancangan Game")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2011_2013("UBU-4005 - Kewirausahaan")->result(),
		$this->m_data->view_data_matkul_2011_2013("MPK-4006 - Kewarganegaraan")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60061 - Metodologi Penelitian TI")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62564 - Administrasi Basis Data")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62563 - Basis Data Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62561 - Pengujian Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62567 - Perancangan User Experience")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62565 - Pola-pola Perancangan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62460 - Visi Komputer")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62461 - Data Mining")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62462 - Sistem Temu Kembali Informasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62463 - Jaringan Syaraf Tiruan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62466 - Pemrosesan Bahasa Alami")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62362 - Jaringan Multimedia")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE61371 - Arsitektur Jaringan Terkini")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62364 - Pemrograman Jaringan")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62365 - Sistem Forensik Digital")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62661 - Pemrograman Game")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62663 - Pemrograman GPU")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2011_2013("COM60062 - Etika Profesi TI")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61573 - Rekayasa Embedded System")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61571 - Web Semantik")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61452 - Algoritma Evolusi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61456 - Analisis Big Data")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61471 - Swarm Intelligence")->result(),
		$this->m_data->view_data_matkul_2011_2013("CCE61360 - Jaringan Nirkabel")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF61371 - Kriptografi")->result(),
		$this->m_data->view_data_matkul_2011_2013("TIF61673 - Augmented & Virtual Reality")->result(),
		$this->m_data->view_data_matkul_2011_2013("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2011_2013("CID60981 - Kapita Selekta")->result(),

	);
	
	$stat = array();
	for($i=1;$i<=87;$i++){
		if(empty($cek[$i])){
			$stat[$i] = "kosong";
		} else {
			$stat[$i] = "ada isi";
		}
	}
	
	$data = array(
		'stat' => $stat,
		'matkul' => $cek,
		'temp' => $temp1
	);

	$this->load->view('view_all_data_table_export',$data);
}

function export_all_2014()
{
	$temp1 = "angkatan_2014";
	$cek = array(
		" ",
		$this->m_data->view_data_matkul_2014("MPK-4001 - Pendidikan Agama Islam")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4002 - Pendidikan Agama Katolik")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4003 - Pendidikan Agama Protestan")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4004 - Pendidikan Agama Hindu")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4005 - Pendidikan Agama Budha ")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4008 - Bahasa Indonesia")->result(),
		$this->m_data->view_data_matkul_2014("COM60010 - Pemrograman Dasar")->result(),
		$this->m_data->view_data_matkul_2014("COM60013 - Pengantar Ilmu Komputer")->result(),
		$this->m_data->view_data_matkul_2014("COM50012 - Matematika Komputasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF60113 - Sistem Digital")->result(),
		$this->m_data->view_data_matkul_2014("UBU-4008 - Bahasa Inggris")->result(),
		$this->m_data->view_data_matkul_2014("COM60011 - Arsitektur & Organisasi Komputer")->result(),
		$this->m_data->view_data_matkul_2014("CID62120 - Pemrograman Lanjut")->result(),
		$this->m_data->view_data_matkul_2014("CID62122 - Interaksi Manusia & Komputer")->result(),
		$this->m_data->view_data_matkul_2014("CID62121 - Matematika Komputasi Lanjut")->result(),
		$this->m_data->view_data_matkul_2014("CID62125 - Statistika")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4007 - Pendidikan Pancasila")->result(),
		$this->m_data->view_data_matkul_2014("CIF61230 - Algoritma & Struktur Data")->result(),
		$this->m_data->view_data_matkul_2014("CID61132 - Metode Numerik")->result(),
		$this->m_data->view_data_matkul_2014("CID61133 - Sistem Operasi")->result(),
		$this->m_data->view_data_matkul_2014("CID61134 - Sistem Multimedia")->result(),
		$this->m_data->view_data_matkul_2014("CID61236 - Sistem Basis Data")->result(),
		$this->m_data->view_data_matkul_2014("CIF62240 - Desain & Analisis Algoritma")->result(),
		$this->m_data->view_data_matkul_2014("CIF62242 - Kecerdasan Buatan")->result(),
		$this->m_data->view_data_matkul_2014("CIF62245 - Analisis & Perancangan Sistem")->result(),
		$this->m_data->view_data_matkul_2014("CIF62246 - Pemrograman Web")->result(),
		$this->m_data->view_data_matkul_2014("CCE61153 - Jaringan Komputer")->result(),
		$this->m_data->view_data_matkul_2014("CIF61251 - Keamanan Informasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF61252 - Pengenalan Pola")->result(),
		$this->m_data->view_data_matkul_2014("CIF61255 - Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF61256 - Pemrograman Platform Khusus")->result(),
		$this->m_data->view_data_matkul_2014("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
		$this->m_data->view_data_matkul_2014("CIF61552 - Rekayasa Pengetahuan")->result(),
		$this->m_data->view_data_matkul_2014("CIF61450 - Pengolahan Citra Digital")->result(),
		$this->m_data->view_data_matkul_2014("CIF61451 - Text Mining")->result(),
		$this->m_data->view_data_matkul_2014("CIF61453 - Sistem Pakar")->result(),
		$this->m_data->view_data_matkul_2014("CIF61454 - Logika Fuzzy")->result(),
		$this->m_data->view_data_matkul_2014("CIF61455 - Sistem Pendukung Keputusan")->result(),
		$this->m_data->view_data_matkul_2014("CCE62361 - Administrasi Sistem Server")->result(),
		$this->m_data->view_data_matkul_2014("CCE62161 - Administrasi Jaringan")->result(),
		$this->m_data->view_data_matkul_2014("CIF61351 - Keamanan Jaringan")->result(),
		$this->m_data->view_data_matkul_2014("CIF61651 - Perancangan Game")->result(),
		$this->m_data->view_data_matkul_2014("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
		$this->m_data->view_data_matkul_2014("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2014("UBU-4005 - Kewirausahaan")->result(),
		$this->m_data->view_data_matkul_2014("MPK-4006 - Kewarganegaraan")->result(),
		$this->m_data->view_data_matkul_2014("COM60061 - Metodologi Penelitian TI")->result(),
		$this->m_data->view_data_matkul_2014("CIF62564 - Administrasi Basis Data")->result(),
		$this->m_data->view_data_matkul_2014("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
		$this->m_data->view_data_matkul_2014("CIF62563 - Basis Data Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2014("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF62561 - Pengujian Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF62567 - Perancangan User Experience")->result(),
		$this->m_data->view_data_matkul_2014("CIF62565 - Pola-pola Perancangan")->result(),
		$this->m_data->view_data_matkul_2014("CIF62460 - Visi Komputer")->result(),
		$this->m_data->view_data_matkul_2014("CIF62461 - Data Mining")->result(),
		$this->m_data->view_data_matkul_2014("CIF62462 - Sistem Temu Kembali Informasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF62463 - Jaringan Syaraf Tiruan")->result(),
		$this->m_data->view_data_matkul_2014("CIF62466 - Pemrosesan Bahasa Alami")->result(),
		$this->m_data->view_data_matkul_2014("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
		$this->m_data->view_data_matkul_2014("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2014("CIF62362 - Jaringan Multimedia")->result(),
		$this->m_data->view_data_matkul_2014("CCE61371 - Arsitektur Jaringan Terkini")->result(),
		$this->m_data->view_data_matkul_2014("CIF62364 - Pemrograman Jaringan")->result(),
		$this->m_data->view_data_matkul_2014("CIF62365 - Sistem Forensik Digital")->result(),
		$this->m_data->view_data_matkul_2014("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF62661 - Pemrograman Game")->result(),
		$this->m_data->view_data_matkul_2014("CIF62663 - Pemrograman GPU")->result(),
		$this->m_data->view_data_matkul_2014("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
		$this->m_data->view_data_matkul_2014("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
		$this->m_data->view_data_matkul_2014("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2014("COM60062 - Etika Profesi TI")->result(),
		$this->m_data->view_data_matkul_2014("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2014("CIF61573 - Rekayasa Embedded System")->result(),
		$this->m_data->view_data_matkul_2014("CIF61571 - Web Semantik")->result(),
		$this->m_data->view_data_matkul_2014("CIF61452 - Algoritma Evolusi")->result(),
		$this->m_data->view_data_matkul_2014("CIF61456 - Analisis Big Data")->result(),
		$this->m_data->view_data_matkul_2014("CIF61471 - Swarm Intelligence")->result(),
		$this->m_data->view_data_matkul_2014("CCE61360 - Jaringan Nirkabel")->result(),
		$this->m_data->view_data_matkul_2014("CIF61371 - Kriptografi")->result(),
		$this->m_data->view_data_matkul_2014("TIF61673 - Augmented & Virtual Reality")->result(),
		$this->m_data->view_data_matkul_2014("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
		$this->m_data->view_data_matkul_2014("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2014("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2014("CID60981 - Kapita Selekta")->result(),

	);
$stat = array();
for($i=1;$i<=87;$i++){
	if(empty($cek[$i])){
		$stat[$i] = "kosong";
	} else {
		$stat[$i] = "ada isi";
	}
}
$data = array(
	'stat' => $stat,
	'matkul' => $cek,
	'temp' => $temp1
);
// $data = array(
// 	'matkul1' => $cek[1],'stat1' => $stat[1],'matkul2' => $cek[2],'stat2' => $stat[2],
// 	'matkul3' => $cek[3],'stat3' => $stat[3],'matkul4' => $cek[4],'stat4' => $stat[4],
// 	'matkul5' => $cek[5],'stat5' => $stat[5],'matkul6' => $cek[6],'stat6' => $stat[6],
// 	'matkul7' => $cek[7],'stat7' => $stat[7],'matkul8' => $cek[8],'stat8' => $stat[8],
// 	'matkul9' => $cek[9],'stat9' => $stat[9],'matkul10' => $cek[10],'stat10' => $stat[10],
// 	'matkul11' => $cek[11],'stat11' => $stat[11],'matkul12' => $cek[12],'stat12' => $stat[12],
// 	'matkul13' => $cek[13],'stat13' => $stat[13],'matkul14' => $cek[14],'stat14' => $stat[14],
// 	'matkul15' => $cek[15],'stat15' => $stat[15],'matkul16' => $cek[16],'stat16' => $stat[16],
// 	'matkul17' => $cek[17],'stat17' => $stat[17],'matkul18' => $cek[18],'stat18' => $stat[18],
// 	'matkul19' => $cek[19],'stat19' => $stat[19],'matkul20' => $cek[20],'stat20' => $stat[20],
// 	'matkul21' => $cek[21],'stat21' => $stat[21],'matkul22' => $cek[22],'stat22' => $stat[22],
// 	'matkul23' => $cek[23],'stat23' => $stat[23],'matkul24' => $cek[24],'stat24' => $stat[24],
// 	'matkul25' => $cek[25],'stat25' => $stat[25],'matkul26' => $cek[26],'stat26' => $stat[26],
// 	'matkul27' => $cek[27],'stat27' => $stat[27],'matkul28' => $cek[28],'stat28' => $stat[28],
// 	'matkul29' => $cek[29],'stat29' => $stat[29],'matkul30' => $cek[30],'stat30' => $stat[30],
// 	'matkul31' => $cek[31],'stat31' => $stat[31],'matkul32' => $cek[32],'stat32' => $stat[32],
// 	'matkul33' => $cek[33],'stat33' => $stat[33],'matkul34' => $cek[34],'stat34' => $stat[34],
// 	'matkul35' => $cek[35],'stat35' => $stat[35],'matkul36' => $cek[36],'stat36' => $stat[36],
// 	'matkul37' => $cek[37],'stat37' => $stat[37],'matkul38' => $cek[38],'stat38' => $stat[38],
// 	'matkul39' => $cek[39],'stat39' => $stat[39],'matkul40' => $cek[40],'stat40' => $stat[40],
// 	'matkul41' => $cek[41],'stat41' => $stat[41],'matkul42' => $cek[42],'stat42' => $stat[42],
// 	'matkul43' => $cek[43],'stat43' => $stat[43],'matkul44' => $cek[44],'stat44' => $stat[44],
// 	'matkul45' => $cek[45],'stat45' => $stat[45],'matkul46' => $cek[46],'stat46' => $stat[46],
// 	'matkul47' => $cek[47],'stat47' => $stat[47],'matkul48' => $cek[48],'stat48' => $stat[48],
// 	'matkul49' => $cek[49],'stat49' => $stat[49],'matkul50' => $cek[50],'stat50' => $stat[50],
// 	'matkul51' => $cek[51],'stat51' => $stat[51],'matkul52' => $cek[52],'stat52' => $stat[52],
// 	'matkul53' => $cek[53],'stat53' => $stat[53],'matkul54' => $cek[54],'stat54' => $stat[54],
// 	'matkul55' => $cek[55],'stat55' => $stat[55],'matkul56' => $cek[56],'stat56' => $stat[56],
// 	'matkul57' => $cek[57],'stat57' => $stat[57],'matkul58' => $cek[58],'stat58' => $stat[58],
// 	'matkul59' => $cek[59],'stat59' => $stat[59],'matkul60' => $cek[60],'stat60' => $stat[60],
// 	'matkul61' => $cek[61],'stat61' => $stat[61],'matkul62' => $cek[62],'stat62' => $stat[62],
// 	'matkul63' => $cek[63],'stat63' => $stat[63],'matkul64' => $cek[64],'stat64' => $stat[64],
// 	'matkul65' => $cek[65],'stat65' => $stat[65],'matkul66' => $cek[66],'stat66' => $stat[66],
// 	'matkul67' => $cek[67],'stat67' => $stat[67],'matkul68' => $cek[68],'stat68' => $stat[68],
// 	'matkul69' => $cek[69],'stat69' => $stat[69],'matkul70' => $cek[70],'stat70' => $stat[70],
// 	'matkul71' => $cek[71],'stat71' => $stat[71],'matkul72' => $cek[72],'stat72' => $stat[72],
// 	'matkul73' => $cek[73],'stat73' => $stat[73],'matkul74' => $cek[74],'stat74' => $stat[74],
// 	'matkul75' => $cek[75],'stat75' => $stat[75],'matkul76' => $cek[76],'stat76' => $stat[76],
// 	'matkul77' => $cek[77],'stat77' => $stat[77],'matkul78' => $cek[78],'stat78' => $stat[78],
// 	'matkul79' => $cek[79],'stat79' => $stat[79],'matkul80' => $cek[80],'stat80' => $stat[80],
// 	'matkul81' => $cek[81],'stat81' => $stat[81],'matkul82' => $cek[82],'stat82' => $stat[82],
// 	'matkul83' => $cek[83],'stat83' => $stat[83],'matkul84' => $cek[84],'stat84' => $stat[84],
// 	'matkul85' => $cek[85],'stat85' => $stat[85],'matkul86' => $cek[86],'stat86' => $stat[86],
// 	'matkul87' => $cek[87],'stat87' => $stat[87], 'temp' =>$temp1
// );
$this->load->view('view_all_data_table_export',$data);
}

function export_all_2015()
{
	$temp1 = "angkatan_2015";
	$cek = array(
		" ",
		$this->m_data->view_data_matkul_2015("MPK-4001 - Pendidikan Agama Islam")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4002 - Pendidikan Agama Katolik")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4003 - Pendidikan Agama Protestan")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4004 - Pendidikan Agama Hindu")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4005 - Pendidikan Agama Budha ")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4008 - Bahasa Indonesia")->result(),
		$this->m_data->view_data_matkul_2015("COM60010 - Pemrograman Dasar")->result(),
		$this->m_data->view_data_matkul_2015("COM60013 - Pengantar Ilmu Komputer")->result(),
		$this->m_data->view_data_matkul_2015("COM50012 - Matematika Komputasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF60113 - Sistem Digital")->result(),
		$this->m_data->view_data_matkul_2015("UBU-4008 - Bahasa Inggris")->result(),
		$this->m_data->view_data_matkul_2015("COM60011 - Arsitektur & Organisasi Komputer")->result(),
		$this->m_data->view_data_matkul_2015("CID62120 - Pemrograman Lanjut")->result(),
		$this->m_data->view_data_matkul_2015("CID62122 - Interaksi Manusia & Komputer")->result(),
		$this->m_data->view_data_matkul_2015("CID62121 - Matematika Komputasi Lanjut")->result(),
		$this->m_data->view_data_matkul_2015("CID62125 - Statistika")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4007 - Pendidikan Pancasila")->result(),
		$this->m_data->view_data_matkul_2015("CIF61230 - Algoritma & Struktur Data")->result(),
		$this->m_data->view_data_matkul_2015("CID61132 - Metode Numerik")->result(),
		$this->m_data->view_data_matkul_2015("CID61133 - Sistem Operasi")->result(),
		$this->m_data->view_data_matkul_2015("CID61134 - Sistem Multimedia")->result(),
		$this->m_data->view_data_matkul_2015("CID61236 - Sistem Basis Data")->result(),
		$this->m_data->view_data_matkul_2015("CIF62240 - Desain & Analisis Algoritma")->result(),
		$this->m_data->view_data_matkul_2015("CIF62242 - Kecerdasan Buatan")->result(),
		$this->m_data->view_data_matkul_2015("CIF62245 - Analisis & Perancangan Sistem")->result(),
		$this->m_data->view_data_matkul_2015("CIF62246 - Pemrograman Web")->result(),
		$this->m_data->view_data_matkul_2015("CCE61153 - Jaringan Komputer")->result(),
		$this->m_data->view_data_matkul_2015("CIF61251 - Keamanan Informasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF61252 - Pengenalan Pola")->result(),
		$this->m_data->view_data_matkul_2015("CIF61255 - Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF61256 - Pemrograman Platform Khusus")->result(),
		$this->m_data->view_data_matkul_2015("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
		$this->m_data->view_data_matkul_2015("CIF61552 - Rekayasa Pengetahuan")->result(),
		$this->m_data->view_data_matkul_2015("CIF61450 - Pengolahan Citra Digital")->result(),
		$this->m_data->view_data_matkul_2015("CIF61451 - Text Mining")->result(),
		$this->m_data->view_data_matkul_2015("CIF61453 - Sistem Pakar")->result(),
		$this->m_data->view_data_matkul_2015("CIF61454 - Logika Fuzzy")->result(),
		$this->m_data->view_data_matkul_2015("CIF61455 - Sistem Pendukung Keputusan")->result(),
		$this->m_data->view_data_matkul_2015("CCE62361 - Administrasi Sistem Server")->result(),
		$this->m_data->view_data_matkul_2015("CCE62161 - Administrasi Jaringan")->result(),
		$this->m_data->view_data_matkul_2015("CIF61351 - Keamanan Jaringan")->result(),
		$this->m_data->view_data_matkul_2015("CIF61651 - Perancangan Game")->result(),
		$this->m_data->view_data_matkul_2015("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
		$this->m_data->view_data_matkul_2015("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2015("UBU-4005 - Kewirausahaan")->result(),
		$this->m_data->view_data_matkul_2015("MPK-4006 - Kewarganegaraan")->result(),
		$this->m_data->view_data_matkul_2015("COM60061 - Metodologi Penelitian TI")->result(),
		$this->m_data->view_data_matkul_2015("CIF62564 - Administrasi Basis Data")->result(),
		$this->m_data->view_data_matkul_2015("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
		$this->m_data->view_data_matkul_2015("CIF62563 - Basis Data Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2015("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF62561 - Pengujian Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF62567 - Perancangan User Experience")->result(),
		$this->m_data->view_data_matkul_2015("CIF62565 - Pola-pola Perancangan")->result(),
		$this->m_data->view_data_matkul_2015("CIF62460 - Visi Komputer")->result(),
		$this->m_data->view_data_matkul_2015("CIF62461 - Data Mining")->result(),
		$this->m_data->view_data_matkul_2015("CIF62462 - Sistem Temu Kembali Informasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF62463 - Jaringan Syaraf Tiruan")->result(),
		$this->m_data->view_data_matkul_2015("CIF62466 - Pemrosesan Bahasa Alami")->result(),
		$this->m_data->view_data_matkul_2015("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
		$this->m_data->view_data_matkul_2015("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2015("CIF62362 - Jaringan Multimedia")->result(),
		$this->m_data->view_data_matkul_2015("CCE61371 - Arsitektur Jaringan Terkini")->result(),
		$this->m_data->view_data_matkul_2015("CIF62364 - Pemrograman Jaringan")->result(),
		$this->m_data->view_data_matkul_2015("CIF62365 - Sistem Forensik Digital")->result(),
		$this->m_data->view_data_matkul_2015("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF62661 - Pemrograman Game")->result(),
		$this->m_data->view_data_matkul_2015("CIF62663 - Pemrograman GPU")->result(),
		$this->m_data->view_data_matkul_2015("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
		$this->m_data->view_data_matkul_2015("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
		$this->m_data->view_data_matkul_2015("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2015("COM60062 - Etika Profesi TI")->result(),
		$this->m_data->view_data_matkul_2015("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2015("CIF61573 - Rekayasa Embedded System")->result(),
		$this->m_data->view_data_matkul_2015("CIF61571 - Web Semantik")->result(),
		$this->m_data->view_data_matkul_2015("CIF61452 - Algoritma Evolusi")->result(),
		$this->m_data->view_data_matkul_2015("CIF61456 - Analisis Big Data")->result(),
		$this->m_data->view_data_matkul_2015("CIF61471 - Swarm Intelligence")->result(),
		$this->m_data->view_data_matkul_2015("CCE61360 - Jaringan Nirkabel")->result(),
		$this->m_data->view_data_matkul_2015("CIF61371 - Kriptografi")->result(),
		$this->m_data->view_data_matkul_2015("TIF61673 - Augmented & Virtual Reality")->result(),
		$this->m_data->view_data_matkul_2015("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
		$this->m_data->view_data_matkul_2015("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2015("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2015("CID60981 - Kapita Selekta")->result(),

	);
$stat = array();
for($i=1;$i<=87;$i++){
	if(empty($cek[$i])){
		$stat[$i] = "kosong";
	} else {
		$stat[$i] = "ada isi";
	}
}
$data = array(
	'stat' => $stat,
	'matkul' => $cek,
	'temp' => $temp1
);
// $data = array(
// 	'matkul1' => $cek[1],'stat1' => $stat[1],'matkul2' => $cek[2],'stat2' => $stat[2],
// 	'matkul3' => $cek[3],'stat3' => $stat[3],'matkul4' => $cek[4],'stat4' => $stat[4],
// 	'matkul5' => $cek[5],'stat5' => $stat[5],'matkul6' => $cek[6],'stat6' => $stat[6],
// 	'matkul7' => $cek[7],'stat7' => $stat[7],'matkul8' => $cek[8],'stat8' => $stat[8],
// 	'matkul9' => $cek[9],'stat9' => $stat[9],'matkul10' => $cek[10],'stat10' => $stat[10],
// 	'matkul11' => $cek[11],'stat11' => $stat[11],'matkul12' => $cek[12],'stat12' => $stat[12],
// 	'matkul13' => $cek[13],'stat13' => $stat[13],'matkul14' => $cek[14],'stat14' => $stat[14],
// 	'matkul15' => $cek[15],'stat15' => $stat[15],'matkul16' => $cek[16],'stat16' => $stat[16],
// 	'matkul17' => $cek[17],'stat17' => $stat[17],'matkul18' => $cek[18],'stat18' => $stat[18],
// 	'matkul19' => $cek[19],'stat19' => $stat[19],'matkul20' => $cek[20],'stat20' => $stat[20],
// 	'matkul21' => $cek[21],'stat21' => $stat[21],'matkul22' => $cek[22],'stat22' => $stat[22],
// 	'matkul23' => $cek[23],'stat23' => $stat[23],'matkul24' => $cek[24],'stat24' => $stat[24],
// 	'matkul25' => $cek[25],'stat25' => $stat[25],'matkul26' => $cek[26],'stat26' => $stat[26],
// 	'matkul27' => $cek[27],'stat27' => $stat[27],'matkul28' => $cek[28],'stat28' => $stat[28],
// 	'matkul29' => $cek[29],'stat29' => $stat[29],'matkul30' => $cek[30],'stat30' => $stat[30],
// 	'matkul31' => $cek[31],'stat31' => $stat[31],'matkul32' => $cek[32],'stat32' => $stat[32],
// 	'matkul33' => $cek[33],'stat33' => $stat[33],'matkul34' => $cek[34],'stat34' => $stat[34],
// 	'matkul35' => $cek[35],'stat35' => $stat[35],'matkul36' => $cek[36],'stat36' => $stat[36],
// 	'matkul37' => $cek[37],'stat37' => $stat[37],'matkul38' => $cek[38],'stat38' => $stat[38],
// 	'matkul39' => $cek[39],'stat39' => $stat[39],'matkul40' => $cek[40],'stat40' => $stat[40],
// 	'matkul41' => $cek[41],'stat41' => $stat[41],'matkul42' => $cek[42],'stat42' => $stat[42],
// 	'matkul43' => $cek[43],'stat43' => $stat[43],'matkul44' => $cek[44],'stat44' => $stat[44],
// 	'matkul45' => $cek[45],'stat45' => $stat[45],'matkul46' => $cek[46],'stat46' => $stat[46],
// 	'matkul47' => $cek[47],'stat47' => $stat[47],'matkul48' => $cek[48],'stat48' => $stat[48],
// 	'matkul49' => $cek[49],'stat49' => $stat[49],'matkul50' => $cek[50],'stat50' => $stat[50],
// 	'matkul51' => $cek[51],'stat51' => $stat[51],'matkul52' => $cek[52],'stat52' => $stat[52],
// 	'matkul53' => $cek[53],'stat53' => $stat[53],'matkul54' => $cek[54],'stat54' => $stat[54],
// 	'matkul55' => $cek[55],'stat55' => $stat[55],'matkul56' => $cek[56],'stat56' => $stat[56],
// 	'matkul57' => $cek[57],'stat57' => $stat[57],'matkul58' => $cek[58],'stat58' => $stat[58],
// 	'matkul59' => $cek[59],'stat59' => $stat[59],'matkul60' => $cek[60],'stat60' => $stat[60],
// 	'matkul61' => $cek[61],'stat61' => $stat[61],'matkul62' => $cek[62],'stat62' => $stat[62],
// 	'matkul63' => $cek[63],'stat63' => $stat[63],'matkul64' => $cek[64],'stat64' => $stat[64],
// 	'matkul65' => $cek[65],'stat65' => $stat[65],'matkul66' => $cek[66],'stat66' => $stat[66],
// 	'matkul67' => $cek[67],'stat67' => $stat[67],'matkul68' => $cek[68],'stat68' => $stat[68],
// 	'matkul69' => $cek[69],'stat69' => $stat[69],'matkul70' => $cek[70],'stat70' => $stat[70],
// 	'matkul71' => $cek[71],'stat71' => $stat[71],'matkul72' => $cek[72],'stat72' => $stat[72],
// 	'matkul73' => $cek[73],'stat73' => $stat[73],'matkul74' => $cek[74],'stat74' => $stat[74],
// 	'matkul75' => $cek[75],'stat75' => $stat[75],'matkul76' => $cek[76],'stat76' => $stat[76],
// 	'matkul77' => $cek[77],'stat77' => $stat[77],'matkul78' => $cek[78],'stat78' => $stat[78],
// 	'matkul79' => $cek[79],'stat79' => $stat[79],'matkul80' => $cek[80],'stat80' => $stat[80],
// 	'matkul81' => $cek[81],'stat81' => $stat[81],'matkul82' => $cek[82],'stat82' => $stat[82],
// 	'matkul83' => $cek[83],'stat83' => $stat[83],'matkul84' => $cek[84],'stat84' => $stat[84],
// 	'matkul85' => $cek[85],'stat85' => $stat[85],'matkul86' => $cek[86],'stat86' => $stat[86],
// 	'matkul87' => $cek[87],'stat87' => $stat[87], 'temp' => $temp1
// );
$this->load->view('view_all_data_table_export',$data);
}

function export_all_2016()
{
	$temp1 = "angkatan_2016";
	$cek = array(
		" ",
		$this->m_data->view_data_matkul_2016("MPK-4001 - Pendidikan Agama Islam")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4002 - Pendidikan Agama Katolik")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4003 - Pendidikan Agama Protestan")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4004 - Pendidikan Agama Hindu")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4005 - Pendidikan Agama Budha ")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4008 - Bahasa Indonesia")->result(),
		$this->m_data->view_data_matkul_2016("COM60010 - Pemrograman Dasar")->result(),
		$this->m_data->view_data_matkul_2016("COM60013 - Pengantar Ilmu Komputer")->result(),
		$this->m_data->view_data_matkul_2016("COM50012 - Matematika Komputasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF60113 - Sistem Digital")->result(),
		$this->m_data->view_data_matkul_2016("UBU-4008 - Bahasa Inggris")->result(),
		$this->m_data->view_data_matkul_2016("COM60011 - Arsitektur & Organisasi Komputer")->result(),
		$this->m_data->view_data_matkul_2016("CID62120 - Pemrograman Lanjut")->result(),
		$this->m_data->view_data_matkul_2016("CID62122 - Interaksi Manusia & Komputer")->result(),
		$this->m_data->view_data_matkul_2016("CID62121 - Matematika Komputasi Lanjut")->result(),
		$this->m_data->view_data_matkul_2016("CID62125 - Statistika")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4007 - Pendidikan Pancasila")->result(),
		$this->m_data->view_data_matkul_2016("CIF61230 - Algoritma & Struktur Data")->result(),
		$this->m_data->view_data_matkul_2016("CID61132 - Metode Numerik")->result(),
		$this->m_data->view_data_matkul_2016("CID61133 - Sistem Operasi")->result(),
		$this->m_data->view_data_matkul_2016("CID61134 - Sistem Multimedia")->result(),
		$this->m_data->view_data_matkul_2016("CID61236 - Sistem Basis Data")->result(),
		$this->m_data->view_data_matkul_2016("CIF62240 - Desain & Analisis Algoritma")->result(),
		$this->m_data->view_data_matkul_2016("CIF62242 - Kecerdasan Buatan")->result(),
		$this->m_data->view_data_matkul_2016("CIF62245 - Analisis & Perancangan Sistem")->result(),
		$this->m_data->view_data_matkul_2016("CIF62246 - Pemrograman Web")->result(),
		$this->m_data->view_data_matkul_2016("CCE61153 - Jaringan Komputer")->result(),
		$this->m_data->view_data_matkul_2016("CIF61251 - Keamanan Informasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF61252 - Pengenalan Pola")->result(),
		$this->m_data->view_data_matkul_2016("CIF61255 - Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF61256 - Pemrograman Platform Khusus")->result(),
		$this->m_data->view_data_matkul_2016("CIF61551 - Rekayasa & Manajemen Kebutuhan")->result(),
		$this->m_data->view_data_matkul_2016("CIF61552 - Rekayasa Pengetahuan")->result(),
		$this->m_data->view_data_matkul_2016("CIF61450 - Pengolahan Citra Digital")->result(),
		$this->m_data->view_data_matkul_2016("CIF61451 - Text Mining")->result(),
		$this->m_data->view_data_matkul_2016("CIF61453 - Sistem Pakar")->result(),
		$this->m_data->view_data_matkul_2016("CIF61454 - Logika Fuzzy")->result(),
		$this->m_data->view_data_matkul_2016("CIF61455 - Sistem Pendukung Keputusan")->result(),
		$this->m_data->view_data_matkul_2016("CCE62361 - Administrasi Sistem Server")->result(),
		$this->m_data->view_data_matkul_2016("CCE62161 - Administrasi Jaringan")->result(),
		$this->m_data->view_data_matkul_2016("CIF61351 - Keamanan Jaringan")->result(),
		$this->m_data->view_data_matkul_2016("CIF61651 - Perancangan Game")->result(),
		$this->m_data->view_data_matkul_2016("CIF61652 - Pembuatan Konten 2D dan 3D")->result(),
		$this->m_data->view_data_matkul_2016("CIF61654 - Pemrograman Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2016("UBU-4005 - Kewirausahaan")->result(),
		$this->m_data->view_data_matkul_2016("MPK-4006 - Kewarganegaraan")->result(),
		$this->m_data->view_data_matkul_2016("COM60061 - Metodologi Penelitian TI")->result(),
		$this->m_data->view_data_matkul_2016("CIF62564 - Administrasi Basis Data")->result(),
		$this->m_data->view_data_matkul_2016("CIF62568 - Arsitektur Aplikasi Enterprise")->result(),
		$this->m_data->view_data_matkul_2016("CIF62563 - Basis Data Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2016("CIF62562 - Kualitas dan Kehandalan Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF62569 - Manajemen Proyek Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF62561 - Pengujian Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF62567 - Perancangan User Experience")->result(),
		$this->m_data->view_data_matkul_2016("CIF62565 - Pola-pola Perancangan")->result(),
		$this->m_data->view_data_matkul_2016("CIF62460 - Visi Komputer")->result(),
		$this->m_data->view_data_matkul_2016("CIF62461 - Data Mining")->result(),
		$this->m_data->view_data_matkul_2016("CIF62462 - Sistem Temu Kembali Informasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF62463 - Jaringan Syaraf Tiruan")->result(),
		$this->m_data->view_data_matkul_2016("CIF62466 - Pemrosesan Bahasa Alami")->result(),
		$this->m_data->view_data_matkul_2016("CIF62363 - Perancangan dan Analisa Jaringan")->result(),
		$this->m_data->view_data_matkul_2016("CCE61372 - Sistem Komputasi Terdistribusi")->result(),
		$this->m_data->view_data_matkul_2016("CIF62362 - Jaringan Multimedia")->result(),
		$this->m_data->view_data_matkul_2016("CCE61371 - Arsitektur Jaringan Terkini")->result(),
		$this->m_data->view_data_matkul_2016("CIF62364 - Pemrograman Jaringan")->result(),
		$this->m_data->view_data_matkul_2016("CIF62365 - Sistem Forensik Digital")->result(),
		$this->m_data->view_data_matkul_2016("CIF61653 - Grafika Komputer dan Visualisasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF62661 - Pemrograman Game")->result(),
		$this->m_data->view_data_matkul_2016("CIF62663 - Pemrograman GPU")->result(),
		$this->m_data->view_data_matkul_2016("CIF62662 - Kecerdasan Buatan dalam Game")->result(),
		$this->m_data->view_data_matkul_2016("CIF62664 - Pemrograman Aplikasi Perangkat Bergerak Lanjut")->result(),
		$this->m_data->view_data_matkul_2016("CIF62665 - Rekayasa Aplikasi Perangkat Bergerak")->result(),
		$this->m_data->view_data_matkul_2016("COM60062 - Etika Profesi TI")->result(),
		$this->m_data->view_data_matkul_2016("CIF61574 - Manajemen Konfigurasi Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF61572 - Metode Formal dalam Rekayasa Perangkat Lunak")->result(),
		$this->m_data->view_data_matkul_2016("CIF61573 - Rekayasa Embedded System")->result(),
		$this->m_data->view_data_matkul_2016("CIF61571 - Web Semantik")->result(),
		$this->m_data->view_data_matkul_2016("CIF61452 - Algoritma Evolusi")->result(),
		$this->m_data->view_data_matkul_2016("CIF61456 - Analisis Big Data")->result(),
		$this->m_data->view_data_matkul_2016("CIF61471 - Swarm Intelligence")->result(),
		$this->m_data->view_data_matkul_2016("CCE61360 - Jaringan Nirkabel")->result(),
		$this->m_data->view_data_matkul_2016("CIF61371 - Kriptografi")->result(),
		$this->m_data->view_data_matkul_2016("TIF61673 - Augmented & Virtual Reality")->result(),
		$this->m_data->view_data_matkul_2016("TIF61675 - Desain Kreatif Aplikasi & Game")->result(),
		$this->m_data->view_data_matkul_2016("CIF60973 - Kewirausahaan Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2016("CIF60974 - Manajemen Industri Teknologi Informasi")->result(),
		$this->m_data->view_data_matkul_2016("CID60981 - Kapita Selekta")->result(),

	);
$stat = array();
for($i=1;$i<=87;$i++){
	if(empty($cek[$i])){
		$stat[$i] = "kosong";
	} else {
		$stat[$i] = "ada isi";
	}
}
$data = array(
	'stat' => $stat,
	'matkul' => $cek,

	'temp' => $temp1
);
// $data = array(
// 	'matkul1' => $cek[1],'stat1' => $stat[1],'matkul2' => $cek[2],'stat2' => $stat[2],
// 	'matkul3' => $cek[3],'stat3' => $stat[3],'matkul4' => $cek[4],'stat4' => $stat[4],
// 	'matkul5' => $cek[5],'stat5' => $stat[5],'matkul6' => $cek[6],'stat6' => $stat[6],
// 	'matkul7' => $cek[7],'stat7' => $stat[7],'matkul8' => $cek[8],'stat8' => $stat[8],
// 	'matkul9' => $cek[9],'stat9' => $stat[9],'matkul10' => $cek[10],'stat10' => $stat[10],
// 	'matkul11' => $cek[11],'stat11' => $stat[11],'matkul12' => $cek[12],'stat12' => $stat[12],
// 	'matkul13' => $cek[13],'stat13' => $stat[13],'matkul14' => $cek[14],'stat14' => $stat[14],
// 	'matkul15' => $cek[15],'stat15' => $stat[15],'matkul16' => $cek[16],'stat16' => $stat[16],
// 	'matkul17' => $cek[17],'stat17' => $stat[17],'matkul18' => $cek[18],'stat18' => $stat[18],
// 	'matkul19' => $cek[19],'stat19' => $stat[19],'matkul20' => $cek[20],'stat20' => $stat[20],
// 	'matkul21' => $cek[21],'stat21' => $stat[21],'matkul22' => $cek[22],'stat22' => $stat[22],
// 	'matkul23' => $cek[23],'stat23' => $stat[23],'matkul24' => $cek[24],'stat24' => $stat[24],
// 	'matkul25' => $cek[25],'stat25' => $stat[25],'matkul26' => $cek[26],'stat26' => $stat[26],
// 	'matkul27' => $cek[27],'stat27' => $stat[27],'matkul28' => $cek[28],'stat28' => $stat[28],
// 	'matkul29' => $cek[29],'stat29' => $stat[29],'matkul30' => $cek[30],'stat30' => $stat[30],
// 	'matkul31' => $cek[31],'stat31' => $stat[31],'matkul32' => $cek[32],'stat32' => $stat[32],
// 	'matkul33' => $cek[33],'stat33' => $stat[33],'matkul34' => $cek[34],'stat34' => $stat[34],
// 	'matkul35' => $cek[35],'stat35' => $stat[35],'matkul36' => $cek[36],'stat36' => $stat[36],
// 	'matkul37' => $cek[37],'stat37' => $stat[37],'matkul38' => $cek[38],'stat38' => $stat[38],
// 	'matkul39' => $cek[39],'stat39' => $stat[39],'matkul40' => $cek[40],'stat40' => $stat[40],
// 	'matkul41' => $cek[41],'stat41' => $stat[41],'matkul42' => $cek[42],'stat42' => $stat[42],
// 	'matkul43' => $cek[43],'stat43' => $stat[43],'matkul44' => $cek[44],'stat44' => $stat[44],
// 	'matkul45' => $cek[45],'stat45' => $stat[45],'matkul46' => $cek[46],'stat46' => $stat[46],
// 	'matkul47' => $cek[47],'stat47' => $stat[47],'matkul48' => $cek[48],'stat48' => $stat[48],
// 	'matkul49' => $cek[49],'stat49' => $stat[49],'matkul50' => $cek[50],'stat50' => $stat[50],
// 	'matkul51' => $cek[51],'stat51' => $stat[51],'matkul52' => $cek[52],'stat52' => $stat[52],
// 	'matkul53' => $cek[53],'stat53' => $stat[53],'matkul54' => $cek[54],'stat54' => $stat[54],
// 	'matkul55' => $cek[55],'stat55' => $stat[55],'matkul56' => $cek[56],'stat56' => $stat[56],
// 	'matkul57' => $cek[57],'stat57' => $stat[57],'matkul58' => $cek[58],'stat58' => $stat[58],
// 	'matkul59' => $cek[59],'stat59' => $stat[59],'matkul60' => $cek[60],'stat60' => $stat[60],
// 	'matkul61' => $cek[61],'stat61' => $stat[61],'matkul62' => $cek[62],'stat62' => $stat[62],
// 	'matkul63' => $cek[63],'stat63' => $stat[63],'matkul64' => $cek[64],'stat64' => $stat[64],
// 	'matkul65' => $cek[65],'stat65' => $stat[65],'matkul66' => $cek[66],'stat66' => $stat[66],
// 	'matkul67' => $cek[67],'stat67' => $stat[67],'matkul68' => $cek[68],'stat68' => $stat[68],
// 	'matkul69' => $cek[69],'stat69' => $stat[69],'matkul70' => $cek[70],'stat70' => $stat[70],
// 	'matkul71' => $cek[71],'stat71' => $stat[71],'matkul72' => $cek[72],'stat72' => $stat[72],
// 	'matkul73' => $cek[73],'stat73' => $stat[73],'matkul74' => $cek[74],'stat74' => $stat[74],
// 	'matkul75' => $cek[75],'stat75' => $stat[75],'matkul76' => $cek[76],'stat76' => $stat[76],
// 	'matkul77' => $cek[77],'stat77' => $stat[77],'matkul78' => $cek[78],'stat78' => $stat[78],
// 	'matkul79' => $cek[79],'stat79' => $stat[79],'matkul80' => $cek[80],'stat80' => $stat[80],
// 	'matkul81' => $cek[81],'stat81' => $stat[81],'matkul82' => $cek[82],'stat82' => $stat[82],
// 	'matkul83' => $cek[83],'stat83' => $stat[83],'matkul84' => $cek[84],'stat84' => $stat[84],
// 	'matkul85' => $cek[85],'stat85' => $stat[85],'matkul86' => $cek[86],'stat86' => $stat[86],
// 	'matkul87' => $cek[87],'stat87' => $stat[87], 'temp' => $temp1
// );
$this->load->view('view_all_data_table_export',$data);
}
}

