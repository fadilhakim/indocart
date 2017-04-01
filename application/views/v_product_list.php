<div class="container">
	<div class="row list-view">
		<?php foreach ($product_cat as $category) { ?>
            <div class="col-lg-12"> 
                <h1 style="padding-left:3%" class="f-gotham-medium"><?php echo $category->category_title; ?></h1>
            </div>
        <?php } ?>
		<div class="col-lg-12">

			 <div class="table-responsive">
			  <table class="table-striped">
			    <thead>
			    	<tr>
			    		<td>Nama Produk</td>
			    		<td>UOM</td>
			    		<td>Description</td>
			    		<td></td>
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
			              <?php echo form_close(); ?>
			             </td>
			    	</tr>
			    	<?php } ?>
			    </tbody>
			  </table>
			</div> 
		</div>
	</div>

</div>