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
                        <div class="col-lg-12" style="overflow:scroll;">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Product List</h4>

                                <table id="datatable-keytable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Product Title</th>
                                            <th>Product Display</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Promo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        foreach ($product as $p) { ?>
                                        
                                        <tr>
                                            <td><?php echo $i; $i++;?></td>
                                            <td><?php echo $p->product_title; ?></td>
                                            <td>
                                               
                                                <?php if($p->product_image_1 == ''){ ?>
                                                    <img src="<?php echo base_url('assets/images/no-image.png') ?>" style="width:70%">
                                                <?php } else {?>
                                                    <img src="<?php echo base_url('assets/images/products/').$p->product_image_1; ?>" width="200" class="img-responsive">
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $p->price; ?></td>
                                            <td><?php echo $p->product_category; ?></td>
                                            <td><?php
                                                $featured = $p->hotpromo;
                                                if ($featured == '1') {
                                                    echo "Yes";
                                                }
                                                else {
                                                    echo "No";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php  echo base_url('admin/edit_product/'.$p->category_url.'/'.$p->product_slug); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit/Detail</a>
                                                <a href="<?php echo base_url('admin/delete/product/'.$p->product_id); ?>" id="" class="delete-manu btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
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
        