
<div class="container">
	<div class="footer">
		<div class="row">
			<div class="col-lg-6">
				<p style="font-size:14px;">BSD : 021 5315-8800 (Hunting)</p>
				<p style="font-size:14px;">MANGGA DUA : 021 612 7270 | 021 6220 2664</p>
        <p style="font-size:14px;">HI-TECH MALL : 0813 9835 5678</p>
				<p style="font-size:14px;">indocart@indosat.net.id</p><br>
				<a href=""  data-toggle="modal" data-target="#myModal" class="subscribe">Subscribe our latest promo & Deals</a>
				<p style="font-size:11px;">&copy; All right reserved - indocart</p>

			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-12">
						<span style="text-align:right; color:#666; font-size:12px;" class="f-roboto-reg">Seluruh merek yang tertera adalah milik pemegang hak merek yang bersangkutan dan hanya digunakan sebagai
						acuan perbandingan. Seluruh produk yang diperjualbelikan adalah produk daur ulang beserta kelengkapannya dan tidak mempunyai keterkaitan dengan pemegang merek yang bersangkutan. 
						</span>
						<br><br>
						<span class="f-roboto-reg" style="font-size:11px;">CERTIFIED BY :</span>
						<br>
					</div>
					<div class="col-lg-3">
						<img class="img-responsive" src="<?php echo base_url('assets/images/footer-img-1.png'); ?>">
					</div>
					<div class="col-lg-3">
						<img class="img-responsive" src="<?php echo base_url('assets/images/footer-img-2.png'); ?>">
					</div>
					<div class="col-lg-3">
						<img class="img-responsive" src="<?php echo base_url('assets/images/footer-img-3.png'); ?>">
					</div>
					<div class="col-lg-3">
						<img class="img-responsive" src="<?php echo base_url('assets/images/footer-img-4.png'); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing-1.3.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/slide-menu.js'); ?>"></script>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Subscribe to our promo & News</h4>
      </div>
      <div class="modal-body">
        <p>Type your Email :</p>
      </div>
      <div class="modal-footer">
        <form method="post" action="<?php echo base_url('contact/input_subs'); ?>">
        	<input type="email" name="subs_email" placeholder="your email" style="color:#000;">
        	<button type="submit" class="btn btn-info btn-lg">Submit</button>    	  
        </form>
      </div>
    </div>

  </div>
</div>
<style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>
</body>

<script type="text/javascript">

      $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay : 3000,
        stopOnHover : true,
        navigation:true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeight : true,
        transitionStyle:"fade",
        responsiveClass:true,
      });
    });

</script>
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
</html>