<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->helper('form');

		//$this->load->model('form_model'); 

	}
       public function index()


	{
		$this->load->view('formulario');

    }

      function validar()
       {
         // echo"hola<br>;
       	//echo estamos recibiendo los datos del formulario eva3php.
       	$name = $this->input->post('myriam');
        $lastname = $this->input->post('castillo');
        $email = $this->input->post('email');

		echo "Nombre: ".$name. "Apellido: ".$lastname. "correo: ". $email;

		//Aqui estamos creando el array


		$data = array('nombre' => $this->input->post('myriam'),'apellido' => $this->input->post('castillo'), 'email' => $this->input->post('correo'));
	    

		 //Aqui se llama la funcion para guardar en la BD

		$this->form_model->guardar($data);

	  
	}
}
