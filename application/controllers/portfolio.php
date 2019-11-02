<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Portfolio extends CI_controller
	{
		public function index()
		{
			$this->load->view('frontend/index');
		}
	
	public function contact($param6 ='' , $param2 ='')
		{

		if ($param6 == 'create')
			{
			$this->crud_model->contact();
			redirect(site_url('portfolio') , 'refresh');
			}
		}	
	}

?>