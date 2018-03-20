<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 mt-4">
				<ul class="list-unstyled">
					<?php foreach ($artikel as $art) {?>
					<li class="media mb-4">
						<img class="mr-3 img-thumbnail img-blog" src="<?php echo base_url().'uploads/'.$art->gambar_utama ?>" alt="Generic placeholder image" width="200px">
						<div class="media-body">
							<a href="#" class="link-blog">
								<h5 class="mt-0 mb-1 ml-0 title-blog"><?php echo substr($art->judul, 0,40); ?></h5>
							</a>
							<p class="text-blog">
								<?php echo substr(strip_tags($art->konten), 0,150).' . . .'; ?>
							</p>
						</div>
					</li>
					<?php } ?>
				</ul>
				<?php echo $pagination; ?>
			</div>
			<div class="col-sm-12 col-md-4 mt-4">
				<ul class="list-group">
					<li class="list-group-item active">Recents Update</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>
				<ul class="list-group mt-4">
					<li class="list-group-item active">Last Events</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>
				<ul class="list-group mt-4">
					<li class="list-group-item active">Category</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>
			</div>
		</div>
	</div>
</section>
