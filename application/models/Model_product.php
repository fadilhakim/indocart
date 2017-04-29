<?php 

class Model_product extends CI_Model {

		public function __construct() {
 		$this->load->database();
 		}

		public function list_product() {

			$product = $this->db->get('product_tbl');
			return $product;
		}

		public function getproductfromSLUGandcat($slug , $cat){

		$getslugproduct = $this->db->get_where('product_tbl',array('category_url' => $slug , 'product_slug' => $cat ));

		return $getslugproduct;

		}

		public function list_category() {

			$category = $this->db->get('category_tbl');
			return $category;
		}

		public function getCategory($cat){

			$getcate = $this->db->get_where('category_tbl',array('category_url' => $cat));

			return $getcate;

		}

		public function get_stock_status() {

			$stock = $this->db->get('product_stock_status');
			return $stock;
		}

		public function getimagefromID($product_id){

		$getimageId = $this->db->get_where('product_image_tbl',array('product_id' => $product_id));

		return $getimageId;

		}

		public function getproductfromID($id){

		//$this->db->get_where('product_tbl',array('product_id' => $id));
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_id = '.$id.'');
		$query = $this->db->get();
			if($query)
			{
				return $query->result();	
			}
			else
			{
				return false;
			}
		}

		public function getproductfromSLUGandID($id , $slug){

		$getslugproduct = $this->db->get_where('product_tbl',array('product_id' => $id , 'product_slug' => $slug ));
		return $getslugproduct;

		}

		public function getproductfromSLUG($slug){

		$getslugproduct = $this->db->get_where('product_tbl',array('product_slug' => $slug));

		return $getslugproduct;

		}


		public function getfeatured(){

		$getfeatured = $this->db->get_where('product_tbl',array('featured' => '1'));

		return $getfeatured;

		}

		public function searchProduct($keyword){

			$this->db->like('product_slug',$keyword);
        	$query  =   $this->db->get('product_tbl');
        	return $query->result();

		}

		public function count_product() {
			return $this->db->count_all("product_tbl");
		}

		public function fetch_product($limit, $start = 0) {
        $qry= $this->db->get("product_tbl", $limit, $start);
    	return $qry->result();

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
   		}

   		public function count_product_by_cat($cat) {

			// $query = $this->db->where('category_url', $cat)->get('product_tbl');
			// return $query->num_rows();

			$this->db->select('*');
       		$this->db->from('product_tbl');
	        $this->db->where('category_url',$cat);
	        $query = $this->db->get();
	        return  $query->num_rows();

		}

   		public function fetch_product_by_category($cat , $limit, $start) {
  	 		$this->db->select('*');
       		$this->db->from('product_tbl');
	        $this->db->where('category_url',$cat);
	        // $this->db->order_by("product_id","asc");
	        $this->db->limit($limit, $start);
	        // echo  $this->db->last_query();
	        // die();
	        $query = $this->db->get();

	        return $query->result();
  	 	}


}