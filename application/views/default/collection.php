<div class="jumbotron text-center">
  <h1>Collection of AL_89 Helmet</h1> 
</div>

<div class="row">
  <?php
    foreach ($product as $key => $value) {     
  ?>
  <div class="col-3 border h-50 mt-3">
  	<img src="<?php echo base_url('upload/').$value['image']; ?>" width="100%" height="250px" alt="KBC Laguna">
  	<p class="text-center"><?php echo $value['nama_produk'];?></p>
    <p class="text-center"><?php echo $value['harga_produk'];?></p>
  	<center>
  	<button type="button" class="btn btn-primary">Beli</button>
  	<a href="<?php echo site_url('ctrl/detail/'.$value['id']); ?>" class="btn btn-primary">Detail</a>
  	</center>
  </div>
<?php
  }
?>
</div>