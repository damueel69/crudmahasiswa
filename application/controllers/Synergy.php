<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Synergy extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Synergy_model'); // Load the Synergy_model
    }

    public function synergy_index()
    {
        $data['judul'] = "Halaman Synergy";
        $data['synergies'] = $this->Synergy_model->get_all_synergies();
        $this->load->view("layout/header2");
        $this->load->view("synergy/vw_synergy", $data);
        $this->load->view("layout/footer");
    }

    public function synergy_tambah()
    {
        $data['judul'] = "Halaman Tambah Synergy";
        $this->form_validation->set_rules('nama_synergy', 'Nama Synergy', 'required', [
            'required' => 'Nama Synergy Wajib di isi'
        ]);

        $this->form_validation->set_rules('jmlh_hero', 'Jumlah Hero', 'required', [
            'required' => 'Jumlah Hero Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header2");
            $this->load->view("synergy/vw_tambah_synergy", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_synergy' => $this->input->post('nama_synergy'),
                'jmlh_hero' => $this->input->post('jmlh_hero')
            ];
            $this->Synergy_model->insert_synergy($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Synergy Berhasil ditambah!!</div>');
            redirect('Synergy/synergy_index');
        }
    }

    public function synergy_hapus($id)
    {
        $synergy = $this->Synergy_model->get_synergy_by_id($id);

        if ($synergy === null) {
            // Handle if synergy with ID is not found
            show_404();
        }

        $this->Synergy_model->delete_synergy($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Synergy berhasil dihapus!</div>');
        redirect('Synergy/synergy_index');
    }

    public function synergy_detail($id) {
        $data['judul'] = "Detail Synergy";
        $data['synergy'] = $this->Synergy_model->get_synergy_by_id($id);
    
        if ($data['synergy'] === null) {
            // Handle if synergy with the provided ID is not found
            show_404();
        }
    
        $this->load->view("layout/header2");
        $this->load->view("synergy/vw_detail_synergy", $data);
        $this->load->view("layout/footer");
    }
    

    public function synergy_edit($id)
    {
        $data['judul'] = "Halaman Edit Synergy";
        $data['synergy'] = $this->Synergy_model->get_synergy_by_id($id);
        $this->form_validation->set_rules('nama_synergy', 'Nama Synergy', 'required', [
            'required' => 'Nama Synergy Wajib di isi'
        ]);
        $this->form_validation->set_rules('jmlh_hero', 'Jumlah Hero', 'required', [
            'required' => 'Jumlah Hero Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header2");
            $this->load->view("synergy/vw_ubah_synergy", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_synergy' => $this->input->post('nama_synergy'),
                'jmlh_hero' => $this->input->post('jmlh_hero')
            ];
            $this->Synergy_model->update_synergy(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Synergy Berhasil DiUbah!</div>');
            redirect('Synergy/synergy_index');
        }
    }
}
