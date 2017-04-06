<div id="product-cat" class="container product-list">
    <div class="row">
        <div class="row">
            <div class="col-lg-6">
                <h1 style="text-align:center;" class="f-gotham-medium">Product</h1>
            </div>
            <div class="col-lg-6 kerilwil">
                <img class="" style="margin-right: 20px; margin-top: 5px; float:right;" src="<?php echo base_url('assets/images/product-cat/layer144.png'); ?>" style="float:right;">
            </div>
        </div>
        <?php foreach ($category as $p) { ?>
    	<div class="col-lg-6" style="margin-bottom:30px;  height:365px;">
    		<a href="<?php echo base_url('product/').$p->category_url.'/1'; ?>">
    			<img class="img-responsive center-block" style="" src="<?php echo base_url('assets/images/product-cat/').$p->category_image; ?>">
    		</a>
    	</div>
        <?php } ?>
    	<div class="col-lg-12">
    		<div class="guarantee">
    			<img class="persen" src="<?php echo base_url('assets/images/product-cat/persen.png'); ?>">
    			<h2 class="f-gotham-bold">Mengapa Memilih indocart</h2>
                <img class="memphis" src="<?php echo base_url('assets/images/product-cat/memphis.png'); ?>">
    		</div>
            <div class="col-lg-12">
                <div class="row option">
            		<div class="col-lg-2">
                        <div class="row">
                        <img class="mx-auto d-block img-responsive center-block" src="<?php echo base_url('assets/images/product-cat/home.png'); ?>">
                        </div>
                        <p>Alamat kantor dan <br> nomor telp jelas</p>
            		</div>
            		<div class="col-lg-2">
                        <img class="mx-auto d-block img-responsive center-block" src="<?php echo base_url('assets/images/product-cat/jelas.png'); ?>">
            			<p>Berbasis perusahaan yang jelas legalitasnya</p>
                 	</div>
            		<div class="col-lg-3">
                        <img class="mx-auto d-block img-responsive center-block" src="<?php echo base_url('assets/images/product-cat/kantor.png'); ?>">
            			<p>Kantor dapat dikunjungi kapan saja</p>
            		</div>
            		<div class="col-lg-3">
                        <img class="mx-auto d-block img-responsive center-block" src="<?php echo base_url('assets/images/product-cat/garansi.png'); ?>">
            			<p>Produk bergaransi dan langsung dari pabrikan</p>
            		</div>
            		<div class="col-lg-2">
                        <img class="mx-auto d-block img-responsive center-block" src="<?php echo base_url('assets/images/product-cat/kompetitif.png'); ?>">
            			<p>Harga kompetitif <br> dan bersaing</p>
            		</div>
                </div>
            </div>
    	</div>
    </div>
</div>