<section id="content">
		<div class="container jumbotron mt-4">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h1 class="display-6">Kategori Artikel</h1>
					<hr class="my-4">
					<?php if ($this->session->flashdata('message')) {
						echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
								<strong>Success !</strong> ".$this->session->flashdata('message')."
								<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
								</div>";
					} ?>
					<?php if ($this->session->flashdata('error')) {
						echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
								<strong>Error !</strong> ".$this->session->flashdata('error')."
								<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
									<span aria-hidden=\"true\">&times;</span>
								</button>
								</div>";
					} ?>
					<form method="POST" action="<?php echo base_url().'admin/kategori/actionEdit/'.$kategori->id_kategori; ?>">
						<div class="form-group row ml-1">
							<label for="kategori" class="col-sm-1 col-form-label">Kategori</label>
							<div class="col-sm-10 col-md-4">
								<input type="text" class="form-control " id="kategori" name="kategori" value="<?php echo $kategori->kategori; ?>" placeholder="Kategori" required>
							</div>
							<button class="btn btn-outline-success">Ubah</button>
						</div>
					</form>
					<hr class="my-4">

				</div>
			</div>
		</div>
</section>
