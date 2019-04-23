<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Model extends CI_Model
{
	
	public function simpan($tabel,$data)
	{
		return $this->db->insert($tabel,$data);
	}

	public function hapus($tabel, $where)
	{
		return $this->db->delete($tabel, $where);
	}

	public function update($tabel, $data, $where)
	{
		return $this->db->update($tabel, $data, $where);
	}

	public function getUsers($where ='')
	{
		return $this->db->query("SELECT * FROM users ".$where);
	}

	public function getLogin($username, $password)
	{
		return $this->db->query("SELECT * FROM users WHERE username='$username' AND password='".md5($password)."'");
	}
	public function getsiswa($where ='')
	{
		return $this->db->query("SELECT * FROM siswa ".$where);
	}
	public function getLogin2($username, $no_hp)
	{
		return $this->db->query("SELECT * FROM siswa WHERE username='$username' AND no_hp='".md5($no_hp)."'");
	}

}
?>
