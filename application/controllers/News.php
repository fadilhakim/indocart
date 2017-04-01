<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent:: __construct();

	  $this->load->helper("url");
      $this->load->model('model_news');
      $this->load->library('pagination');
	}
	public function index()
	{

		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');
		$data['news'] = $this->model_news->list_news()->result();
		$this->load->view('v_news',$data);
		$this->load->view('templates/v_t_footer');
	}

	public function detail()
	{

		
		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');

		$id=$this->uri->segment(3);
		$page = 'v_detail_news';

		$news = $this->model_news->getnewsById($id);
		$data['news'] = $this->model_news->list_news()->result();
		$data['news_detail'] = $news;

		$this->load->view($page, $data);
		$this->load->view('templates/v_t_footer');
	}

}
