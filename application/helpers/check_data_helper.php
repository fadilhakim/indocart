<?php

	function check_image_product($id)
	{
		
		$CI =& get_instance();
		
		$CI->load->model("model_product");
		$dt_sparepart = $CI->model_product->getproductfromID($id);
		
		$base_url_image = base_url('assets/images/products/');	
		$path_image = "assets/images/products/";
		$full_url_image = base_url('assets/images/no-image.png');
		
		if(!empty($dt_sparepart["product_image_1"]) && is_file($path_image.$dt_sparepart["product_image_1"]))
		{
			$file_name = $dt_sparepart["product_image_1"];
			
			$full_url_image = $base_url_image.$file_name;
			$full_path_image = $path_image.$file_name;
		}
		
		return $full_url_image;
	}
	
	function check_img_spone($sparepart_id,$int)
	{
		$CI =& get_instance();
		
		$CI->load->model("model_sparepart");
		$dt_sparepart = $CI->model_sparepart->get_sparepart_detail($sparepart_id);
		
		$base_url_image = base_url('assets/sp/images/products/');	
		$path_image = "assets/sp/images/products/";
		$full_url_image = base_url('assets/sp/images/no-image.png');
		
		if(!empty($dt_sparepart["sparepart_image_$int"]) && is_file($path_image.$dt_sparepart["sparepart_image"]))
		{
			$file_name = $dt_sparepart["sparepart_image_$int"];
			
			$full_url_image = $base_url_image.$file_name;
			$full_path_image = $path_image.$file_name;
		}
		
		
		return $full_url_image;
		
	}