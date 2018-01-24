<?php 

class M_data extends CI_Model{

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function check_data($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function view_db_matkul(){
		$sql = "SELECT * FROM db_matkul";
		return $this->db->query($sql);
	}

	function view_data_matkul($mata_kuliah){
		
		$sql = "SELECT * FROM data_krs 
		WHERE MATA_KULIAH_1 LIKE ? OR 
		MATA_KULIAH_2 LIKE ? OR 
		MATA_KULIAH_3 LIKE ? OR 
		MATA_KULIAH_4 LIKE ? OR
		MATA_KULIAH_5 LIKE ? OR
		MATA_KULIAH_6 LIKE ? OR
		MATA_KULIAH_7 LIKE ? 
		";
		return $this->db->query($sql,array($mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah));
	}

	function view_data_matkul_2011_2013($mata_kuliah){
		$nim = array('1151%','1251%','1351%');
		$sql = "SELECT * FROM data_krs where (
		(
		NIM LIKE ? OR
		NIM LIKE ? OR
		NIM LIKE ?
		)
		AND (
		MATA_KULIAH_1 LIKE ? OR 
		MATA_KULIAH_2 LIKE ? OR 
		MATA_KULIAH_3 LIKE ? OR 
		MATA_KULIAH_4 LIKE ? OR
		MATA_KULIAH_5 LIKE ? OR
		MATA_KULIAH_6 LIKE ? OR
		MATA_KULIAH_7 LIKE ? 
		))
		";
		return $this->db->query($sql,array($nim[0],$nim[1],$nim[2],$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah));
	}

	function view_data_matkul_2014($mata_kuliah){
		$nim = '1451%';
		$sql = "SELECT * FROM data_krs where NIM LIKE ? AND (
		MATA_KULIAH_1 LIKE ? OR 
		MATA_KULIAH_2 LIKE ? OR 
		MATA_KULIAH_3 LIKE ? OR 
		MATA_KULIAH_4 LIKE ? OR
		MATA_KULIAH_5 LIKE ? OR
		MATA_KULIAH_6 LIKE ? OR
		MATA_KULIAH_7 LIKE ? 
		)
		";
		return $this->db->query($sql,array($nim,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah));
	}

	function view_data_matkul_2015($mata_kuliah){
		$nim = '1551%';
		$sql = "SELECT * FROM data_krs where NIM LIKE ? AND (
		MATA_KULIAH_1 LIKE ? OR 
		MATA_KULIAH_2 LIKE ? OR 
		MATA_KULIAH_3 LIKE ? OR 
		MATA_KULIAH_4 LIKE ? OR
		MATA_KULIAH_5 LIKE ? OR
		MATA_KULIAH_6 LIKE ? OR
		MATA_KULIAH_7 LIKE ? 
		)
		";
		return $this->db->query($sql,array($nim,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah));
	}

	function view_data_matkul_2016($mata_kuliah){
		$nim = '1651%';
		$sql = "SELECT * FROM data_krs where NIM LIKE ?
		AND (
		MATA_KULIAH_1 LIKE ? OR 
		MATA_KULIAH_2 LIKE ? OR 
		MATA_KULIAH_3 LIKE ? OR 
		MATA_KULIAH_4 LIKE ? OR
		MATA_KULIAH_5 LIKE ? OR
		MATA_KULIAH_6 LIKE ? OR
		MATA_KULIAH_7 LIKE ? 
		)
		";
		return $this->db->query($sql,array($nim,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah,$mata_kuliah));
	}

	function view_keluhan(){
		$sql = "SELECT * FROM data_krs WHERE KELUHAN IS NOT NULL AND KELUHAN <> ''";
		return $this->db->query($sql);
	}
}