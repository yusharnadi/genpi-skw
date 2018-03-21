<section id="artikel-detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 mt-4 mb-4">
				<div class="card mb-3">
					<img class="card-img-top" src="<?php echo base_url().'uploads/'.$artikel->gambar_utama; ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class=""><?php echo $artikel->judul; ?></h5>
						<p class="card-text">
							<?php echo $artikel->konten; ?>
						</p>
						<p class="card-text">
							<small class="text-muted">Publised at <?php echo $artikel->date; ?></small>
						</p>
					</div>
				</div>
			</div>
			<!-- sidebar -->
			<?php $this->load->view('homepage/layout/sidebar'); ?>
		</div>
	</div>
</section>
