<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

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

	public function __construct(){
      parent::__construct();
      
      $this->load->helper("url");
      $this->load->model('model_product');
      $this->load->library('pagination');
  	}


	public function view()
	{

		$cat = $this->uri->segment(2);
		$config = array();
        $config["base_url"] = base_url() . "/product/".$cat;        
        $config["total_rows"] = $this->model_product->count_product_by_cat($cat);
        $this->model_product->count_product_by_cat($cat) ;

		// Use pagination number for anchor URL.
		$config['use_page_numbers'] = TRUE;

		//Set that how many number of pages you want to view.
		$config['num_links'] =  $this->model_product->count_product_by_cat($cat);


		// Open tag for CURRENT link.
		$config['cur_tag_open'] = '<li class="active"><span>';

		// Close tag for CURRENT link.
		$config['cur_tag_close'] = '</span></li>';

		/*$config['next_tag_open'] = '<li><span>';

		$config['next_tag_close'] = '</span></li>';*/

		// By clicking on performing NEXT pagination.
		$config['next_link'] = '<li><span>Next';

		// By clicking on performing PREVIOUS pagination.
		$config['prev_link'] = '<li><span>Prev';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

        $limit = $config["per_page"] = 9;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["product"] = $this->model_product->fetch_product_by_category($cat ,$limit, $page);
        $data["links"] = $this->pagination->create_links();

		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');

		$data['product_cat'] = $this->model_product->getCategory($cat)->result();

		$this->load->view('v_product',$data);
		$this->load->view('templates/v_t_footer');
	}
	public function view_list()
	{

		$cat = $this->uri->segment(2);
		$config = array();
        $config["base_url"] = base_url() . "/product-list/".$cat;        
        $config["total_rows"] = $this->model_product->count_product_by_cat($cat);
        $this->model_product->count_product_by_cat($cat) ;

		// Use pagination number for anchor URL.
		$config['use_page_numbers'] = TRUE;

		//Set that how many number of pages you want to view.
		$config['num_links'] =  $this->model_product->count_product_by_cat($cat);


		// Open tag for CURRENT link.
		$config['cur_tag_open'] = '<li class="active"><span>';

		// Close tag for CURRENT link.
		$config['cur_tag_close'] = '</span></li>';

		/*$config['next_tag_open'] = '<li><span>';

		$config['next_tag_close'] = '</span></li>';*/

		// By clicking on performing NEXT pagination.
		$config['next_link'] = '<li><span>Next';

		// By clicking on performing PREVIOUS pagination.
		$config['prev_link'] = '<li><span>Prev';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

        $limit = $config["per_page"] = 9;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["product"] = $this->model_product->fetch_product_by_category($cat ,$limit, $page);
        $data["links"] = $this->pagination->create_links();

		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');

		$data['product_cat'] = $this->model_product->getCategory($cat)->result();

		$this->load->view('v_product_list',$data);
		$this->load->view('templates/v_t_footer');
	}

	public function detail($slug,$cat,$id)
	{

		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');

		
		$slug=$this->uri->segment(3);
		$cat = $this->uri->segment(4);
		$id=$this->uri->segment(5);
		$page = 'v_detail_product';

		/*$getimage = $this->model_product->getimagefromID($product_id);
		$data['getimagefromID'] = $getimage;
		*/
		// $getmanufacturer = $this->model_manufacturer->getManufacturer($id_brand);
		// $data['manufacturer'] = $getmanufacturer;
		$this->load->model('model_manufacturer');
		$rp = $this->model_manufacturer->related($cat);
		$data['related'] = $rp;

		$getcatproduct = $this->model_product->getproductfromSLUGandID($id, $slug);
		$data['product'] = $getcatproduct;
		

		$this->load->view($page, $data);
		$this->load->view('templates/v_t_footer');
	}

	public function category() {


		$this->load->model('model_manufacturer');;	
		$data['category'] = $this->model_product->list_category()->result();

		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');
		$this->load->view('v_product_category',$data);
		$this->load->view('templates/v_t_footer');

	}

	public function search(){

		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');
		$keyword=$this->uri->segment(2);
		$keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->model_product->searchProduct($keyword);
        $this->load->view('v_search_result',$data);
        $this->load->view('templates/v_t_footer');
	}
}

