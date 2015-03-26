<?php

class Pages extends CI_controller {

	// Constructor de Clase
	function __construct() {
		parent::__construct();
}
		public function nuevo() {
			$data['contenido'] = 'home/nuevo';
			$data['titulo'] = 'Nuevo Evento';
			$this->load->view('header', $data);
			$this->load->view('template', $data);
			$this->load->view('footer', $data);	
		}

		public function guardar() {

			$this->form_validation->set_rules('procedencia', 'procedencia');
			echo "los datos han sido guardados" ;
			/*	$this->form_validation->set_rules('procedencia','Procedencia');
				$this->form_validation->set_rules('evento','Evento');
				$this->form_validation->set_rules('ambito','Ambito');
				if($this->form_validation->run() == FALSE) {
					$this->nuevo();
					echo "los datos han sido guardados correctamente " ;
				}
				else {
					redirect('home/index');
				}*/
		}


}