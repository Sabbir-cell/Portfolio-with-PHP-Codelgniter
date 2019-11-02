<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin extends CI_controller
	{
		public function index()
		{
			if($this->session->userdata('user_type') != 1){
				redirect(site_url('login'), 'refresh');
			}
			//Dashbord
			$page_data['page_name'] = 'dashboard';
			$page_data['page_title'] = 'Dashboard';
			$this->load->view('backend/index', $page_data);

		}
		//About
		public function about($param1 = '', $param2 = '')
		{
			if($this->session->userdata('user_type') != 1){
				redirect(site_url('login'), 'refresh');
			}

			if($param1 == 'create'){
				$this->crud_model->create_about();
				$this->session->set_flashdata('success_message', 'About created successfully');
				redirect(site_url('admin/about'), 'refresh');
			}

			if($param1 == 'about_form'){
				$page_data['page_name'] = 'create_about';
				$page_data['page_title'] = 'About form';
				$this->load->view('backend/index', $page_data);
			}

			if($param1 == 'update_about'){
				$page_data['about_id'] = $param2;
				$page_data['page_name'] = 'update_about';
				$page_data['page_title'] = 'Update About';
				$this->load->view('backend/index', $page_data);
			}

			if($param1 == 'update'){
				$this->crud_model->update_about($param2);
				redirect(site_url('admin/about'), 'refresh');
			}

			if($param1 == 'delete'){
				$this->crud_model->delete_about($param2);
				$this->session->set_flashdata('error_message', 'About deleted successfully');
				redirect(site_url('admin/about'), 'refresh');
			}

			if($param1 == ''){
				$page_data['page_name'] = 'about';
				$page_data['page_title'] = 'About';
				$this->load->view('backend/index', $page_data);
			}
		}
		//Service
		public function service($param2 = '', $param3 = '')
		{
			if($this->session->userdata('user_type') != 1){
				redirect(site_url('login'), 'refresh');
			}

			if ($param2 == 'create') {
				$this->crud_model->create_service();
				$this->session->set_flashdata('success_message', 'Service created successfully');
				redirect(site_url('admin/service'), 'refresh');
			}

			if ($param2 == 'create_service')
			 {
				$page_data['page_name'] = 'create_service';
				$page_data['page_title'] = 'Service form';
				$this->load->view('backend/index' , $page_data);
			}
			if ($param2 == 'update_service') 
			{
				$page_data['service_id'] = $param3;
				$page_data['page_name'] = 'update_service';
				$page_data['page_title'] = 'Update Service';
				$this->load->view('backend/index' , $page_data);
			}
			if ($param2 == 'update') {
				$this->crud_model->update_service($param3);
				redirect(site_url('admin/service'), 'refresh');
			}

			if($param2 == 'delete'){
				$this->crud_model->delete_service($param3);
				$this->session->set_flashdata('error_message', 'Services deleted successfully');
				redirect(site_url('admin/service'), 'refresh');
			}

			if ($param2 == '') {
			$page_data['page_name'] = 'service';
			$page_data['page_title'] = 'Service';
			$this->load->view('backend/index' , $page_data);
			}
		}

		// projects
		public function projects($param3 = '' , $param4 = '')
		{
			if($this->session->userdata('user_type') != 1){
				redirect(site_url('login'), 'refresh');
			}

			if ($param3 == 'create')
			 {
				$this->crud_model->projects();
				$this->session->set_flashdata('success_message', 'Projects created successfully');
				redirect(site_url('admin/projects') , 'refresh');
			}

			if ($param3 == 'create_projects')
			 {
				$page_data['page_name'] = 'create_projects';
				$page_data['page_title'] = 'Create form';
				$this->load->view('backend/index' , $page_data);
			}
			if ($param3 =='update_projects') 
			{
				$page_data['projects_id'] = $param4;
				$page_data['page_name'] = 'update_projects';
				$page_data['page_title'] = 'Update projects';
				$this->load->view('backend/index' , $page_data);
			}
			if ($param3 == 'update') 
			{
				$this->crud_model->update_projects($param4);
				redirect(site_url('admin/projects') , 'refresh');
			}

			if($param3 == 'delete'){
				$this->crud_model->delete_projects($param4);
				$this->session->set_flashdata('error_message' ,'Projects deleted successfully' );
				redirect(site_url('admin/projects'), 'refresh');
			}

			if($param3 == ''){
			$page_data['page_name'] = 'projects';
			$page_data['page_title'] = 'Projects';
			$this->load->view('backend/index' , $page_data);
			}
		}
		//Projects_deatils
		public function projects_deatils($param4 = '' ,$param5 ='')
		{
			if($this->session->userdata('user_type') != 1){
				redirect(site_url('login'), 'refresh');
			}

			if ($param4 == 'create') 
			{
			$this->crud_model->project_deatils();
			$this->session->set_flashdata('success_message' , 'Projects deatils create successfully');
			redirect(site_url('admin/projects_deatils') , 'refresh');
			}

			if ($param4 == 'create_projects_deatils')
			 {
				$page_data['page_name'] = 'create_projects_deatils';
				$page_data['page_title'] = 'Projects Deatils';
				$this->load->view('backend/index' ,$page_data);
			}
			if ($param4 =='update') 
			{
				$this->crud_model->project_deatils($param5);
				redirect(site_url('admin/projects_deatils') , 'refresh');
			}

			if($param4 == 'delete'){
				$this->crud_model->delete_projects_deatils($param5);
				$this->session->set_flashdata('error_message' ,'Projects deatils deleted successfully' );
				redirect(site_url('admin/projects_deatils'), 'refresh');
			}

			if ($param4 == 'update_projects_deatils') 
			{
				$page_data['project_deatils_id'] = $param5;
				$page_data['page_name'] = 'update_projects_deatils';
				$page_data['page_title'] = 'Update Projects Deatils';
				$this->load->view('backend/index' ,$page_data);
			}

			if($param4 == ''){
				$page_data['page_name'] = 'projects_deatils';
				$page_data['page_title'] = 'Projects Deatils';
				$this->load->view('backend/index' ,$page_data);
			}
		}
		//Blog
		public function blog($param5 = '', $param6 = '')
		{
			if($this->session->userdata('user_type') != 1){
				redirect(site_url('login'), 'refresh');
			}

			if ($param5 == 'create') 
			{
			$this->crud_model->blog();
			$this->session->set_flashdata('success_message' , 'Blog create successfully');
			redirect(site_url('admin/blog') , 'refresh');
			}
			if ($param5 == 'create_blog') {
			$page_data['page_name'] = 'create_blog';
			$page_data['page_title'] = 'Blog';
			$this->load->view('backend/index' ,$page_data);
			}
			if ($param5 == '') {
			$page_data['page_name'] = 'blog';
			$page_data['page_title'] = 'Update blog';
			$this->load->view('backend/index' ,$page_data);
			}
			
			if ($param5 == 'update') 
			{
			$this->crud_model->update_blog($param6);
			redirect(site_url('admin/blog') , 'refresh');
			}
			if($param5 == 'delete'){
				$this->crud_model->delete_blog($param6);
				$this->session->set_flashdata('error_message' ,'Blog deleted successfully' );
				redirect(site_url('admin/blog'), 'refresh');
			}
			if ($param5 == 'update_blog') 
			{
			$page_data['blog_id'] = $param6;
			$page_data['page_name'] = 'update_blog';
			$page_data['page_title'] = 'update blog';
			$this->load->view('backend/index' ,$page_data);
			}
 		}
 		//Contact
 		public function contact($param6 ='' , $param2 ='')
		{
			if($this->session->userdata('user_type') != 1){
			redirect(site_url('login'), 'refresh');
			}

			if ($param6 == '') {
			$data['status'] = '0';
			$this->db->where('status', 1);
			$this->db->update('contact' , $data);
			$page_data['page_name'] = 'contact';
			$page_data['page_title'] = 'contact';
			$this->load->view('backend/index' , $page_data);
			}
			if($param6 == 'delete'){
				$this->crud_model->delete_contact($param2);
				$this->session->set_flashdata('error_message' ,'Contact deleted successfully' );
				redirect(site_url('admin/contact'), 'refresh');
			}	
		}
		public function account($param1 = '', $param2 ='')
		{
			if($this->session->userdata('user_type') != 1){
				redirect(site_url('login'), 'refresh');
			}
			if($param1 == 'update'){
				$this->crud_model->account($param2);
				redirect(site_url('admin/account'), 'refresh');
			}
			$page_data['user_id'] = $this->session->userdata('user_id');
			$page_data['page_name'] = 'account';
			$page_data['page_title'] = 'account';
			$this->load->view('backend/index', $page_data);
		}

		public function change_pass(){
			$this->crud_model->change_pass();
			redirect(site_url('admin/account'), 'refresh');
		}
	}




