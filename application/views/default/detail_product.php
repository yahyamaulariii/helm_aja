
<div class="container mt-5">
	<div class="row">
		<div class="col-md-4">
			<img src="<?php echo base_url('upload/'.$detail_product[0]['image']); ?>" width="100%" height="300px">			
		</div>
		<div class="col-md-6 ml-3">
			<p class=""><?php echo $detail_product[0]['nama_produk']; ?></p>
			<p class="">Rp<?php echo $detail_product[0]['harga_produk']; ?></p>
			<p class="text-left">Deskripsi : <?php echo $detail_product[0]['deskripsi'];?></p>
			<p class="">Ukuran : <?php echo $detail_product[0]['ukuran'];?></p>
			<div class="col-md-12 mt-5">
				<a href="#" class="btn btn-primary w-100">Beli</a>
			</div>
		</div>
	</div>
</div>