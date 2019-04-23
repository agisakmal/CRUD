<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->ceklogin();
	}

	private function ceklogin()
	{
		$id_user = $this->session->userdata('userid');
		$status = $this->session->userdata('status');
		if ($id_user == null OR $status != 'ok') {
			redirect("auth");
		}
	}

	public function index()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data User',
			'title_level2'=>'',
			'datauser'=>$this->model->getUsers(),
			'konten'=>'administrator/users/v_users',

		);
		$this->load->view('administrator/template',$data);
	}
	public function index2()
	{
		$data = array(
			'title'=>'siswa',
			'title_level1'=>'Data Siswa',
			'title_level2'=>'',
			'datasiswa'=>$this->model->getsiswa(),
			'konten'=>'administrator/datasiswa/v_datasiswa',

		);
		$this->load->view('administrator/template',$data);
	}

	public function index3()
	{
		$data = array(
			'title'=>'guru',
			'title_level1'=>'Data Guru',
			'title_level2'=>'',
			'dataguru'=>$this->model->getguru(),
			'konten'=>'administrator/dataguru/v_dataguru',

		);
		$this->load->view('administrator/template',$data);
	}

	public function tambah()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data User',
			'title_level2'=>'Tambah User',
			'konten'=>'administrator/users/v_tambah',

		);
		$this->load->view('administrator/template',$data);
	}
	public function tambah2()
	{
		$data = array(
			'title'=>'Siswa',
			'title_level1'=>'Data Siswa',
			'title_level2'=>'Tambah Siswa',
			'konten'=>'administrator/datasiswa/v_tambah',

		);
		$this->load->view('administrator/template',$data);
	}

	public function tambah3()
	{
		$data = array(
			'title'=>'guru',
			'title_level1'=>'Data Guru',
			'title_level2'=>'Tambah Guru',
			'konten'=>'administrator/dataguru/v_tambah',

		);
		$this->load->view('administrator/template',$data);
	}

	public function simpan()
	{
		if (!$_POST['simpan']) {
			redirect('administrator');
		}
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'fullname'=>$fullname,
			'username'=>$username,
			'password'=>md5($password)
			);
		$result = $this->model->simpan('users',$data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil disimpan')</script>";
			$this->index();
		}else{
			echo "<script>alert('Data Gagal disimpan')</script>";
			$this->tambah();
		}
	}
	public function simpan2(){
		if (!$_POST['simpan2']) {
			redirect('administrator');
		}
		$nis = $this->input->post('nis');
		$nama_siswa = $this->input->post('nama_siswa');
		$username = $this->input->post('username');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$kelas = $this->input->post('kelas');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$semester = $this->input->post('semester');
		$data = array(
			'nis'=>$nis,
			'nama_siswa'=>$nama_siswa,
			'username'=>$username,
			'jenis_kelamin'=>$jenis_kelamin,
			'tempat_lahir'=>$tempat_lahir,
			'tanggal_lahir'=>$tanggal_lahir,
			'kelas'=>$kelas,
			'alamat'=>$alamat,
			'no_hp'=>$no_hp,
			'semester'=>$semester

			
		);
		$result = $this->model->simpan('siswa',$data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil disimpan')</script>";
			$this->index2();
		}else{
			echo "<script>alert('Data Gagal disimpan')</script>";
			$this->tambah();
		}

	}
