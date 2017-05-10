<div class="home-container">
	<div class="container">
	
		<div id="owl-demo" class="owl-carousel">
			<?php foreach ($slider as $s) { ?>
			 <div class="item"><img src="<?php echo sprintf("assets/images/slider/". $s->silder_image) ?> "></div>
			<?php } ?>
		</div>
				
	</div>

	<div class="container whyblue">
		<h1>
			<span class="whydot"></span>
			why us
			<span class="wave"></span>
		</h1>
		<div class="row">
			<div class="col-lg-11 col-lg-offset-1">
				<div class="row">
					
					<div class="col-lg-6 kiriblue">
						<p>
							<strong style="font-size:20px;">
								INDOCART memberikan jaminan bahwa setiap produk 
								yang dihasilkan adalah yang terbaik sesuai standar yang 
								diinginkan atau dijanjikan. 
							</strong>
						</p>
						<ul>
							<li><img src="<?php echo base_url('assets/images/home/ul/gedungblue.png'); ?>" class="img-responsive">

							INDOCART merupakan importer berbasis PT  yang memperoleh barang langsung dari pabrik.</li>
							<li style="padding-top: 15px;"><img src="<?php echo base_url('assets/images/home/ul/tagblue.png'); ?>" class="img-responsive">Harga yang kompetitif.</li>
							<li style="padding-top: 15px;"><img src="<?php echo base_url('assets/images/home/ul/likeblue.png'); ?>" class="img-responsive">Proses pengerjaan yang cepat, teliti dan baku.</li>
							<li><img src="<?php echo base_url('assets/images/home/ul/pasirblue.png'); ?>" class="img-responsive">Telah berdiri sejak 2003 dengan layanan purna jual yang responsif, professional dan berkesinambungan.</li>
						</ul>
					</div>
					<div class="col-lg-6">
					<div style="margin-top: 90px;"></div>
						<div class="satis">
							<h1 class="f-gotham-medium">our satisfied customers</h1>
							<ul>
								<li> 
									<p class="f-roboto-reg ">Service printer selalu tepat waktu!</p>
									<span class="f-roboto-reg ">Dina , Karyawati</span>
								</li>
								<li> 
									<p class="f-roboto-reg ">Tintanya berkualitas dan tidak luntur</p>
									<span class="f-roboto-reg ">Anton , Desainer Grafis</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top: 25px;">
		<div class="row">
			<div class="col-lg-3">
				<a href="http://indocart.com//product/Toner_Powder_color/1">
				<img src="<?php echo base_url('assets/images/home/xerox-dp-c1190s.png'); ?>" class="img-responsive">
				</a>
			</div>
			<div class="col-lg-3">
				<a href="http://indocart.com/product/Printer_Parts/1">
				<img src="<?php echo base_url('assets/images/home/printer-partss.png'); ?>" class="img-responsive">
				</a>
			</div>
			<div class="col-lg-3">
				<a href="http://indocart.com/product">
				<img src="<?php echo base_url('assets/images/product-cat/inks.png'); ?>" class="img-responsive">
				</a>
			</div>
			<div class="col-lg-3">
				<a href="http://indocart.com/product">
				<img src="<?php echo base_url('assets/images/product-cat/printer-seconds.png'); ?>" class="img-responsive">
				</a>
			</div>
		</div>
	</div>
	<div class="container-fluid news-home">
		<div class="container">
			<h2 class="section-title f-gotham-medium ">news</h2>
			<div class="owl-carousel product_carousel">
			<?php foreach ($news as $n) { ?>
			
			
			 	<div class="product-thumb clearfix home-blogs">
			 		<div class="row">
			 			<div class="col-lg-6">
			 				<h3  class="f-gotham-bold" style="font-size:16px;"><?php echo $n->news_title; ?></h3>
			 					<?php
			 						$news_long = $n->news_desc ;
			 						if (strlen($news_long) > 100)
   									$news_long = substr($news_long, 0, 120) . '..';
   								echo $news_long;
			 					 ?> 
							<a href="<?php echo base_url('news/detail/').$n->news_id; ?>" class="f-gotham-medium ">Read More</a>	
			 			</div>
			 			<div class="col-lg-6"><img class="img-responsive" src="<?php echo base_url('assets/images/news/').$n->news_image; ?>"></div>
			 		</div>
			 	</div>

			<?php } ?>

			</div>
		</div>
	</div>
	<div class="container-fluid recycle">
		<div class="row">
			<div class="col-lg-5">
				<div class="col-lg-3">
					<img class="img-responsive" src="<?php echo base_url('assets/images/home/rec-bg.png') ?>">
				</div>
				<div class="col-lg-9">
					<p class="f-roboto-reg ">Proses daur ulang katrid yang benar dan proses pengerjaan yang sesuai standar secara nyata sangat membantu menciptakan lingkungan yang lebih bersih.<br><br>
						Bila anda memiliki katrid kosong yang tidak terpakai, anda dapat menghubungi kami pada program pengumpulan katrid kosong. Semua katrid kosong akan dipilah dan didaur ulang agar tidak menjadi limbah yang mencemari lingkungan. <br><br>
						INDOCART menerima setiap katrid kosong anda, virgin maupun non virgin dengan harga yang pantas. Seluruh katrid kosong didaur ulang dengan proses dan perlengkapan yang memenuhi standarisasi sehingga tidak mencemari lingkungan.<br><br>
					</p>
				</div>
			</div>
			<div class="col-lg-7">
				<img class="img-responsive" src="<?php echo base_url('assets/images/home/recycle.png') ?>">	
			</div>
		</div>
	</div>
</div>

