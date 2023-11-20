<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hero extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->model('Prodi_model');
		$this->load->model('User_model');
        $this->load->model('Hero_model');
	}
    public function hero_index()
{
    $data['judul'] = "Halaman Hero";
    $data['heroes'] = $this->Hero_model->get_all_heroes();
    $this->load->view("layout/header2");
    $this->load->view("hero/vw_hero",  $data);
    $this->load->view("layout/footer");
}

public function hero_tambah()
{
    $data['judul'] = "Halaman Tambah Hero";
    $this->form_validation->set_rules('nama_hero', 'Nama Hero', 'required', [
        'required' => 'Nama Hero Wajib di isi'
    ]);
    $this->form_validation->set_rules('role', 'Role', 'required', [
        'required' => 'Role Wajib di isi'
    ]);
    $this->form_validation->set_rules('synergy', 'Synergy', 'required', [
        'required' => 'Synergy Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header2");
        $this->load->view("hero/vw_tambah_hero", $data);
        $this->load->view("layout/footer");
    } else {
        $data = [
            'nama_hero' => $this->input->post('nama_hero'),
            'role' => $this->input->post('role'),
            'synergy' => $this->input->post('synergy'),
        ];
        $this->Hero_model->insert_hero($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Hero Berhasil ditambah!!</div>');
        redirect('Hero/hero_index');
    }
}
public function hero_hapus($id) {
    $this->load->model('Hero_model');
    $hero = $this->Hero_model->get_hero_by_id($id);
    
    if ($hero === null) {
        // Handle jika hero dengan ID tertentu tidak ditemukan
        show_404();
    }

    $this->Hero_model->delete_hero($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Hero berhasil dihapus!</div>');
    redirect('Hero/hero_index');
}

public function hero_detail($id) {
    $data['judul'] = "Detail Hero";
    $this->load->model('Hero_model');
    $data['hero'] = $this->Hero_model->get_hero_by_id($id);
    
    if ($data['hero'] === null) {
        // Handle jika hero dengan ID tertentu tidak ditemukan
        show_404();
    }

    $this->load->view("layout/header2");
    $this->load->view("hero/vw_detail_hero", $data);
    $this->load->view("layout/footer");
}

public function hero_edit($id)
{
    $data['judul'] = "Halaman Edit Hero";
    $data['hero'] = $this->Hero_model->get_hero_by_id($id);
    $this->form_validation->set_rules('nama_hero', 'Nama Hero', 'required', [
        'required' => 'Nama Hero Wajib di isi'
    ]);
    $this->form_validation->set_rules('role', 'Role', 'required', [
        'required' => 'Role Wajib di isi'
    ]);
    $this->form_validation->set_rules('synergy', 'Synergy', 'required', [
        'required' => 'Synergy Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header2");
        $this->load->view("hero/vw_ubah_hero", $data);
        $this->load->view("layout/footer");
    } else {
        $data = [
            'nama_hero' => $this->input->post('nama_hero'),
            'role' => $this->input->post('role'),
            'synergy' => $this->input->post('synergy')
        ];
        $id = $this->input->post('id');
        $this->Hero_model->update_hero(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Hero Berhasil DiUbah!</div>');
        redirect('Hero/hero_index');
    }
}

}
