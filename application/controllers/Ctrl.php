<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('collection');
		$this->load->model('user');
	}

	public function index()
	{
		$this->load->view('default/header');
		$this->load->view('default/home');
		$this->load->view('default/footer');		
	}
	public function collection()
	{
		$data = array(
			'product' => $this->collection->get_collection()
		);

		$this->load->view('default/header', $data);
		$this->load->view('default/collection');
		$this->load->view('default/footer');
	}
	public function register()
	{
		$this->load->view('default/header');
		$this->load->view('default/register');
		$this->load->view('default/footer');
	}
	public function login()
	{
		$this->load->view('default/header');
		$this->load->view('default/login');
		$this->load->view('default/footer');
	}
	public function detail($id)
	{
		$data = array(
			'detail_product' => $this->collection->get_detail_product($id)
		);
		$this->load->view('default/header', $data);
		$this->load->view('default/detail_product');
		$this->load->view('default/footer');
	}
	public function register_validate()
	{
		$input = $this->input->post();
		
		$full_name = addslashes($input['full_name']);
		$username = addslashes($input['username']);
		$password = addslashes($input['password']);
		$email = addslashes($input['email']);
		$phone_number = addslashes($input['no_telp']);
		$address = addslashes($input['alamat']);

		$data = array(
			'fullname' => $full_name,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'notelfon' => $phone_number,
			'alamat' => $address
		);

		$register = $this->user->register($data);

		if($register)
		{	
			$this->session->set_flashdata('success_msg','Berhasil mendaftar, silahkan login.');	
			redirect('ctrl/login');		
		}
		else
		{
			$this->session->set_flashdata('error_msg','Gagal mendaftar, silahkan coba lagi.');
			redirect('ctrl/register');
		}
	}
	public function login_validate()
	{
		$input = $this->input->post();

		$username = $input['username'];
		$password = $input['password'];

		$data = array(
			'username' => $username,
			'password' => $password
		);

		$check_user = $this->user->validate_login($data);

		if($check_user)
		{
			$this->session->set_userdata('id', $check_user[0]->id);
			redirect('ctrl/collection');
		}
		else
		{
			redirect('ctrl/login');
		}
	}
}