<div id="" class="container product-list">
    <div class="row">
        <?php foreach ($product_cat as $category) { ?>
            <div class="col-lg-12"> 
                <h1 class="f-gotham-medium"><?php echo $category->category_title; ?></h1>
            </div>
        <?php } ?>

        <?php foreach ($product as $p) { ?>
    	<div class="col-lg-4">
            <div class="thumbnail">
              
              <a href="<?php echo base_url('product/detail/').$p->product_slug.'/'.$p->category_url.'/'.$p->product_id; ?>">
              <div style="width:100%; height:250px;">
                <?php if($p->product_image_1 == '') { ?>
                    <img class="img-responsive center-block" style="margin-bottom:0px;" src="<?php echo base_url('assets/images/no-image.png')?>">
                <?php }else { ?>
                    <img class="img-responsive center-block" style="margin-bottom:0px;" src="<?php echo base_url('assets/images/products/').$p->product_image_1; ?>">
                <?php } ?><br>
              </div>
                <div class="caption">
                  <p style="padding-left:5%; height:60px; over-flow:hidden;"><?php echo $p->product_title; ?></p>
                  <span style="padding-left:5%; display:block;">
                      <?php echo $p->product_descrption; ?>
                  </span>
                </div>
              </a>
              <?php echo form_open('cart/add_cart_item'); ?>
                 <input type="hidden" name="product_id" value="<?php echo $p->product_id;?>">
                  <input type="hidden" name="product_price" value="<?php echo $p->price?>">
                  <input type="hidden" name="product_name" value="<?php echo  $p->product_title; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $p->product_image_1?>">
                  <input type="hidden" name="product_category" value="<?php echo  $p->product_category ?>">
                  <input type="submit" class="add-to-cart1" value="Add To Cart">
              <?php echo form_close(); ?>
            </div>
    	</div>
        <?php } ?>

    </div>
    <div class="row">
        <div class="col-lg-6 pagination">

            <?php echo $links; ?>
        </div>
        <div class="col-lg-6">
            <div class="checkout-big">
                <a href="<?php echo base_url('cart/show_cart'); ?>">
                    
                </a>
            </div>
        </div>
    </div>
</div>