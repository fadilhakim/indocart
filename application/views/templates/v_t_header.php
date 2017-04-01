<body>
	<?php $this->load->view('templates/v_t_menu'); ?>
	<div class="container header" style="position:relative;">
		<div class="row">
			<div class="col-lg-6">
				<div class="menu-icon">
					<a class="sidemenu-btn fa fa-bars" href="#" title=""></a>
				</div>
				<div class="logo-indo">
					<img src="<?php echo base_url('assets/images/indocart-logo-web.png'); ?>">
				</div>
			</div>
			<div class="col-lg-6" style="position:relative">
				<a href="<?php echo base_url('cart/show_cart'); ?>">
					<i class="cart-icon">
						<img src="<?php echo base_url('assets/images/cart_icon.png') ?>">
						
					</i>
				</a>
				<input type="text" placeholder="search">
				<?php if($this->cart->contents()){ ?>
					<div class="red-one"><?php echo count($this->cart->contents()); ?></div>
				<?php } ?>
			</div>
		</div>
	
		<div class="onestop">
			<p class="f-gotham-bold">one stop printer solution</p>
		</div>
	</div>
	