<?php if(!$this->cart->contents()){ ?>
<div id="" class="container cart-show">
  <div class="col-lg-8 col-lg-offset-2">
      <div class="row">
          <p class="sorry">Sorry, you have no item in your cart</p>
         <a href="<?php echo base_url('product'); ?>" class="cont">Continue Shopping</a>
      </div>
  </div>
</div>
<?php } else { ?>
<div id="" class="container cart-show">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 tables">
        
        <h1>Terima kasih untuk pesananan anda</h1>
          <div class="table-responsive">
          <form method="post" action="<?php echo base_url('cart/update_cart'); ?>">
              <table class="table table-striped">
                <thead>
                    <tr style="border-bottom: 1px solid #ccc;">
                        <th class="table-title">Nama Produk</th>
                        <th class="table-title">Deskripsi</th>
                        <th class="table-title">UOM</th>
                        <th class="table-title" style="text-align:center;">Kuantitas</th>
                        <th><span class="close-button disabled"></span></th>
                    </tr>
                </thead>
                <tbody>
                   <?php $i = 1; ?>
                    <?php foreach($this->cart->contents() as $items): ?>
                         <tr>
                            <td class="product-code"><strong><?php echo $items['name']; ?></strong></td>
                            <td class="product-code"><?php echo $items['desc']; ?></td>
                            <td class="product-code"><?php //echo $items['name']; ?></td>
                            <td class="product-code">
                              <input name="qty[]" value="<?php echo  $items['qty'] ?>">
                            </td>
                            <td>
                              <a href="<?php echo base_url('cart/removeCartItem/').$items['rowid']; ?>" class="close-button">X</a>
                            </td>
                         </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
              </table>
          </form>
          </div>
        
    </div>

    <div class="col-md-3 col-md-offset-8 ">
      <div class="subtotal-cart ">
          <p class="f-gotham-medium">Subtotal</p>
          <input type="text" readonly="" value="<?php echo count($this->cart->contents()); ?>">
      </div>
          
    </div>

    <div class="col-lg-10 col-lg-offset-1 form">
      <form style="margin-top:20px" class="form-contact" method="post" action="<?php echo base_url("cart/send_email_invoice"); ?>">
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
            <div class="col-lg-6" style="padding-right:0px;"><input type="submit" value="MINTA PENAWARAN HARGA" class="submit"></div>
          </div>
      </form>
    </div>

    <div class="col-lg-10 col-lg-offset-1 info-cs">
      <a href="<?php echo base_url('product'); ?>">
      LIHAT PRODUK LAINNYA

      </a><br>
      <div class="customer">
        Customer Service kami akan menghubungi anda dalam 2 x 24 jam
      </div>
    </div>
  </div>
</div>


<?php } ?> 