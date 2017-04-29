<div id="" class="container product-list">
    <div class="row">
        <?php foreach ($product_cat as $category) { ?>
           <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-10">
                  <h1 class="f-gotham-medium"><?php echo $category->category_title; ?></h1>
                </div>
                <div class="col-lg-2">
                  <div class="grid">
                    <a style="display:block; height:35px; width:35px;" href="<?php echo base_url('product/'.$category->category_url.'/1' ); ?>"></a>
                  </div>
                  <div class="list">
                    <a style="display:block; height:35px; width:35px;" href="<?php echo base_url('product-list/'.$category->category_url.'/1' ); ?>"></a>
                  </div>
                </div>
              </div> 
                
            </div>
        <?php } ?>

        <?php foreach ($product as $p) { ?>
    	<div class="col-lg-4">
            <div class="thumbnail">
              
              <a href="<?php echo base_url('product/detail/').$p->product_slug.'/'.$p->category_url.'/'.$p->product_id; ?>">
              <div style="width:100%; max-height:260px; overflow:hidden; positon:relative;">
                <?php if($p->hotpromo != 0) { ?>
                  <img class="img-responsive hot-promos" style="margin-bottom:0px;" src="<?php echo base_url('assets/images/products/hot-promo.png')?>">
                <?php } ?>
                <?php if($p->product_image_1 == '') { ?>
                    <img class="img-responsive center-block" style="margin-bottom:0px;" src="<?php echo base_url('assets/images/no-image.png')?>">
                <?php }else { ?>
                    <img class="img-responsive center-block" style="margin-bottom:0px;" src="<?php echo base_url('assets/images/products/').$p->product_image_1; ?>">
                <?php } ?><br>
              </div>
                <div class="caption">
                  <p style="padding-left:5%; height:35px; over-flow:hidden;">
                     <?php 
                        if (strlen($p->product_title) <= 30 ) {
                          echo $p->product_title;
                        } else {
                          echo substr($p->product_title , 0, 30) . '...';
                        };  
                    ?>
                  </p>
                  <style type="text/css">
                    .pdalamp p {
                      font-family: cabin !important; font-size: 13px !important; line-height: 27px !important;
                    }
                  </style>
                  <span class="pdalamp" style="padding-left:5%; display:block; height:60px;  overflow:hidden; font-family: cabin !important; line-height: 27px;">
                      <?php echo $p->product_descrption; ?>
                  </span>
                  <span> 
                    <?php
                        if($p->uom !== ' - '){ ?>
                            <strong style='padding-left:5%; display:block;'>UOM : <?php echo $p->uom; ?> </strong>
                      <?php  } ?>
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