<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prodi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Prodi_model');
		$this->load->model('User_model');

	}

	public function index() {
		$data['judul'] = "Halaman Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Prodi_model');
		$data['prodi'] = $this->Prodi_model->get();
		
		
		$this->load->view("layout/header", $data);
		$this->load->view("prodi/vw_prodi", $data);
		$this->load->view("layout/footer");
		
	}
	


	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Prodi_model');
		$data['prodi'] = $this->Prodi_model->get();
		

		$this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required', [
			'required' => 'Nama Prodi Wajib di isi'
		]);
			$this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
			'required' => 'Ruangan Prodi wajib di isi'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
			'required' => 'Jurusan Prodi Wajib di isi'
		]);
		$this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
			'required' => 'Akreditasi Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
			'required' => 'Nama Kaprodi Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required', [
			'required' => 'Tahun Berdiri Wajib di isi'
		]);
		$this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
			'required' => 'Output Lulusan Prodi Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
		$this->load->view("layout/header",$data);
		$this->load->view("prodi/vw_tambah_prodi", $data);
		$this->load->view("layout/footer");
		}else{
			$data = [
				'nama_prodi' => $this->input->post('nama_prodi'),
				'ruangan' => $this->input->post('ruangan'),
				'jurusan' => $this->input->post('jurusan'),
				'akreditasi' => $this->input->post('akreditasi'),
				'nama_kaprodi' => $this->input->post('nama_kaprodi'),
				'tahun_berdiri' => $this->input->post('tahun_berdiri'),
				'output_lulusan' => $this->input->post('output_lulusan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = "./assets/img/prodi";
				$this->load->library('upload', $config);
				if($this->upload->do_upload->data('gambar')){
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar',$new_image);
			}else{
				echo $this -> upload ->display_error();

			}
			}
			$this->Prodi_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert">Data Prodi Berhasil ditambah!!</div>');
			redirect('Prodi');
		}
	}

	public function detail($id)
	{
    $data['judul'] = "Halaman Detail Program Studi";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Prodi_model');
    $data['prodi'] = $this->Prodi_model->getById($id);

    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_detail_prodi", $data);
    $this->load->view("layout/footer");
	}



	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->Prodi_model->getById($id);

		$this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required', [
			'required' => 'Nama Prodi Wajib di isi'
		]);
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
			'required' => 'Ruangan Wajib di isi'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
			'required' => 'Jurusan Wajib di isi'
		]);
		$this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
			'required' => 'Akreditasi Prodi Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
			'required' => 'Nama Kaprodi Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required', [
			'required' => 'Tahun Berdiri Prodi Wajib di isi'
		]);
		$this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
			'required' => 'Output Lulusan Wajib di isi'
		]);
		
		if ($this->form_validation->run() == false) {
		$this->load->view("layout/header",$data);
		$this->load->view("prodi/vw_ubah_prodi", $data);
		$this->load->view("layout/footer");
		}else{
			$data = [
				'nama_prodi' => $this->input->post('nama_prodi'),
				'ruangan' => $this->input->post('ruangan'),
				'jurusan' => $this->input->post('jurusan'),
				'akreditasi' => $this->input->post('akreditasi'),
				'nama_kaprodi' => $this->input->post('nama_kaprodi'),
				'tahun_berdiri' => $this->input->post('tahun_berdiri'),
				'output_lulusan' => $this->input->post('output_lulusan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = "./assets/img/prodi";
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')){
					$old_image != 'default.jpg';
					unlink(FCPATH.'assets/img/prodi/'. $old_image);
				}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar',$new_image);
			}else{
				echo $this -> upload ->display_error();

			}
			$id = $this->input->post('id');
			$this->Prodi_model->Update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Prodi Berhasil DiUbah!</div>');
			redirect('Prodi');
		}
	}
	
	public function hapus($id)
	{
		$this->Prodi_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert"><i class="icon fas fa-info-circle"></i>Data Prodi tidak dapat dihapus(sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert"><i class="icon fas fa-info-circle"></i>Data Prodi berhasil dihapus!</div>');
		}
		redirect('Prodi');
	}
}
