<?php
foreach($product->result() as $row){
  
  $product_title=$row->product_title;
  $product_id=$row->product_id;
  $product_descrption=$row->product_descrption;
  $price=$row->price;
  $product_code=$row->product_code;
  $product_category=$row->product_category;
  $uom=$row->uom;
  $product_image_1=$row->product_image_1;

}

?>

<div id="" class="container">
  <div class="col-lg-8 col-lg-offset-2">
      <div class="row">

        <h1 class="f-gotham-medium" style="border-bottom:1px solid #000; font-size:30px; 
        text-transform:uppercase; padding:35px 0 15px 0;">Product</h1>

      	<div class="col-lg-5">
              
      		
      		<?php if($product_image_1 == '') { ?>
      			<img class="img-responsive center-block" style="margin-bottom: 35px; margin-top:35px" src="<?php echo base_url('assets/images/no-image.png')?>">
      		<?php }else { ?>
      			<img class="img-responsive center-block" style="margin-bottom: 35px; margin-top:35px" src="<?php echo base_url('assets/images/products/').$product_image_1; ?>">
      		<?php } ?>
      	
      	</div>
        <div class="col-lg-7">
            <div class="info">
              <p class="f-gotham-bold"><?php echo $product_title; ?></p>

              <p> <?php
                  if($uom !== ' - '){ ?>
                      UOM : <?php echo $uom; ?> 
                  <?php  } ?>
              </p>
              <p class="title-desc" style="margin-bottom:0px;"><strong>Description :</strong></p>
              <p class="text-desc">
                <?php echo $product_descrption; ?>
              </p>
              <?php echo form_open('cart/add_cart_item'); ?>
              <div class="col-sm-4 xs-spacer20">
                  <input type="hidden" min="1" name="quantity" id="prod_qty" class="spinc" value="1" />
              </div>
              <div class="cart-btn">
                      <input type="hidden" name="product_id" value="<?php echo $product_id;?>">
                      <input type="hidden" name="product_price" value="<?php echo $price?>">
                      <input type="hidden" name="product_name" value="<?php echo  $product_title; ?>">
                      <input type="hidden" name="product_image" value="<?php echo $product_image_1?>">
                      <input type="hidden" name="product_desc" value="<?php echo  $product_descrption ?>">
                      <input type="hidden" name="product_category" value="<?php echo  $product_category ?>">
                      <input type="submit" class="add-to-cart1" value="Add To Cart">
                  <?php echo form_close(); ?>
              </div>
            </div>
        </div>
       
      </div>

      <div class="row similiar">
        <h2>SIMILIAR ITEMS</h2>
        <div class="owl-carousel similiar_product">
          <?php foreach ($related as $rpr) { ?>
          <div class="product-thumb clearfix">
            <div class="col-md-12">
              <div class="thumbnail">
                  <a href="<?php echo base_url('product/detail/').$rpr->product_slug.'/'.$rpr->category_url.'/'.$rpr->product_id;; ?>">
                  <?php if($rpr->product_image_1 == '') { ?>
                    <img class="img-responsive center-block" style="margin-bottom:0px;" src="<?php echo base_url('assets/images/no-image.png')?>">
                  <?php }else { ?>
                      <img class="img-responsive center-block" style="margin-bottom:0px;" src="<?php echo base_url('assets/images/products/').$rpr->product_image_1; ?>">
                  <?php } ?>
                  </a>
                  <div class="caption">
                    <a href="<?php echo base_url('product/detail/').$rpr->product_slug.'/'.$rpr->category_url.'/'.$rpr->product_id;; ?>">
                      <p class="title"><strong><?php echo $rpr->product_title; ?></strong></p>
                      <p class="desc"><?php echo $rpr->product_descrption; ?></p>
                      <p class="uom"><?php if($uom !== ' - '){ ?>
                      UOM : <?php echo $uom; ?> 
                      <?php  } ?>
                      </p>
                    </a>
                    <a href="#" class="add-to-cart1">Add To Cart</a>
                  </div>
             
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
  </div>
</div>