public function simpan3(){
		if (!$_POST['simpan3']) {
			redirect('administrator');
		}
		$nis = $this->input->post('nip');
		$nama_siswa = $this->input->post('nama_guru');
		$id_ekskul = $this->input->post('id_ekskul');
		$password = $this->input->post('password');
		$data = array(
			'nip'=>$nip,
			'nama_guru'=>$nama_guru,
			'id_ekskul'=>$id_ekskul,
			'password'=>$password,
			
		);
		$result = $this->model->simpan('guru',$data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil disimpan')</script>";
			$this->index3();
		}else{
			echo "<script>alert('Data Gagal disimpan')</script>";
			$this->tambah();
		}

	}

	public function edit($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('Kamu belum memilih data yg di edit')</script>";
			$this->index2();
		}
		$users = $this->model->getUsers(" WHERE id_user='$kode'")->row_array();
		$data = array(
			'title'=>'Users',
			'title_level1'=>'Data User',
			'title_level2'=>'Edit User',
			'id'=>$users['id_user'],
			'fullname'=>$users['fullname'],
			'username'=>$users['username'],
			'konten'=>'administrator/users/v_edit',

		);
		$this->load->view('administrator/template',$data);
	}

	public function edit2($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('Kamu belum memilih data yg di edit')</script>";
			$this->index();
		}
		$siswa = $this->model->getsiswa(" WHERE nis='$kode'")->row_array();
		$data = array(
			'title'=>'siswa',
			'title_level1'=>'Data siswa',
			'title_level2'=>'Edit siswa',
			'id'=>$siswa['nis'],
			'nama_siswa'=>$siswa['nama_siswa'],
			'username'=>$siswa['username'],
			'jenis_kelamin'=>$siswa['jenis_kelamin'],
			'tempat_lahir'=>$siswa['tempat_lahir'],
			'tanggal_lahir'=>$siswa['tanggal_lahir'],
			'kelas'=>$siswa['kelas'],
			'alamat'=>$siswa['alamat'],
			'no_hp'=>$siswa['no_hp'],
			'semester'=>$siswa['semester'],
			'konten'=>'administrator/datasiswa/v_edit',

		);
		$this->load->view('administrator/template',$data);
	}

	public function edit3($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('Kamu belum memilih data yg di edit')</script>";
			$this->index();
		}
		$guru = $this->model->getguru(" WHERE nip='$kode'")->row_array();
		$data = array(
			'title'=>'guru',
			'title_level1'=>'Data guru',
			'title_level2'=>'Edit guru',
			'id'=>$guru['nip'],
			'nama_guru'=>$guru['nama_guru'],
			'id_ekskul'=>$guru['id_ekskul'],
			'password'=>$password['password'],
			'konten'=>'administrator/dataguru/v_edit',

		);
		$this->load->view('administrator/template',$data);
	}


	public function update1()
	{
		if (!$_POST['update1']) {
			redirect('administrator');
		}
		$id = $this->input->post('id_user');
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$data = array(
			'fullname'=>$fullname,
			'username'=>$username
			);
		$result = $this->model->update('users',$data, array('id_user'=>$id));
		if ($result == 1) {
			echo "<script>alert('Data Berhasil diupdate')</script>";
			$this->index();
		}else{
			echo "<script>alert('Data Gagal diupdate')</script>";
			$this->edit();
		}
	}

	public function update2()
	{
		if (!$_POST['update2']) {
			redirect('administrator');
		}
		$id = $this->input->post('nis');
		$nama_siswa = $this->input->post('nama_siswa');
		$username = $this->input->post('username');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$kelas = $this->input->post('kelas');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$semester = $this->input->post('semester');
		$data = array(
			'nama_siswa'=>$nama_siswa,
			'username'=>$username,
			'jenis_kelamin'=>$jenis_kelamin,
			'tempat_lahir'=>$tempat_lahir,
			'tanggal_lahir'=>$tanggal_lahir,
			'kelas'=>$kelas,
			'alamat'=>$alamat,
			'no_hp'=>$no_hp,
			'semester'=>$semester
		);
		$result = $this->model->update('siswa',$data, array('nis'=>$id));
		if ($result == 1) {
			echo "<script>alert('Data Berhasil diupdate')</script>";
			$this->index2();
		}else{
			echo "<script>alert('Data Gagal diupdate')</script>";
			$this->edit2();
		}
	}

	public function update3()
	{
		if (!$_POST['update3']) {
			redirect('administrator');
		}
		$id = $this->input->post('nip');
		$nama_guru = $this->input->post('nama_guru');
		$id_ekskul = $this->input->post('id_ekskul');
		$password = $this->input->post('password');
		$data = array(
			'nama_guru'=>$nama_guru,
			'id_ekskul'=>$id_ekskul,
			'password'=>$password,
		);
		$result = $this->model->update('guru',$data, array('nip'=>$id));
		if ($result == 1) {
			echo "<script>alert('Data Berhasil diupdate')</script>";
			$this->index3();
		}else{
			echo "<script>alert('Data Gagal diupdate')</script>";
			$this->edit3();
		}
	}

	public function hapus($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('Kamu belum memilih data yg ingin di hapus')</script>";
			$this->index();
		}

		$result = $this->model->hapus('users', array('id_user'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			$this->index();
		}else{
			echo "<script>alert('Data gagal dihapus')</script>";
			$this->index();
		}

	}
	public function hapus2($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('Kamu belum memilih data yg ingin di hapus')</script>";
			$this->index2();
		}

		$result = $this->model->hapus('siswa', array('nis'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			$this->index2();
		}else{
			echo "<script>alert('Data gagal dihapus')</script>";
			$this->index2();
		}

	}

	public function hapus3($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('Kamu belum memilih data yg ingin di hapus')</script>";
			$this->index3();
		}

		$result = $this->model->hapus('guru', array('nip'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			$this->index3();
		}else{
			echo "<script>alert('Data gagal dihapus')</script>";
			$this->index3();
		}

	}

}
?>
