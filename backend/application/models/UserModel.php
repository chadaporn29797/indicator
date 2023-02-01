<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{

	public function getQuery($arr = "")
	{
		$this->db->select('*');
		$this->db->from('user');
		if ($arr != "") {
			for ($i = 0; $i < count($arr); $i++) {
				$this->db->where($arr[$i]);
			}
		}
		$this->db->order_by("role", "asc");
		$query = $this->db->get();
		return $query->result();
	}


	public function insert($arr=""){
		if($arr!="") $this->db->insert('user', $arr);
	}

	public function update($arr="", $where=""){
		if($arr != "" AND $where != ""){
			for($i=0; $i< count($where); $i++){
				$this->db->where($where[$i]); 
			}
			$this->db->update('user', $arr); 
		}
	}

	public function delete($where=""){
		if($where != ""){
			for($i=0; $i< count($where); $i++){
				$this->db->where($where[$i]); 
			}
			$this->db->delete('user'); 
		}
	}


	public function getUserSession()
	{
		$this->db->where('username', $this->input->post("staff_uname"));
		$query = $this->db->get('user');
		if ($query->num_rows() < 1) return false;

		$info = $query->row();
		$userID = $info->userID;

		$this->session->set_userdata("username", $this->input->post("staff_uname"));
		$this->session->set_userdata("role", $info->role);
		$this->session->set_userdata("userID", $info->userID);
		$this->session->set_userdata("department", $info->department);

		$this->db->where('userID', $userID);


		return true;
	}

	
}
