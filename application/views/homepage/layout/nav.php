<nav class="navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand ml-4" href="#">
		<img src="<?php echo base_url(); ?>assets/images/genpi.png" alt="Mc Kominfo" height="80px">

	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="blog.html">News</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Events</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="fa fa-sign-in"></i>
					Login</a>
			</li>
		</ul>
	</div>
</nav>
<div id="hero">
	<h1>Temukan Info Menarik Di Kota Singkawang</h1>
	<br>
	<form action="index.php" class="form-inline tipis" method="POST">
		<div class="form-group mx-md-6">
			<input type="text" class="form-control form-control-lg tipis" id="inputPassword2" placeholder="Cari Beragam Informasi disini ...">
			<!-- <button type="submit" class="btn btn-lg btn-dark">Search</button> -->
		</div>
	</form>
</div>
