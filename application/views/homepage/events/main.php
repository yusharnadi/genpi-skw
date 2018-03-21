<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 mt-4">
				<ul class="list-unstyled">
					<?php foreach ($artikel as $art) {?>
					<li class="media mb-4">
						<img class="mr-3 img-thumbnail img-blog" src="<?php echo base_url().'uploads/'.$art->gambar_utama ?>" alt="Generic placeholder image" width="200px">
						<div class="media-body">
							<a href="<?php echo base_url().'artikel/detail/'.$art->id_artikel; ?>" class="link-blog">
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
			<!-- sidebar -->
			<?php $this->load->view($sidebar); ?>
		</div>
	</div>
</section>
