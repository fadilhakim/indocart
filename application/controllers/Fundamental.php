<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fundamental extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');
		$this->load->model('model_home');
		$data['news'] = $this->model_home->list_news()->result();
		$data['slider'] = $this->model_home->list_slider()->result();
		$this->load->view('v_home_2',$data);
		$this->load->view('templates/v_t_footer');
	}

		public function page404()
	{
		$this->load->view('404page');

	}

	public function about()
	{
		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');
		$this->load->view('v_about');
		$this->load->view('templates/v_t_footer');
	}

	public function product()
	{
		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');
		$this->load->view('v_product_category');
		$this->load->view('templates/v_t_footer');
	}


	public function contact()
	{
		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');
		$this->load->view('v_contact');
		$this->load->view('templates/v_t_footer');
	}

	public function maintenance()
	{
		$this->load->view('v_maintenance');
	
	}

	public function request()
	{
	
		$email = $this->input->post('email');
		$nama = $this->input->post('name');
		$hp = $this->input->post('hp');
		$address = $this->input->post('address');	
		$keterangan = $this->input->post('keterangan');
		$this->load->model('model_user');
		if ($this->model_user->sendRequest($email , $nama , $hp ,$address , $keterangan))
		{
			// successfully sent mail
			$this->session->set_flashdata('msg','You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!');
			redirect('indocart');
		}
		else
		{
			// error
			$this->session->set_flashdata('msg','Oops! Error.  Please try again!');
			redirect('indocart');
			
		}
			
	}

}
