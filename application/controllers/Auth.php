<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','userrole');
	}
	function login()
	{		
		if($this->session->userdata('email')){
			redirect('Mahasiswa');
		}
		$this->form_validation->set_rules('email','Email','trim|required|valid_email',
		['valid_email'=>'Email Harus Valid',
		'required'=>'Isi Email nya coy']);

		$this->form_validation->set_rules('password','Password','trim|required',
		['required'=>'Jangan Lupa isi Password nya kk']);

		if($this->form_validation->run()== false){
		$this->load->view("layout/auth_header");
		$this->load->view("auth/login");
		$this->load->view("layout/auth_footer");
		}else{
			$this->cek_login();
		}
		
	}
	function registrasi()
	{	
		if($this->session->userdata('email')){
			redirect('Mahasiswa');
		}
		
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[user.email]',
		['is_unique'=>'Email dah ada yang punya',
		 'valid_email'=>'Invalid Email',
		 'required'=>'Email harus diisi la']);

		$this->form_validation->set_rules(
			'password','Password','required|trim|min_length[5]|matches[password2]',
			[
				'matches'=>'Password Not The Same',
				'min_length'=>'Password Too Short Boy',
				'required'=>'Password belum diisi'
			]
			);

		$this->form_validation->set_rules('password2','Password','required|trim|matches[password]');
		if($this->form_validation->run()==false){
			$data['judul']='Registration';
			$this->load->view("layout/auth_header",$data);
			$this->load->view("auth/registrasi");
			$this->load->view("layout/auth_footer");
			}else{
				$data = [
				'nama' => htmlspecialchars($this->input->post('nama',true)),
				'email'=> htmlspecialchars($this->input->post('email',true)),
				'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'gambar'=>'default.jpg',
				'role'=>"User",
				'data_created'=>date('Y-m-d')
		];
			$this->userrole->insert($data);
			$this->session->set_flashdata('message','<div class"alert alert-success" role="alert"
			Selamat Akunmu telah berhasil terdaftar, Silahkan Login!');
			redirect('Auth/login');
			}
		}
		
	

	

	public function cek_login()
	{
		$email = $this -> input->post('email');
		$password = $this -> input -> post('password');
		$user = $this -> db -> get_where('user',['email' => $email]) -> row_array();
		if($user){
			if(password_verify($password,$user['password'])){
				$data = [
					'email' => $user['email'],
					'role' => $user['role'],
					'id' => $user['id'],
				];
				$this->session->set_userdata($data);
				if($user['role'] == 'Admin'){
					redirect ('Mahasiswa');
				}else{
					redirect('Profil');
				}

			}else{
				$this->session->set_flashdata('message', '<div> class="class alert-danger" role="alert">PasswordSalah!</div>');
				redirect('Auth/login');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Belum Terdaftar!</div>');
			redirect('Auth/login');
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('message','<div class"alert alert-success" role="alert">Berhasil Logout!</div>');
		redirect('Auth/login');
	}
	}



?>
