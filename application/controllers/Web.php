<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Web extends CI_Controller{
		public function _construct(){
			parent::_construct();
		}

		function index(){
			$this->load->view('inicio');
		}

		function ver_foto($cod=0){
			if($cod == 0){
				redirect('web');
			}
			$d = array();
			$d['cod'] = $cod;
			$this->load->view('ver_foto',$d);
			
		}

		function acerca_de(){
			$this->load->view('acerca_de');
		}
	}
