<?php

class $NAME_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_all()
	{
		$query = $this->db->get('$NAME');
		return $query->result();
	}
	
	public function get_$NAME($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('$NAME');
		return $query->result();
	}
	
	public function delete_$NAME($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('$NAME');
	}
	
	public function update_$NAME($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('$NAME',$data);
	}
}