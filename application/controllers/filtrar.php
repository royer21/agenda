<?php

class Filtrar extends CI_controller {

	// Constructor de Clase
	function __construct() {
		parent::__construct();

		$this->load->model('model_evento');
	}
	
	public function prueba($year) {
		/*$datos=array(
		'enlaces'=>$this->model_evento->verReg($year)
		);*/

		$datos = array('enlaces'=>$this->model_evento->verReg($year));

		$data['contenido'] ='home/vagenda';
		$data['titulo'] = 'FILTRAR EVENTO';
		$this->load->view('header', $data);
		$this->load->view('template', $datos);
		//$this->load->view('template', $datos);
		$this->load->view('footer', $data);	
		

		
		//mostrar
/*		foreach ($variable as $key => $resultado) {
			echo $key . '.-' . $variable['evento'] . '<br>';
			echo 'fecha' . $variable['fecha'] . '<br>';
		}

		//$resultado = $this->model_evento->verReg($year);
		*/
	}

}

	