<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Collection extends CI_Model
{
	// Ini fungsi untuk ambil data produk
	public function get_collection(){
		$query = $this->db->get('produk');
		if ($query){
			return $query->result_array();
		}
		else{
			return false;
		}
	} 

	public function get_detail_product($id)
	{
		$query = $this->db->get_where('produk', array('id' => $id));

		if($query)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
} 
?>