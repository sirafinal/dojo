<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dojo_modelo extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function traer_todo_mensaje()
	{
		$consulta=$this->db->query("select * from mensajes ORDER BY idmensajes DESC limit 0,50");
		return $consulta;
	}
	function inserta_mensaje($datos)
	{
	
		$dato=array(
		'asunto'=>$datos['asunto'],
		'mensaje'=>$datos['mensaje'],
		'hora'=>date("h:i:s"),
		'fecha'=>date("Y/m/j"),
		);
		$this->db->insert('mensajes',$dato);
	}
}
