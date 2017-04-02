<div class="container list-view">
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
		<div class="col-lg-12">

			<div class="table-responsive">
			  <table class="table">
			    <thead>
			    	<tr>
			    		<th class="th-name">Nama Produk</th>
			    		<th class="th-uom">UOM</th>
			    		<th class="th-desc">Description</th>
			    		<th class="th-action"></th>
			    	</tr>
			    </thead>
			    <tbody>
			    	<?php foreach ($product as $p) { ?>
			    	<tr>
			    		<td><p><?php echo $p->product_title; ?></p></td>
			    		<td></td>
			    		<td><p> <?php echo $p->product_descrption; ?></p></td>
			    		<td> <?php echo form_open('cart/add_cart_item'); ?>
			                 <input type="hidden" name="product_id" value="<?php echo $p->product_id;?>">
			                  <input type="hidden" name="product_price" value="<?php echo $p->price?>">
			                  <input type="hidden" name="product_name" value="<?php echo  $p->product_title; ?>">
			                  <input type="hidden" name="product_image" value="<?php echo $p->product_image_1?>">
			                  <input type="hidden" name="product_category" value="<?php echo  $p->product_category ?>">
			                  <input type="submit" class="add-to-cart1" value="Add To Cart">
			                  <div class="cart-icon"></div>
			              <?php echo form_close(); ?>
			             </td>
			    	</tr>
			    	<?php } ?>
			    </tbody>
			  </table>
			</div> 
		</div>
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