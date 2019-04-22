<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{
	public function register($data)
	{
		$query = $this->db->insert('user', $data);

		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function validate_login($data)
	{
		$check_user = $this->db->get_where('user', array(
			'username' => $data['username'], 
			'password' => $data['password'])
		);

		if($check_user)
		{
			return $check_user->result();
		}
		else
		{
			return false;
		}
	}
}
?>