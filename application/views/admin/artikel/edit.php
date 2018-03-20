<section id="content">
		<div class="container jumbotron mt-4">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2>Edit Artikel</h2>
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
					<?php if(validation_errors()) { ?>
		            <div class="alert alert-danger">
		              <?php echo validation_errors(); ?>
		            </div>
		            <?php } ?>
					<form method="post" action="<?php echo base_url().'admin/artikel/actionEdit/'.$artikel->id_artikel; ?>" enctype="multipart/form-data">
						<div class="form-group">
							<label for="judul">Judul Artikel</label>
							<input type="text" name="judul" class="form-control" id="judul" value="<?php echo $artikel->judul; ?>" aria-describedby="judul" placeholder="Masukan Judul" required="required">
							<small id="judul" class="form-text text-muted">Maksimal 255 Karakter</small>
						</div>
						<div class="form-group">
							<label for="kategori">Kategori</label>
							<select class="select2" style="width:50%"name="id_kategori" required="required">
								<option>Pilih Kategori</option>
								<?php foreach ($kategori as $key) { ?>
									<option <?php echo $retVal = ($artikel->id_kategori == $key->id_kategori) ? 'selected' : '' ; ?> value="<?php echo $key->id_kategori ?>"><?php echo $key->kategori; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<textarea name="konten" class="form-control" id="editor" rows="3"><?php echo $artikel->konten; ?></textarea>
						</div>
						<div class="form-group">
							<label for="gambar_utama">Gambar Utama</label>
							<div class="custom-file">
							  <input name="gambar_utama"type="file" class="form-control" id="gambar_utama" required="required">
							  <!-- <label class="custom-file-label" for="customFile"></label> -->
							  <small id="gambar_utama" class="form-text text-muted">Gambar utama akan ditampikan untuk Thumbnail headline berita di homepage.</small>
							</div>
						</div>
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash() ?>" />
						<button type="submit" class="btn btn-success">Posting</button>
					</form>
				</div>
			</div>
		</div>
</section>

<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace( 'editor' );
</script>
