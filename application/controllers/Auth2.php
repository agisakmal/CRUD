<?php
/**
 * Created by PhpStorm.
 * User: faqih
 * Date: 06/07/18
 * Time: 4:27
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth2 extends CI_Controller
{
public function index(){
	$this->load->view('auth2/login');
}
	public function register()
	{
		$this->load->view('auth2/register');
	}
	public function reg_action()
	{
		$nis = $this->input->post('nis');
		$nama_siswa = $this->input->post('nama_siswa');
		$username = $this->input->post('username');
		$jenis_kelamin = $this->input->post('jenis_kalmin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$kelas = $this->input->post('kelas');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$semester = $this->input->post('semester');
		$repno_hp = $this->input->post('repno_hp');

		if ($no_hp != $repno_hp) {
			echo "password tidak sama";
		}else{

			$data = array(
				'nis'=>$nis,
				'nama_siswa'=>$nama_siswa,
				'username'=>$username,
				'jenis_kelamin'=>$jenis_kelamin,
				'tempat_lahir'=>$tempat_lahir,
				'tanggal_lahir'=>$tanggal_lahir,
				'kelas'=>$kelas,
				'alamat'=>$alamat,
				'semester'=>$semester,
				'no_hp'=>md5($no_hp));
			$result=$this->model->simpan('siswa',$data);
			if ($result > 0) {
				echo "Data siswa berhasil disimpan";
			}else{
				echo "Data siswa gagal disimpan";
			}

		}

	}


	public function login_action()
	{
		$username = $this->input->post('username');
		$no_hp = $this->input->post('no_hp');
		$check_login_r=$this->model->getLogin2($username,$no_hp)->num_rows();

		if ($check_login_r > 0){
			$datasiswa = $this->model->getLogin2($username,$no_hp)->row_array();
			$sessions = array(
				'session_nis'=>$this->session->siswadata['nis'],
				'session_username'=>$this->session->siswadata['username'],
				'session_no_hp'=>$this->session->siswadata['no_hp'],

			);
//			$this->session->set_siswadata($sessions);
			redirect("user");
		}else{
			echo "<script>alert('Login gagal')</script>";
			$this->index();
		}
	}

}
?>
