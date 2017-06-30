<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

	 public function __construct()
    {
        parent::__construct();
       
    }

    public function save($data)
	{
		$query=$this->db->insert('student_table', $data);
		
	}
	public function getData()
	{
	$query=$this->db->get('student_table');
	return $query->result();		
	}
	public function deleteId($id)
	{
	$this->db->where('id',$id);
	$this->db->delete('student_table');		
	}
	public function get_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('student_table');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function updateDetails($data,$id)
	{
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('student_table'); 
		return $this->db->affected_rows();
		

	}
}