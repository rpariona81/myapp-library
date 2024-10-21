<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>eStartup Bootstrap Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/img/favicon.png" rel="icon">
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

	<!-- Bootstrap css -->
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/css/datatables.bootstrap4.min.css" rel="stylesheet">
	<!--<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/css/jquery.datatables.min.css" rel='stylesheet'>-->
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/css/buttons.dataTables.min.css" rel="stylesheet" />

	<!-- Main Stylesheet File -->
	<link href="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/css/style.css" rel="stylesheet">

	<!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

</head>

<body>

	<div class="container">
		<h1>Welcome to CodeIgniter!</h1>

		<div id="body">
			<p>Send Email by CodeIgniter.</p>
			<a class="button btn btn-sm btn-warning" href="<?=base_url('enviar')?>">Enviar</a>

		</div>
		<footer>
			<div class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
		</footer>
	</div>
	</div>
	<!-- JavaScript Libraries -->
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/jquery/jquery.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/jquery/jquery-migrate.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/superfish/hoverIntent.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/superfish/superfish.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/easing/easing.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/modal-video/js/modal-video.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/wow/wow.min.js"></script>


	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/js/jquery.datatables.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/js/datatables.bootstrap4.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/js/dataTables.buttons.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/js/buttons.flash.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/js/jszip.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/js/pdfmake.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/js/vfs_fonts.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/js/buttons.html5.min.js"></script>
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/lib/datatable/js/buttons.print.min.js"></script>


	<!-- Contact Form JavaScript File -->
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/contactform/contactform.js"></script>

	<!-- Template Main Javascript File -->
	<script src="<?= getenv('FOLDER_PUBLIC') ?? '' ?>/js/main.js"></script>
</body>

</html>