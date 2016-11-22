<?php

class Consulta_model extends CI_Model
{
	public function guardar_jm(){
		$data=array(
			'sms'=>$_GET ['messa']
			);
		$this->db->insert('borrador',$data);
	}
}
?>