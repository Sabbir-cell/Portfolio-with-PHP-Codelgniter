<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Crud_model extends CI_model
	{
		// Start about section
		function create_about(){
			$data['about_my_self'] = $this->input->post('about_my_self');
			$data['tools_name'] = $this->input->post('tools_name');
			$data['percent'] = $this->input->post('percent');

			$this->db->insert('about', $data);
		}

		function update_about($param1){
			$data['about_my_self'] = $this->input->post('about_my_self');
			$data['tools_name'] = $this->input->post('tools_name');
			$data['percent'] = $this->input->post('percent');

			$this->db->where('id', $param1);
			$this->db->update('about' , $data);
		}
		function delete_about($param1){
			$this->db->where('id', $param1);
			$this->db->delete('about');
		}
		//End about section

		//Start service section
		function create_service()
		{
			$data['caption'] = $this->input->post('caption');
			$data['deatils'] = $this->input->post('deatils');

			$this->db->insert('service', $data);
			move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/service/".$insert_id.'.jpg');
		}
		function update_service($param1='')
		{
			$data['caption'] = $this->input->post('caption');
			$data['deatils'] = $this->input->post('deatils');
			$this->db->where('id', $param1);
			$this->db->update('service' , $data);
		}
		function delete_service($param1){
			$this->db->where('id', $param1);
			$this->db->delete('service');
		}
		// Start Projects Section
		function projects()
		{
			$send['tittle'] = $this->input->post('tittle');
			$send['made'] = $this->input->post('madefor');  // form name

			$this->db->insert('projects',$send);
			$insert_id = $this->db->insert_id();
			move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/project/".$insert_id.'.jpg');
		}

		function update_projects($param1 ='')
		{
			$send['tittle'] = $this->input->post('tittle');
			$send['made'] = $this->input->post('madefor');
			$this->db->where('id' , $param1);
			$this->db->update('projects' , $send);

			move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/project/".$param1.'.jpg');
		}
		function delete_projects($param1){
			$this->db->where('id', $param1);
			$this->db->delete('projects');
		}
		// Start Project Deatils
		function project_deatils()
		{
			$deatils['name'] = $this->input->post('name');
			$deatils['tittle'] = $this->input->post('tittle');
			$deatils['client'] = $this->input->post('client');
			$deatils['website'] = $this->input->post('website');
			$deatils['complite'] = $this->input->post('date');
			$deatils['deatils'] = $this->input->post('deatils');

			$this->db->insert('project_deatils' , $deatils);
			move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/project_deatils/".$insert_id.'.jpg');
		}
		function update_projects_deatils($param1 ='')
		{
			$deatils['name'] = $this->input->post('name');
			$deatils['tittle'] = $this->input->post('tittle');
			$deatils['client'] = $this->input->post('client');
			$deatils['website'] = $this->input->post('website');
			$deatils['complite'] = $this->input->post('date');
			$deatils['deatils'] = $this->input->post('deatils');
			$this->db->where('id',$param1);
			$this->db->update('project_deatils',$deatils);
		}
		function delete_projects_deatils($param1){
			$this->db->where('id', $param1);
			$this->db->delete('project_deatils');
		}
		// Start Blog section
		function blog()
		{
			$blog['date_writter'] = $this->input->post('datewritter');
			$blog['caption'] = $this->input->post('caption');
			$blog['deatils'] = $this->input->post('deatils');
			$this->db->insert('blog' , $blog);
			$insert_id = $this->db->insert_id();

        	move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/blog/".$insert_id.'.jpg');
		}
		function update_blog($param1 ='')
		{
			$blog['date_writter'] = $this->input->post('datewritter');
			$blog['caption'] = $this->input->post('caption');
			$blog['deatils'] = $this->input->post('deatils');
			$this->db->where('id' , $param1);
			$this->db->update('blog' , $blog);
			
		}
		function delete_blog($param1){
			$this->db->where('id', $param1);
			$this->db->delete('blog');
		}
		function contact($param1 ='')
		{
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['subject'] = $this->input->post('subject');
			$data['message'] = $this->input->post('message');
			$this->db->insert('contact', $data);
		}
		function delete_contact($param1){
			$this->db->where('id', $param1);
			$this->db->delete('contact');
		}
		function account($param1='')
		{
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$this->db->where('id', $param1);
			$this->db->update('user' , $data);
		}

		function change_pass(){
			$user_id = $this->session->userdata('user_id');
			$current_password = $this->db->get_where('user', array('id' => $user_id))->row('password');
			$current_pass = md5($this->input->post('current_pass'));
			$data['password'] = md5($this->input->post('new_pass'));

			if($current_password == $current_pass){
				$this->db->where('id', $user_id);
				$this->db->update('user', $data);
			}else{

			}
		}
	}

