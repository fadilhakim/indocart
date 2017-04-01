<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">
                        <a href="<?php echo base_url('admin/product'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">Add New Product</a>
                        <a href="<?php echo base_url('admin/product-list'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">List Product</a>
                        <a href="<?php echo base_url('admin/product-category'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">Category List</a>
                    </h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/insert/product'); ?>" method="post">
                                    <div class="row">
                                        
                                        <h4 class="header-title m-t-0 m-b-30">Add New Product</h4>
                                        <div class="col-lg-6">
                                        
                                        
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Product Title</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" name="product_title" required="" placeholder="Product Title" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">UOM</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" name="uom" required="" placeholder="uom" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                </div>
                                            </div>   

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Product Price</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" name="price" required="" placeholder="Product Price" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                </div>
                                            </div>                                            

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Product Category</label>
                                                <div class="col-sm-7">
                                                    <select required class="form-control" name="product_category">
                                                        <option value="">---</option>
                                                        <?php foreach ($category as $c) { ?>
                                                            <option value="<?php echo $c->category_url; ?>"><?php echo $c->category_title; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Product Code</label>
                                                <div class="col-sm-7">
                                                    <input name="product_code" class="form-control" required="" placeholder="Type something" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Hot Promo ?</label>
                                                <div class="col-sm-7">
                                                    <select class="form-control" name="hotpromo">
                                                        <option value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Select Image (Thumbnail)</label>
                                                <div class="col-sm-7">
                                                    <input name="product_image_1" size="20" class="" placeholder="Type something" type="file">
                                                </div>
                                            </div>

                                            <div class="alert alert-info">
                                              <strong>Warning!</strong> image size should be H : 250 W : 300 
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Product Description</label>
                                            <div class="col-sm-9">
                                                <textarea id="editor2" name="product_descrption" id="textarea" class="form-control" rows="2" placeholder=""></textarea>
                                            </div>
                                        </div>

                                           <script type="text/javascript">
                                            CKEDITOR.replace( 'editor2' );
                                            CKEDITOR.add            
                                            </script>

                                        
                                        <div class="form-group text-right m-b-0">
                                            <button type="submit" id="sa-success-product" class="btn btn-success waves-effect waves-light btn-sm m-b-5">
                                            <i class="zmdi zmdi-plus-circle m-r-5"></i>
                                            <span>Add Product</span>
                                            </button>
                                        </div>

                                        <?php echo $this->session->flashdata('error_product'); ?>
                                        </div>
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
        <!-- Plugin JS -->
        