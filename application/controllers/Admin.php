<?php
	session_start();
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller{
		public function _construct(){
			parent::_construct();
			//Codeigniter: Write Less Do more

			$metodo = $this->router->fetch_method();

			if(!isset($_SESSION['gale_user']) && $metodo != 'login'){
				redirect('admin/login');
			}
		}

		function index(){
			$metodo = $this->router->fetch_method();

			if(!isset($_SESSION['gale_user']) && $metodo != 'login'){
				redirect('admin/login');
			}else{
				$this->load->view('admin/inicio');
			}

		}
		function login(){
			$this->load->view('admin/login');
		}

		function salir(){
			unset($_SESSION['gale_user']);
			redirect('admin/login');
		}
	}