<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_controller
	{
		function index()
		{
			$this->load->view('backend/login');
		}

		function validation(){
			$check_user['email'] = $this->input->post('email');
			//$check_user['password'] = $this->input->post('password');
			$users = $this->db->get_where('user', $check_user); //login select
			if($users->num_rows() > 0){
				$user = $users->row();
				if($user->password == md5($this->input->post('password'))){
					$this->session->set_userdata('user_type', 1);
					$this->session->set_userdata('user_id', $user->id);
					$this->session->set_userdata('user_name', $user->name);
					redirect(site_url('admin'), 'refresh');
				}else{
					$user->password.'<br>';
					md5($this->input->post('password'));
					// $this->session->set_flashdata('error_message', 'Your password is wrong');
					redirect(site_url('login'), 'refresh');
				}
			}else{
				// $this->session->set_flashdata('error_message', 'Your email is not valid');
				redirect(site_url('login'), 'refresh');
			}
		}

		function logout(){
			$this->session->set_userdata('user_type', 0);
			redirect(site_url('login'), 'refresh');
		}
	}