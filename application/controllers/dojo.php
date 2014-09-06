<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dojo extends CI_Controller {

	
	public function index()
	{
		if($_POST)
		{
			$datos=array(
				'asunto'=>$this->input->post('asunto'),
				'mensaje'=>$this->input->post('mensaje'),
			);
		
			//validacion
			$this->form_validation->set_rules('asunto','Asunto','required');
			$this->form_validation->set_rules('mensaje','Mensaje','required');
			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('dojo_index');
			}
			else{
				$this->dojo_modelo->inserta_mensaje($datos);
				$this->load->view('dojo_index');
			}
		
		}
		
		
		
	}
	public function mensajes()
	{
		$datos=array(
			'mensajes'=>$this->dojo_modelo->traer_todo_mensaje(),
		);
		$this->load->view('mensaje',$datos);
	}
}
