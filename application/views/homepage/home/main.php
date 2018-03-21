<div id="artikel" class="p-4">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-2 title">Berita Terbaru</h2>
				<p class="text-center">Temukan berita terbaru dan terupdate seputar Kota Singkawang.</p>
			</div>
		</div>
		<div class="row">
			<?php foreach ($artikel as $art) {?>
			<div class="col-sm-10 col-md-4">
				<div class="card m-2">
					<img class="card-img-top" src="<?php echo base_url().'uploads/'.$art->gambar_utama; ?>" alt="artikel">
					<div class="card-body">
						<a href="<?php echo base_url().'artikel/detail/'.$art->id_artikel; ?>">
							<h5 class="card-title"><?php echo substr($art->judul, 0,40); ?></h5>
						</a>
						<p class="desc">
							<?php echo substr(strip_tags($art->konten), 0,130).' . . .'; ?>
						</p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col text-center p-4">
				<a href="<?php echo base_url(); ?>berita" class="btn btn-lg btn-outline-dark">Lihat Selengkapnya</a>
			</div>
		</div>
	</div>
</div>

<!-- media partner -->
<div id="partner">
	<h2 class="text-center">Media Partner |</h2>
	<!-- <img src="assets/images/genpi.png" alt="" height="60px"> -->
	<img src="assets/images/partner-2.png" alt="" height="40px">
	<img src="assets/images/logo-kominfo.png" alt="" height="40px">
	<img src="assets/images/partner-1.png" alt="" height="40px">
	<img src="assets/images/ER.png" alt="" height="100px">
	<img src="assets/images/dd.png" alt="" height="80px">
</div>

<div id="event" class="p-4">
	<div class="container">
		<div class="row">
			<div class="col m-4">
				<h2 class="text-center mb-2 title">Wonderfull Event</h2>
				<p class="text-center">Event-event menarik dikota singkawang yang sayang untuk dilewati.</p>
			</div>
		</div>
		<div class="row">
			<?php foreach ($events as $event) { ?>
			<div class="col-sm-12 col-md-4">
				<figure>
					<img alt="<?php echo substr($event->judul, 0,10);?>" src="<?php echo base_url().'uploads/'.$event->gambar_utama; ?>" >

					<figcaption>
						<h3><?php echo substr($event->judul, 0,40);?></h3>

						<p>
							<?php echo substr(strip_tags($event->konten), 0,130).' . . .'; ?>
						</p>
						<p>
							<a href="<?php echo base_url().'artikel/detail/'.$event->id_artikel; ?>">Read More</a>
						</p>
					</figcaption>
				</figure>
			</div>
			<?php } ?>
		</div>
		<div class="row">
			<div class="col text-center p-4">
				<a href="<?php echo base_url(); ?>events" class="btn btn-lg btn-outline-dark">Lihat Selengkapnya</a>
			</div>
		</div>
	</div>
</div>
