<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Formulario_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function crearPerfil($data){
		$this->db->insert('maestra',array('Nombres'=>$data['Nombres'],'Apellidos'=>$data['Apellidos'],'Edad'=>$data['Edad'],'Fecha_nacimiento'=>$data['Fecha de nacimiento']));
	}
	

}
?>
