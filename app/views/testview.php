<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords"
	content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, AdminWrap lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, AdminWrap lite design, AdminWrap lite dashboard bootstrap 5 dashboard template" />
<meta name="description"
	content="AdminWrap Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
<meta name="robots" content="noindex,nofollow" />
<title>AdminWrap Lite Template by WrapPixel</title>
<link rel="canonical"
	href="https://www.wrappixel.com/templates/adminwrap-lite/" />
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16"
	href="<?=base_url('public/images/favicon.png')?>" />
<!-- Bootstrap Core CSS -->
<link
	href="<?=base_url('public/node_modules/bootstrap/css/bootstrap.min.css')?>"
	rel="stylesheet" />
<!-- Custom CSS -->
<link href="<?=base_url('public/css/style.css')?>" rel="stylesheet" />
<!-- You can change the theme colors from here -->
<link href="<?=base_url('public/css/colors/default.css')?>" id="theme"
	rel="stylesheet" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?= base_url('dist/datatables/datatables.min.css') ?>" />
</head>

<body class="fix-header card-no-border fix-sidebar">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="loader">
			<div class="loader__figure"></div>
			<p class="loader__label">Admin Wrap</p>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar">
			<nav class="navbar top-navbar navbar-expand-md navbar-light">
				<!-- ============================================================== -->
				<!-- Logo -->
				<!-- ============================================================== -->
				<div class="navbar-header">
					<a class="navbar-brand" href="index.html"> <!-- Logo icon -->
						<b> <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon --> <img
							src="<?=base_url('public//images/logo-icon.png')?>"
							alt="homepage" class="dark-logo" /> <!-- Light Logo icon -->
							<img src="<?=base_url('public/images/logo-light-icon.png')?>"
							alt="homepage" class="light-logo" />
					</b> <!--End Logo icon --> <!-- Logo text -->
						<span> <!-- dark Logo text --> <img
							src="<?=base_url('public/images/logo-text.png')?>" alt="homepage"
							class="dark-logo" /> <!-- Light Logo text --> <img
							src="<?=base_url('public/images/logo-light-text.png')?>"
							class="light-logo" alt="homepage" /></span>
					</a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav me-auto">
						<li class="nav-item"><a
							class="
                    nav-link nav-toggler
                    hidden-md-up
                    waves-effect waves-dark
                  "
							href="javascript:void(0)"><i
								class="fa fa-bars"></i></a></li>
						<!-- ============================================================== -->
						<!-- Search -->
						<!-- ============================================================== -->
						<li class="nav-item hidden-xs-down search-box"><a
							class="nav-link hidden-sm-down waves-effect waves-dark"
							href="javascript:void(0)"><i
								class="fa fa-search"></i></a>
							<form class="app-search">
								<input type="text" class="form-control"
									placeholder="Search & enter" /> <a
									class="srh-btn"><i class="fa fa-times"></i></a>
							</form></li>
					</ul>
					<!-- ============================================================== -->
					<!-- User profile and search -->
					<!-- ============================================================== -->
					<ul class="navbar-nav my-lg-0">
						<!-- ============================================================== -->
						<!-- Profile -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown u-pro"><a
							class="
                    nav-link
                    dropdown-toggle
                    waves-effect waves-dark
                    profile-pic
                  "
							href="" data-bs-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false"><img
								src="<?=base_url('public/images/users/1.jpg')?>" alt="user"
								class="" /> <span class="hidden-md-down">Mark
									Sanders &nbsp;</span> </a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav">
						<li><a class="waves-effect waves-dark" href="index.html"
							aria-expanded="false"><i
								class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
						</li>
						<li><a class="waves-effect waves-dark"
							href="pages-profile.html" aria-expanded="false"><i
								class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
						</li>
						<li><a class="waves-effect waves-dark"
							href="table-basic.html" aria-expanded="false"><i
								class="fa fa-table"></i><span class="hide-menu">Tables</span></a></li>
						<li><a class="waves-effect waves-dark"
							href="icon-fontawesome.html" aria-expanded="false"><i
								class="fa fa-smile-o"></i><span class="hide-menu">Icons</span></a></li>
						<li><a class="waves-effect waves-dark" href="map-google.html"
							aria-expanded="false"><i
								class="fa fa-globe"></i><span class="hide-menu">Map</span></a></li>
						<li><a class="waves-effect waves-dark"
							href="pages-blank.html" aria-expanded="false"><i
								class="fa fa-bookmark-o"></i><span class="hide-menu">Blank</span></a>
						</li>
						<li><a class="waves-effect waves-dark"
							href="pages-error-404.html" aria-expanded="false"><i
								class="fa fa-question-circle"></i><span class="hide-menu">404</span></a>
						</li>
					</ul>
					<div class="text-center mt-4">
						<a href="https://www.wrappixel.com/templates/adminwrap/"
							class="
                  btn
                  waves-effect waves-light
                  btn-info
                  hidden-md-down
                  text-white
                ">
							Upgrade to Pro</a>
					</div>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			<div class="container-fluid">
				<!-- ============================================================== -->
				<!-- Bread crumb and right sidebar toggle -->
				<!-- ============================================================== -->
				<div class="row page-titles">
					<div class="col-md-5 align-self-center">
						<h3 class="text-themecolor">Table Basic</h3>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
							</li>
							<li class="breadcrumb-item active">Table Basic</li>
						</ol>
					</div>
					<div class="col-md-7 align-self-center">
						<a href="https://www.wrappixel.com/templates/adminwrap/"
							class="
                  btn
                  waves-effect waves-light
                  btn btn-info
                  pull-right
                  hidden-sm-down
                  text-white
                ">
							Upgrade to Pro</a>
					</div>
				</div>
				<!-- ============================================================== -->
				<!-- End Bread crumb and right sidebar toggle -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- Start Page Content -->
				<!-- ============================================================== -->
				<div class="row">
					<!-- column -->
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Basic Table</h4>
								<h6 class="card-subtitle">
									Add class
									<code>.table</code>
								</h6>
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Deshmukh</td>
												<td>Prohaska</td>
												<td>@Genelia</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Deshmukh</td>
												<td>Gaylord</td>
												<td>@Ritesh</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Sanghani</td>
												<td>Gusikowski</td>
												<td>@Govinda</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Roshan</td>
												<td>Rogahn</td>
												<td>@Hritik</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Joshi</td>
												<td>Hickle</td>
												<td>@Maruti</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Nigam</td>
												<td>Eichmann</td>
												<td>@Sonu</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 text-info">Empty card</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th colspan="7" class="heading"><span style="float: right">Jquery Datatables</span></th>
                                            </tr>
                                            <tr class="bg-warning text-dark">
                                                <th>Order</th>
                                                <th>Start Date</th>
                                                <th>Salary</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($query as $item) : ?>
                                                <tr>
                                                    <td><?= $item->id ?></td>
                                                    <td><?= $item->region_id ?></td>
                                                    <td><?= $item->codentidad ?></td>
                                                    <td><?= $item->entidad ?></td>
                                                    <td><?= $item->titulo_entidad ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                        if ($item->codtipoentidad == NULL) {
                                                        } else {
                                                            echo '<a class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar CV" target="_blank" download="' . $item->codtipoentidad . '" href="' . base_url('/uploads/filescv/' . $item->codtipoentidad) . '"><i class="fa fa-file-pdf-o" title="' . $item->codtipoentidad . '"></i></a></td>';
                                                        }
                                                        ?>
                                                    <td><?= $item->codgestionentidad ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				<!-- ============================================================== -->
				<!-- End PAge Content -->
				<!-- ============================================================== -->
			</div>
			<!-- ============================================================== -->
			<!-- End Container fluid  -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->
			<footer class="footer">
				© 2021 Adminwrap by <a href="https://www.wrappixel.com/">wrappixel.com</a>
			</footer>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="<?=base_url('public/node_modules/jquery/jquery.min.js')?>"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script
		src="<?=base_url('public/node_modules/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
	<!-- slimscrollbar scrollbar JavaScript -->
	<script
		src="<?=base_url('public/js/perfect-scrollbar.jquery.min.js')?>"></script>
	<!--Wave Effects -->
	<script src="<?=base_url('public/js/waves.js')?>"></script>
	<!--Menu sidebar -->
	<script src="<?=base_url('public/js/sidebarmenu.js')?>"></script>
	<!--Custom JavaScript -->
	<script src="<?=base_url('public/js/custom.min.js')?>"></script>
	<!-- jQuery peity -->
	<script
		src="<?=base_url('public/node_modules/peity/jquery.peity.min.js')?>"></script>
	<script
		src="<?=base_url('public/node_modules/peity/jquery.peity.init.js')?>"></script>

        <script src="<?= base_url('dist/js/jquery-3.7.0.min.js') ?>"></script>
    <script src="<?= base_url('dist/datatables/datatables.min.js') ?>"></script>

    <script>
        //document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            // https://datatables.net/reference/button/excelHtml5

        //https://www.youtube.com/watch?v=j59H9xnyCBs
        $(document).ready(function(){
            var mytable = $("#example").DataTable({
                deferRender: true,
                responsive: true,
                pageLength: 5,
                lengthMenu: [ 5, 10, 25, 50 ],
                scrollH: true,
                scrollX: true,
                order: [],
                stateSave: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                }
            });

            new $.fn.dataTable.Buttons( mytable , {
                buttons: [
                    'copy', 'pdf', 
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        customize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        //Para ver los estilos de formato https://datatables.net/reference/button/excelHtml5
                        $('row c[r^="B"]', sheet).attr('s', '57');
                        //Para que la columna se muestre como texto https://datatables.net/forums/discussion/73814/export-to-excel-with-format-text-for-column-b-c-and-d
                        $('row c[r^="C"]', sheet).attr('s', '50');
                        }
                    }
                ]
            });

            mytable.buttons().container().appendTo($('tr th.heading', mytable.table().container()));

        });
    </script>

</body>
</html>
