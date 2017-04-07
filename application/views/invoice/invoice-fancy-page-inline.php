<?php
  $due_intr = "24 hours";
  
  $create_date= date("d M, Y");
  
  $effectiveDate = strtotime("+".$due_intr, strtotime($create_date));
  
  $due_date = date("d M, Y",$effectiveDate);
  
 //  $user_sess = $this->session->all_userdata();
  
 // // print_r($user_sess);exit;
  
 //  $detail_user = $this->model_user->get_user_detail($user_sess["user_id"]);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$name_pdf?></title>
   
    
  </head>
  <body style="position:relative;width:21cm;height:29.7cm;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;color:#555555;background-color:#FFFFFF;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;font-family:SourceSansPro;font-size:10px;" >
    <header class="clearfix" style="padding-top:10px;padding-bottom:10px;padding-right:0;padding-left:0;margin-bottom:20px;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#AAAAAA;font-size:14px;" >
      <div id="logo" style="float:left;width:45%;margin-top:8px;" >
        <img src="<?=base_url("assets/images/indocart-logo-web.png")?>" >
        
      </div>
      <div id="company" style="float:right;width:55%;text-align:right;" >
        <!-- <h2 class="name" style="font-size:1.4em;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;" ><?=TITLE?></h2> -->
        <div><?=ADDRESS?></div>
        <div><?=PHONE?></div>
        <div><?=INFO_EMAIL?></div>
      </div>
      <span style="clear:both;" ></span>
    </header>
    <main>
      <div id="details" class="clearfix" style="margin-bottom:50px;" >
        <div id="client" style="padding-left:6px;border-left-width:6px;border-left-style:solid;border-left-color:#0087C3;float:left;width:45%;" >
          <div class="to" style="color:#777777;" >Surat Penawaran Dari:</div>
          <h2 class="name" style="font-size:1.4em;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;" ><?=$name ?></h2>
          <div class="address"><?=$address ?></div>
          <div class="email"><a href="<?=$email ?>" style="color:#0087C3;text-decoration:none;" ><?=$email ?></a></div>
        </div>
        <div id="invoice" style="float:right;text-align:right;width:45%;" >
          <h1 style="color:#0087C3;font-size:2.4em;line-height:1em;font-weight:normal;margin-top:0;margin-bottom:0;margin-right:;margin-left:10px;" >SURAT PENAWARAN HARGA</h1>
          <div class="date" style="font-size:1.1em;color:#777777;" >Date of Invoice: <?=$create_date?></div>
          <div class="date" style="font-size:1.1em;color:#777777;" >Due Date: <?=$due_date?></div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0" style="width:100%;border-collapse:collapse;border-spacing:0;margin-bottom:20px;" >
        <thead>
          <tr>
            <th class="" style="padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;background-color:#EEEEEE;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;text-align:center;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#FFFFFF;white-space:nowrap;font-weight:normal;" >IMAGE</th>
            <th class="desc" style="padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;background-color:#EEEEEE;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#FFFFFF;white-space:nowrap;font-weight:normal;text-align:left;" >PRODUCT NAME</th>
            <th class="qty" style="padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;background-color:#EEEEEE;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;text-align:center;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#FFFFFF;white-space:nowrap;font-weight:normal;" >QUANTITY</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $i = 0;
      		    foreach($this->cart->contents() as $items)
    			{
				    $detail_product = $this->model_product->getproductfromID($items['id']);
		      ?>
          <tr>
            <td class="" style="padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;background-color:#EEEEEE;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#FFFFFF;text-align:center;" >
            <img  src="<?=check_image_product($items['id'])?>" width="100" height="100" /></td>
            <td class="desc" style="padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;background-color:#EEEEEE;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#FFFFFF;text-align:center;" ><?=$detail_product->product_detail?></td>
            <td class="qty" style="padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;background-color:#EEEEEE;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#FFFFFF;text-align:center;font-size:1.2em;" ><?=$items["qty"]?> </td>
          </tr>
          <?php
           $i++;
			       }
		      ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2" style="border-bottom-width:1px;border-bottom-color:#FFFFFF;text-align:right;padding-top:10px;padding-bottom:10px;padding-right:20px;padding-left:20px;background-color:#FFFFFF;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;border-bottom-style:none;font-size:1.2em;white-space:nowrap;border-top-width:1px;border-top-style:solid;border-top-color:#AAAAAA;" ></td>
            <td colspan="2" style="border-bottom-width:1px;border-bottom-color:#FFFFFF;text-align:right;padding-top:10px;padding-bottom:10px;padding-right:20px;padding-left:20px;background-color:#FFFFFF;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;border-bottom-style:none;font-size:1.2em;white-space:nowrap;border-top-width:1px;border-top-style:solid;border-top-color:#AAAAAA;" >SUBTOTAL : <?php echo $i; ?></td>
          </tr>
          <tr>
            <td colspan="2" style="border-bottom-width:1px;border-bottom-color:#FFFFFF;text-align:right;padding-top:10px;padding-bottom:10px;padding-right:20px;padding-left:20px;background-color:#FFFFFF;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;border-bottom-style:none;font-size:1.2em;white-space:nowrap;border-top-width:1px;border-top-style:solid;border-top-color:#AAAAAA;" >
            	<!-- SHIPPING -->
            </td>
             <td colspan="2" style="border-bottom-width:1px;border-bottom-color:#FFFFFF;text-align:right;padding-top:10px;padding-bottom:10px;padding-right:20px;padding-left:20px;background-color:#FFFFFF;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;border-bottom-style:none;font-size:1.2em;white-space:nowrap;border-top-width:1px;border-top-style:solid;border-top-color:#AAAAAA;" >
            	<!-- TAX -->
            </td>
            
          </tr>
        </tfoot>
      </table>
      <div id="thanks" style="font-size:2em;margin-bottom:50px;" >Thank you!</div>
      <div id="notices" style="padding-left:6px;border-left-width:6px;border-left-style:solid;border-left-color:#0087C3;" >
        <div>NOTICE:</div>
        <div class="notice" style="font-size:1.2em;" > - </div>
      </div>
    </main>
    <footer style="color:#777777;width:100%;height:30px;position:absolute;bottom:0;border-top-width:1px;border-top-style:solid;border-top-color:#AAAAAA;padding-top:8px;padding-bottom:8px;padding-right:0;padding-left:0;text-align:center;" >
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>