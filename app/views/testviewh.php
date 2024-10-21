<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, AdminWrap lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, AdminWrap lite design, AdminWrap lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="AdminWrap Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>AdminWrap Lite Free Version Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('public/images/favicon.png') ?>" />
    <!-- Custom CSS -->
    <link href="<?= base_url('public/node_modules/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('public/css/style.css') ?>" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('dist/datatables/datatables.min.css') ?>" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="lp-custom-row">
    <!-- ============================================================== -->
    <!-- Main wrapper -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Header part -->
        <!-- ============================================================== -->
        <!--<header class="py-3 bg-white">-->
        <header class="py-3 bg-white">
            <div class="container">
                <!-- Start Header -->
                <div class="header">
                    <nav class="navbar navbar-expand-md navbar-light px-0">
                        <a class="navbar-brand" href="#"> <img src="<?= base_url('public/images/logo-icon.png') ?>" alt="logo" />
                            &nbsp;<span> <img src="<?= base_url('public/images/SELLO_RONALD_NEGRO.png') ?>" alt="logo" />
                            </span>
                        </a>&nbsp;
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!--<ul class="navbar-nav ms-auto flex-row mt-3 mt-md-0">-->
                            <ul class="navbar-nav ms-auto mt-3 mt-md-0">
                                <!--<ul class="navbar-nav me-auto mb-2 mb-md-0">-->
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/users">
                                        <h6><i class="fa fa-area-chart"></i>&nbsp;
                                            Optimización</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/users/credenciales">
                                        <h6><i class="fa fa-calendar"></i>&nbsp;
                                            Cronograma de Licenciamiento</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/users/credenciales">
                                        <h6><i class="fa fa-users"></i>&nbsp;
                                            Fortalecimiento</h6>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-black" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <strong>Administrador&nbsp;</strong><i class="fa fa-user fa-fw"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li class="nav-item"><a class="nav-link" href="/admin/claves">&nbsp;Mi perfil</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/admin/claves">&nbsp;Cambiar clave</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <!-- Boton salir-->
                                        <form class="text-center ml-4" action="/logout">
                                            <input class="btn btn-custom btn-danger btn-lg" id="btnLogout" type="submit" value="Cerrar sesión"></input>
                                        </form>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- End Header -->
            </div>
        </header>
        <!-- ============================================================== -->
        <!-- Header part -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Page wrapper part -->
        <!-- ============================================================== -->
        <div class="content-wrapper">
            <!-- ============================================================== -->
            <!-- Demos part -->
            <!-- ============================================================== -->
            <section class="spacer bg-light">
                <div class="container">
                    <div class="row justify-content-md-center pt-0 pt-md-5">
                        <!--<div class="row py-5">-->
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
                </div>
            </section>
        </div>
        <!-- ============================================================== -->
        <!-- End page wrapperHeader part -->
        <!-- ============================================================== -->
        <footer class="text-center p-4">
            All Rights Reserved by Admin-Wrap Admin. Designed and Developed by <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
    </div>
</body>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url('public/node_modules/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url('public/node_modules/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="< ?= base_url('dist/js/jquery-3.7.0.min.js') ?>"></script>
<script src="<?= base_url('dist/datatables/datatables.min.js') ?>"></script>



<script>
    //document.addEventListener("DOMContentLoaded", function() {
    // Datatables Responsive
    // https://datatables.net/reference/button/excelHtml5

    //https://www.youtube.com/watch?v=j59H9xnyCBs
    $(document).ready(function() {
        var mytable = $("#example").DataTable({
            deferRender: true,
            responsive: true,
            pageLength: 5,
            lengthMenu: [5, 10, 25, 50],
            scrollH: true,
            scrollX: true,
            order: [],
            stateSave: true,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            }
        });

        new $.fn.dataTable.Buttons(mytable, {
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

</html>