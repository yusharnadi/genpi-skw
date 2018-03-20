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
					<form method="POST" action="<?php echo base_url(); ?>admin/kategori/actionInsert">
						<div class="form-group row ml-1">
							<label for="kategori" class="col-sm-1 col-form-label">Kategori</label>
							<div class="col-sm-10 col-md-4">
								<input type="text" class="form-control form-control-sm" id="kategori" name="kategori" placeholder="Kategori" required>
							</div>
							<button class="btn btn-sm btn-outline-success">Simpan</button>
						</div>
					</form>
					<hr class="my-4">
					<table class="table table-hover dt">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama Kategori</th>
								<th scope="col">Option</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;?>
							<?php foreach($kategori as $dt){?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $dt->kategori;?></td>
								<td>
									<a class="btn btn-sm btn-outline-warning" href="<?php echo base_url().'admin/kategori/edit/'.$dt->id_kategori;?>">
										<span class="fa fa-pencil"></span> Edit
									</a>

									<a class="btn btn-sm btn-outline-danger" href="<?php echo base_url().'admin/kategori/delete/'.$dt->id_kategori; ?>">
										<span class="fa fa-trash"></span> Hapus
									</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</section>
