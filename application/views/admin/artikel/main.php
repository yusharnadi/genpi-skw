<section id="content">
		<div class="container jumbotron mt-4">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h1 class="display-6">Artikel</h1>
					<hr class="my-2">
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
					<a class="btn btn-success m-2" href="<?php echo base_url(); ?>admin/artikel/create">Buat Artikel</a>
					<table class="table table-hover dt">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Judul</th>
								<th scope="col">Kategori</th>
								<th scope="col">Create At</th>
								<th scope="col">Gambar Utama</th>
								<th scope="col">OPSI</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;?>
							<?php foreach($artikel as $dt){?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $dt->judul;?></td>
								<td><?php echo $dt->kategori;?></td>
								<td><?php echo $dt->date;?></td>
								<td>
									<img src="<?php echo base_url().'uploads/'.$dt->gambar_utama; ?>" alt="Genpi Artikel Image" width="80px" class="img-thumbnail">
								</td>
								<td>
									<a class="btn btn-sm btn-warning" href="<?php echo base_url().'admin/artikel/edit/'.$dt->id_artikel;?>">
										<span class="fa fa-pencil"></span>
									</a>

									<a class="btn btn-sm btn-danger" href="<?php echo base_url().'admin/artikel/delete/'.$dt->id_artikel; ?>">
										<span class="fa fa-trash"></span>
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
