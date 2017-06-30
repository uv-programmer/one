<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	


	public function add()
	{
		$this->load->view('students/add');
	}


	public function addData()
		{
		$data=array('first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'standard'=>$this->input->post('standard'),
		'mobile'=>$this->input->post('mobile'),
		'status'=>'1'
		);	
	$insert=$this->Student_model->save($data);
	}


	public function viewList()
	{
		$data['student']=$this->Student_model->getData();
		$this->load->view('students/viewdetails',$data);
	}

	// public function viewData($id)
	// {

		
	// }

	public function deleteData($id)
	{
		$this->Student_model->deleteId($id);
		redirect('Student/viewList');
	}

	public function editData($id)
	{
		$data['student']=$this->Student_model->get_by_id($id);
		$this->load->view('students/editdetails',$data);

	}
	public function updateData($id)
	{
		$data=array('first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'standard'=>$this->input->post('standard'),
		'mobile'=>$this->input->post('mobile'),
		'status'=>'1'
		);
		
		// $id=$this->input->post('id');
		
		$insert=$this->Student_model->updateDetails($data,$id);
		redirect('Student/viewList');
	}
		public function viewMore($id)
	{
		$data['student']=$this->Student_model->get_by_id($id);
		$this->load->view('students/viewmore',$data);

	}
}
