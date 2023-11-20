<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Role_model'); // Load the Role_model
    }

    public function role_index()
    {
        $data['judul'] = "Halaman Role";
        $data['roles'] = $this->Role_model->get_all_roles();
        $this->load->view("layout/header2");
        $this->load->view("role/vw_role", $data);
        $this->load->view("layout/footer");
    }

    public function role_tambah()
    {
        $data['judul'] = "Halaman Tambah Role";
        $this->form_validation->set_rules('nama_role', 'Nama Role', 'required', [
            'required' => 'Nama Role Wajib di isi'
        ]);

        $this->form_validation->set_rules('jmlh_hero', 'Jumlah Hero', 'required', [
            'required' => 'Jumlah Hero Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header2");
            $this->load->view("role/vw_tambah_role", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_role' => $this->input->post('nama_role'),
                'jmlh_hero' => $this->input->post('jmlh_hero')

            ];
            $this->Role_model->insert_role($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Role Berhasil ditambah!!</div>');
            redirect('Role/role_index');
        }
    }

    public function role_hapus($id)
    {
        $role = $this->Role_model->get_role_by_id($id);

        if ($role === null) {
            // Handle if role with ID is not found
            show_404();
        }

        $this->Role_model->delete_role($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Role berhasil dihapus!</div>');
        redirect('Role/role_index');
    }

    public function role_detail($id)
    {
        $data['judul'] = "Detail Role";
        $data['role'] = $this->Role_model->get_role_by_id($id);


        if ($data['role'] === null) {
            // Handle if role with ID is not found
            show_404();
        }

        $this->load->view("layout/header2");
        $this->load->view("role/vw_detail_role", $data);
        $this->load->view("layout/footer");
    }

    public function role_edit($id)
    {
        $data['judul'] = "Halaman Edit Role";
        $data['role'] = $this->Role_model->get_role_by_id($id);
        $this->form_validation->set_rules('nama_role', 'Nama Role', 'required', [
            'required' => 'Nama Role Wajib di isi'
        ]);$this->form_validation->set_rules('jmlh_hero', 'Jumlah Hero', 'required', [
            'required' => 'Jumlah Hero Wajib di isi'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header2");
            $this->load->view("role/vw_ubah_role", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_role' => $this->input->post('nama_role'),
                'jmlh_hero' => $this->input->post('jmlh_hero')
            ];
            $this->Role_model->update_role(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Role Berhasil DiUbah!</div>');
            redirect('Role/role_index');
        }
    }
}
