<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php foreach ($product_cat->result() as $row) {
    
      $product_id=$row->product_id;
      $product_title=$row->product_title;
      $price=$row->price;
      $product_desc=$row->product_descrption;
      $product_code=$row->product_code;
      $product_category=$row->product_category;
      $category_url=$row->category_url;
      $hotpromo=$row->hotpromo;
      $product_image_1=$row->product_image_1;

}

?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Edit Product</h4>
                    <div class="row">
                        <div class="col-lg-12">
                 
                            
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Product Name : <?php echo $product_title; ?></h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/product_f'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $product_id; ?>" name="product_id" type="hidden">
                                            <input class="form-control" value="<?php echo $product_title; ?>" name="product_title" required placeholder="Change Title " type="text">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="product_category">
                                                <option selected="selected" value="<?php echo $category_url; ?>"><?php echo $product_category; ?></option>
                                                <?php foreach ($category as $c) { ?> 
                                                    <option value="<?php echo $c->category_url; ?>"><?php echo $c->category_title; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Code</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $product_code; ?>" name="product_code" required placeholder="Change Product Code " type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $price; ?>" name="price" required placeholder="Change Title " type="text">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Hot Promo</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="hotpromo">
                                                <?php if ($hotpromo == '0') {?>
                                                    <option selected="selected" value="<?php echo $hotpromo; ?>">No</option>
                                                <?php } else { ?>
                                                    <option selected="selected" value="<?php echo $hotpromo; ?>">Yes</option>
                                                <?php } ?>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Image Group</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="col-sm-3">
                                                        <label class="control-label" style="text-align:center; display:block;">Product Thumbnail</label><br>

                                                        <?php if($product_image_1 != '') {?>
                                                            <img src="<?php echo base_url('assets/images/products/').$product_image_1; ?>" class="img-responsive">
                                                        <?php } else {?>
                                                            <img src="<?php echo base_url('assets/images/no-image.png')?>" class="img-responsive">
                                                        <?php } ?>

                                                        <label class="col-sm-12 control-label" style="text-align:center;">Select New Image</label>
                                                        <div class="col-sm-12">
                                                        <br>
                                                        <input class="form-control" value="<?php echo $product_image_1; ?>" name="product_image_old_1" type="hidden">
                                                            <input class="" name="product_image_new_1" type="file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Product Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor2" class="form-control" name="product_desc"><?php echo $product_desc; ?></textarea>
                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                            CKEDITOR.replace( 'editor2' );
                                            CKEDITOR.add            
                                    </script>

                                    <script type="text/javascript">
                                            CKEDITOR.replace( 'editor3' );
                                            CKEDITOR.add            
                                    </script>
                                    <div class="form-group text-right m-b-0">
                                        <button class="sa-success-product-edit btn btn-primary waves-effect waves-light" type="submit";>
                                            Edit
                                        </button>
                                    </div>
                                </form>
                            </div>

                    
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <footer class="footer">
                2017 © Indocart | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">www.indocart.com</a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->



</div>