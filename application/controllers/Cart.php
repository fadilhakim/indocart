<?php
 
class cart extends CI_Controller { // Our Cart class extends the Controller class
     
    public function __construct(){
      parent::__construct();
   	  $this->load->model('model_cart');
  	}

	function add_cart_item(){


	   $getrow['getcart'] = $this->model_cart->validate_add_cart_item();
	   
	    if(count($getrow['getcart']) > 0){
	     	
	     	$id = $this->input->post('product_id');
	     	$price = $this->input->post('product_price');
	     	$cty = $this->input->post('quantity');
	     	$image = $this->input->post('product_image');
	     	$name = $this->input->post('product_name');
	     	$manu = $this->input->post('product_category');
	     	$desc = $this->input->post('product_desc');
	     	$uom = $this->input->post('uom');
	     	$id_ajak = $this->input->post('ajax');
	     	
	    	foreach ($getrow['getcart'] as $row)
	        {
	            // Create an array with product information
	            $data = array(
			        'id'      => $id,
			        'qty'     => $cty,
			        'price'   => $price,
			        'name'    => $name,
			        'image'   => $image,
			        'desc'   => $desc,
			        'uom'   => $uom,
			        'manu' => $manu
			        /*'options' => array('image' => $image , 'code' => $product_code , 'manu' => $manu)*/
			);
	 
	            // Add the data to the cart using the insert function that is available because we loaded the cart library
	            
	            $this->cart->insert($data);

	            redirect($this->agent->referrer());
	        }

	        /* $i = 1;
	         foreach($this->cart->contents() as $items);
	        echo  $items['product_name'];
	        die();*/

	     
	    } else{
	        // Nothing found! Return FALSE! 
	        return FALSE;
	    }
	        
	}

	function show_cart(){
		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');
    	$this->load->view('v_cart');
    	$this->load->view('templates/v_t_footer');
	}

	function update_cart(){

		// Get the total number of items in cart
	    $total = count($this->cart->contents());
	    // Retrieve the posted information
	    $item = $this->input->post('rowid');
	    $qty = $this->input->post('qty');
	 	/*echo $qty;
	 	die();*/
	    // Cycle true all items and update them
	    for($i=0;$i < $total;$i++)
	    {
	        // Create an array with the products rowid's and quantities. 
	        $data = array(
	           'rowid' => $item[$i],
	           'qty'   => $qty[$i]
	        );
	        //echo $item[$i];

	        // Update the cart with the new information
	        $this->cart->update($data);
	    }
	 	

	    /*$this->model_cart->validate_update_cart();*/

	    redirect($this->agent->referrer());
	}

	function removeCartItem() {

		$rowid=$this->uri->segment(3);
        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );

        $this->cart->update($data);
        redirect($this->agent->referrer());
	}

	function empty_cart(){
    	$this->cart->destroy(); // Destroy all cart data
    	redirect('products/all'); // Refresh te page
	}

	function send_email_invoice()

	{

		// $this->load->model("model_user");
		$this->load->helper('check_data');
		$this->load->model("model_product");

		// $user_session = $this->session->all_userdata();
		$name = $this->input->post('name');
		$hp = $this->input->post('hp');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$keterangan = $this->input->post('keterangan');

		$dt_stat = "error";

		$dt_msg  = '<div class="alert alert-danger alert-dismissable">

						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

						Silakan login terlebih dahulu

					</div>';

			$date = date("d-m-Y"); 

			$name_pdf = "Surat Permintaan Barang $date.pdf";

			// $data["user_sess"] = $user_session;

			$data["name_pdf"] = $name_pdf;
			$data['name'] = $name;
			$data['email'] = $email;
			$data['keterangan'] = $keterangan;
			$data['address'] = $address;


			$html =  $this->load->view("invoice/invoice-fancy-page-inline",$data,true); 
			$from_email =  $email ;
			
			$to_email = "sales1@indocart.com";

			$subject = "$name_pdf";

			$message = $html;
			
			$config['protocol']  = 'smtp';
			$config['mailtype']  = 'html';
			$config['priority']  = '1';
			$config['charset']   = 'iso-8859-1';
			$config['newline']   = "\r\n"; //use double quotes*/
			$config['wordwrap']  = TRUE;
			$config['smtp_host'] = 'ssl://indocart.com';
			$config['smtp_port'] = 465;
			$config['smtp_user'] = 'sales1@indocart.com';
			$config['smtp_pass'] = 'Sales182';

			$this->email->initialize($config);

			//send mail
			$this->email->from($from_email, 'Sales Indocart');
			$this->email->to($to_email);
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->send();

			redirect("cart/thankyou");
	}

	function thankyou() {
		$this->load->view('templates/v_t_meta');
		$this->load->view('templates/v_t_header');
    	$this->load->view('v_thankyou');
    	$this->load->view('templates/v_t_footer');
	}
 
}