<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Main CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/main.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
	<!-- font keren  -->
	<link href="https://fonts.googleapis.com/css?family=Nunito|Quicksand|Orbitron|Roboto" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/genpi.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
	<link href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" />


	<title>GenPi | Singkawang</title>
</head>

<body>
    <!-- menu navigasi -->
    <?php $this->load->view('admin/layout/nav');?>
    <!-- end navigasi  -->

    <!-- konten -->
    <?php $this->load->view($content);?>
    <!-- end konten -->
    <?php $this->load->view('admin/layout/footer');?>
	<!-- footer -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
	<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$('.dt').DataTable();

		// select2
		$(document).ready(function() {
		    $('.select2').select2();
		});
	</script>
</body>

</html>
