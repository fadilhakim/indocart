<?php
class model_user extends CI_Model
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
         $this->load->helper(array('form','url'));
      	 $this->load->library(array('session', 'form_validation', 'email'));
        	
    }

	//activate user account
	function verifyEmailID($key)
	{
		$data = array('act_status' => 1);
		$this->db->where('md5(email)', $key);
		return $this->db->update('user_tbl', $data);
	}

	function sendRequest($email , $nama , $hp ,$address , $keterangan)
	{
		$from_email = 'indocart99@gmail.com';
		$subject = 'Anda Mendapatkan Permintaan Penawaran Harga';
		$message = 'Halo Indocart,<br /><br />Anda mendapatkan permintaan penawaran harga dari.<br /><br /> Nama : ' . $nama . ' <br /><br /> Email : '.$email.'<br /><br />
		Nomor Telepon/HP : '.$hp.'<br><br> Alamat / Lokasi : '.$address.'<br><br>'.$keterangan.'<br /><br />Terima Kasih<br />';
		
		//configure email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
		$config['smtp_port'] = '465'; //smtp port number
		$config['smtp_user'] = $from_email;
		$config['smtp_pass'] = 'indocart1234'; //$from_email password
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes
		$this->email->initialize($config);
		
		//send mail
		$this->email->from($from_email, 'Indocart User Request');
		$this->email->to('fadilhakim182@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);
		return $this->email->send();
	}
}