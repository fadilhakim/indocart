<!doctype html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>We'll Be Back</title>
    <link href="<?php echo base_url('assets/css/all.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/css/responsive.css') ?>" rel="stylesheet" type="text/css"/>
</head>

<body class="maintenance">
	<div class="container">
		<div class="row first">
			<div class="col-lg-6 right">
				<div class="row">
				<div class="col-lg-10" style="padding-top:50px">
					<img style="margin-left:30px;" src="assets/images/left-product.png" class="img-responsive center-block">
				</div>
				</div>
				
				<form style="margin-top:20px" class="form-contact" method="post" action="request">
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<label class="col-lg-6 col-xs-6">Nama</label>
								<input type="text" name="name" required class="col-lg-6 col-xs-6">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
								<label class="col-lg-6 col-xs-5">No Telp / HP</label>
								<input type="number" name="hp" required class="col-lg-6 col-xs-7">
							</div>
						</div>
					</div>
					<div class="row">
						<label class="col-lg-3 col-xs-3">Alamat</label>
						<input type="text" name="address" required class="col-lg-9 col-xs-9">
					</div>
					<div class="row">
						<label class="col-lg-3 col-xs-3">Email</label>
						<input type="text" name="email" required class="col-lg-9 col-xs-9">
					</div>
					<div class="row">
						<label class="col-lg-3 col-xs-5">Keterangan</label>
						<textarea name="keterangan" required class="col-lg-9 col-xs-7"></textarea>
					</div>
					<div class="row">
						<div class="col-lg-6"><?php echo $this->session->flashdata('msg'); ?></div>
						<div class="col-lg-6"><input type="submit" value="MINTA PENAWARAN HARGA" class="submit"></div>
					</div>
				</form>
			</div>
			<div class="col-lg-1 left"></div>
			<div class="col-lg-5 left">
				<div class="wll">
					<h2>We'll Be Back</h2>
					<div class="row">
						<div class="col-lg-12">
							<img src="assets/images/indocart-logo.png" class="img-responsive center-block">
						</div>
					</div>
					<h3>One stop printer solution</h3>
					<h4>Kami akan segera kembali melayani anda dengan lebih baik lagi</h4>
					<ol>
						<li>INDOCART memberikan jaminan bahwa setiap produk yang dihasilkan adalah yang terbaik sesuai standar yang diinginkan/dijanjikan.</li>
						<li>Indocart merupakan importir langsung dari pabrik dan berbadan usaha yang jelas.</li>
						<li>Harga yang kompetitif.</li>
						<li>Proses pengerjaan yang cepat, teliti dan baku.</li>
						<li>Telah berdiri sejak 2003 dengan layanan purna jual yang responsif, professional dan berkesinambungan.</li>
					</ol>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<img src="assets/images/kualitas.png" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
		<div class="row second">
			<div class="col-lg-5">
				<div class="wll">
					<h2>We'll Be Back</h2>
					<div class="row">
						<div class="col-lg-12">
							<img src="assets/images/indocart-logo.png" class="img-responsive center-block">
						</div>
					</div>
					<h3>One stop printer solution</h3>
					<h4>Kami akan segera kembali melayani anda dengan lebih baik lagi</h4>
					<ol>
						<li>INDOCART memberikan jaminan bahwa setiap produk yang dihasilkan adalah yang terbaik sesuai standar yang diinginkan/dijanjikan.</li>
						<li>Indocart merupakan importir langsung dari pabrik dan berbadan usaha yang jelas.</li>
						<li>Harga yang kompetitif.</li>
						<li>Proses pengerjaan yang cepat, teliti dan baku.</li>
						<li>Telah berdiri sejak 2003 dengan layanan purna jual yang responsif, professional dan berkesinambungan.</li>
					</ol>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<img src="assets/images/kualitas.png" class="img-responsive">
					</div>
				</div>
			</div>
			
			<div class="col-lg-1"></div>
			
			<div class="col-lg-6">
				<form style="margin-top:20px" class="form-contact" method="post" action="request">
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<label class="col-lg-6 col-xs-6">Nama</label>
								<input type="text" name="name" required class="col-lg-6 col-xs-6">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
								<label class="col-lg-6 col-xs-5">No Telp / HP</label>
								<input type="number" name="hp" required class="col-lg-6 col-xs-7">
							</div>
						</div>
					</div>
					<div class="row">
						<label class="col-lg-3 col-xs-3">Alamat</label>
						<input type="text" name="address" required class="col-lg-9 col-xs-9">
					</div>
					<div class="row">
						<label class="col-lg-3 col-xs-3">Email</label>
						<input type="text" name="email" required class="col-lg-9 col-xs-9">
					</div>
					<div class="row">
						<label class="col-lg-3 col-xs-5">Keterangan</label>
						<textarea name="keterangan" required class="col-lg-9 col-xs-7"></textarea>
					</div>
					<div class="row">
						<div class="col-lg-6"><?php echo $this->session->flashdata('msg'); ?></div>
						<div class="col-lg-6"><input type="submit" value="MINTA PENAWARAN HARGA" class="submit"></div>
					</div>
				</form>
			</div>
		</div>
	</div>     
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5867b8a0e7588f12124fdc54/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
