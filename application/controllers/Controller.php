<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model');
		
	}

	public function index()
	{	
		$this->load->view('layouts/header');
		$this->load->view('login');
		// $this->load->view('layouts/footer');
	}

	public function login()
	{
		$usuario 	 = $this->input->post('usuario');
		$contrasenia = $this->input->post('contrasenia');

		$dbdata = $this->Model->get_users($usuario)->result();
		

		// var_dump($usuario == $dbdata[0]->usuario && $contrasenia == $dbdata[0]->contrasenia);die;

		if ($usuario == $dbdata[0]->usuario && $contrasenia == $dbdata[0]->contrasenia)
		{
			$this->session->set_userdata('usuario', $usuario);
			redirect('inicio');
		}
		else {
			$this->session->set_flashdata('usuario','Error de autenticacion.');
			redirect('');
		}
	}

	public function inicio()
	{
		if ($this->session->has_userdata('usuario')) {

			$data['equipos'] 	   = $this->Model->getEquipos();
			$dataeq['tipo_equipo'] = $this->Model->getTipoEquipo();
			$dataeq['fallas'] 	   = $this->Model->getFalla();

			// var_dump($data); die;

		/*
			1 => Redes
			2 => Programacion
			3 => Mantenimiento

		*/

			// var_dump($data); die;

			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar', $dataeq); //
			$this->load->view('inicio' , $data);
			$this->load->view('layouts/footer');

		}
		else {
			redirect('');
		}
	}
	
	public function logout()
	{
		if ($this->session->has_userdata('usuario'))
		{
			$this->session->unset_userdata('usuario');
			redirect('');
		}

	}

	public function reparacion()
	{
		if ($this->session->has_userdata('usuario')) {

			$data['reparacion'] = $this->Model->getReparacion();

			$dataeq['tipo_equipo'] = $this->Model->getTipoEquipo();
			$dataeq['fallas'] = $this->Model->getFalla();
			
			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar', $dataeq);
			$this->load->view('reparacion' , $data);
			$this->load->view('layouts/footer');
		}
	}

	public function daniados()
	{

		if ($this->session->has_userdata('usuario')) {

			$data['daniados'] = $this->Model->getDaniados();
			
			$dataeq['tipo_equipo'] = $this->Model->getTipoEquipo();
			$dataeq['fallas'] = $this->Model->getFalla();

			// var_dump($dataeq['fallas'][0]->id); die;

			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar', $dataeq);
			$this->load->view('daniados' , $data);
			$this->load->view('layouts/footer');
		}
	}

	// Registro de equipos
	public function registro()
	{
		/*
			1 => Redes
			2 => Programacion
			3 => Mantenimiento
		*/

		$id = $this->input->post('tipoFalla');
		$tec_dpto = $this->Model->getTecDpto($id);

		$random = random_int(0, count($tec_dpto) - 1);
		$idtec  = $tec_dpto[$random]->id;
 
		$data = [
	        'tipo_id' 		=> $this->input->post('tipoEquipo'),
	        'descripcion' 	=> $this->input->post('descripcionEquipo'),
	        'serial'		=> $this->input->post('serialEquipo'),
	        'fecha_ingreso' => date('Y-m-d'),
	        'falla_id' 		=> $this->input->post('fallaid'),
	        'status' 		=> 'En reparacion',
	        'tec_id'		=> $idtec
		];

		$this->Model->insertarEquipo($data);
		redirect('inicio');
	}

	// Registro de un nuevo usuario
	public function registrousuario()
	{
		$data = [
	        'nombre' 			=> $this->input->post('nombreUsuario'),
	        'apellido' 			=> $this->input->post('apellidoUsuario'),
	        'usuario'			=> $this->input->post('emailUsuario'),
	        'contrasenia' 		=> $this->input->post('passUsuario')

		];
		// var_dump($data); die;
		$this->Model->insertarPersona($data);
		redirect('');
	}

	public function filtrarSerial()
	{
		$serial = $this->input->post('serial');

		$data['equipos'] = $this->Model->filtrarSerial($serial);
		// var_dump($data); exit;
		
		$dataeq['tipo_equipo'] = $this->Model->getTipoEquipo();
		$dataeq['fallas'] = $this->Model->getFalla();

		$this->load->view('layouts/header');
		$this->load->view('layouts/navbar', $dataeq); 
		$this->load->view('serial', $data ); 
		$this->load->view('layouts/footer');
	}

	// Reportes PDFS

	public function todospdf()
	{
		$data['equipos'] = $this->Model->getEquipos();
		$this->load->view('todos' , $data);
	}	

	public function daniadospdf()
	{
		$data['daniados'] = $this->Model->getDaniados();
		$this->load->view('daniadospdf' , $data);
	}	

	public function reparacionpdf()
	{
		$data['reparacion'] = $this->Model->getReparacion();
		$this->load->view('reparacionpdf' , $data);
	}
}
