<div class="col-sm-12 col-md-4 mt-4">
	<!-- <ul class="list-group">
		<li class="list-group-item active">Kategori</li>
		<?php // foreach ($kategori as $kat) {?>
		<li class="list-group-item"><?php //echo $kat->kategori; ?></li>
		<?php //}?>
	</ul> -->
	<ul class="list-group">
		<li class="list-group-item active">Berita Terbaru</li>
		<?php
			$ci =& get_instance();
			$ci->load->model('Sidebar_model');
			$art = $ci->Sidebar_model->get_last_artikel();
			$events = $ci->Sidebar_model->get_last_events();
		 ?>
		 <?php foreach ($art as $artikel) {?>
		<a href="<?php echo base_url().'artikel/detail/'.$artikel->id_artikel; ?>">
			<li class="list-group-item"><?php echo $artikel->judul; ?></li>
		</a>
		<?php } ?>
	</ul>
	<ul class="list-group mt-4">
		<li class="list-group-item active">Last Events</li>
		<?php foreach ($events as $event) {?>
			<a href="<?php echo base_url().'artikel/detail/'.$event->id_artikel; ?>">
	 		   <li class="list-group-item"><?php echo $event->judul; ?></li>
	 	   </a>
	   <?php } ?>
	</ul>

</div>
