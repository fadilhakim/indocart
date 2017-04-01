<div class="home-container">
	<div class="container">
	
			<div id="owl-demo" class="owl-carousel">
				 <div><img src="http://placehold.it/1170x300/42bdc2/FFFFFF"></div>
              <div><img src="http://placehold.it/1170x400/42bdc2/FFFFFF"></div>
              <div><img src="http://placehold.it/1170x500/42bdc2/FFFFFF"></div>
              <div><img src="http://placehold.it/1170x200/42bdc2/FFFFFF"></div>
			</div>
				
		
	</div>
	
	<div class="container content home">
		<div class="col-lg-6 mt-170">
			<div class="row">
				<img src="<?php echo base_url('assets/images/home/xerox-dp-c1190.png'); ?>" class="img-responsive">
			</div>
			<br><br>
			<div class="row" style="margin-top: 110px;">
				<img src="<?php echo base_url('assets/images/home/tinta.png'); ?>" class="img-responsive">
			</div>
			<br><br>
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
		<div class="col-lg-6 why-us">
			<div class="separo">
				<h2 class="f-gotham-medium ">why us</h2>
				<p>
					INDOCART memberikan jaminan bahwa setiap produk yang dihasilkan adalah yang terbaik  sesuai standar yang diinginkan/dijanjikan. 
				</p>
				<p>
					INDOCART merupakan importer berbasis PT 
				yang memperoleh barang langsung dari pabrik.
				<br><br>
				Harga yang kompetitif.
				<br><br>
				Proses pengerjaan yang cepat, teliti dan baku.
				 <br><br>
				Telah berdiri sejak 2003 dengan layanan purna jual yang responsif, professional dan berkesinambungan.
				</p>
				
				<div style="margin-top:20px; height:380px;">
					<img src="<?php echo base_url('assets/images/home/printer-parts.png'); ?>" class="img-responsive">
				</div>
				<div style="margin-top:20px;">
					<img src="<?php echo base_url('assets/images/home/printer-bekas.png'); ?>" class="img-responsive">
				</div>
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
				<p class="f-roboto-reg ">Proses daur ulang katrid yang benar dan proses pengerjaan yang sesuai standar secara nyata sangat membantu menciptakan lingkungan yang lebih bersih.<br><br>
					Bila anda memiliki katrid kosong yang tidak terpakai, anda dapat menghubungi kami pada program pengumpulan katrid kosong. Semua katrid kosong akan dipilah dan didaur ulang agar tidak menjadi limbah yang mencemari lingkungan. <br><br>
					INDOCART menerima setiap katrid kosong anda, virgin maupun non virgin dengan harga yang pantas. Seluruh katrid kosong didaur ulang dengan proses dan perlengkapan yang memenuhi standarisasi sehingga tidak mencemari lingkungan.<br><br>
				</p>
			</div>
			<div class="col-lg-7 right">
				
			</div>
		</div>
	</div>
</div>

