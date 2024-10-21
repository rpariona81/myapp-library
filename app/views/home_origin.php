<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= getenv('APP_NAME') ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro is powerful and clean admin dashboard template">
    <meta name="robots" content="noindex,nofollow">
    <title><?= getenv('APP_NAME') ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro/">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon.png') ?>">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />

</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="mx-auto text-center px-5 col-lg-4 col-md-6 col-7">
                <img class="mb-4" style="opacity: 0.5;" src="<?= base_url('assets/img/theme/slack.png') ?>" width="200" height="230" id="logo">
            </div>
        </div>
    </div>
    <section id="team" class="padd-section text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

        <div class="container mb-3 mt-3">
            <div class="card card-body py-2 bg-transparent shadow-none">
                <h2>Bolsa laboral Ejemplo</h2>
                <h4>¡Bienvenidos!</h4>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-12 col-xl-4 mb-4">
                    <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                        <div class="full-background bg-cover" style="background-image: url('<?= base_url('assets/img/app/Especializacion_laboral.jpg') ?>')"></div>
                        <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                        <div class="card-body text-start p-3 w-100">
                            <div class="row">
                                <div class="col-12">
                                    <div class=" shadow d-flex align-items-center w-100 border-radius-md border border-0 mt-9 p-3 bg-opacity-50">
                                    <a class="btn btn-large btn-success px-5 mx-auto" href="/wp-login"><strong>Estudiantes y egresados</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-4 mb-4">
                    <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                        <div class="full-background bg-cover" style="background-image: url('<?= base_url('assets/img/app/estudiar-ingenieria-comercial.jpg') ?>')"></div>
                        <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                        <div class="card-body text-start p-3 w-100">
                            <div class="row">
                                <div class="col-12">
                                    <div class=" shadow d-flex align-items-center w-100 border-radius-md border border-0 mt-9 p-3 bg-opacity-10">
                                    <a class="btn btn-large btn-info px-5 mx-auto" href="/wp-login"><strong>Docentes</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-4 mb-4">
                    <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                        <div class="full-background bg-cover" style="background-image: url('<?= base_url('assets/img/app/systemadmin_2.jpg')?>')"></div>
                        <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                        <div class="card-body text-start p-3 w-100">
                            <div class="row">
                                <div class="col-12">
                                    <div class=" shadow d-flex align-items-center w-100 border-radius-md border border-0 mt-9 p-3 bg-opacity-10">
                                    <a class="btn btn-large btn-danger px-5 mx-auto" href="/wp-admin"><strong>Administrador</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </section>
    </div>

    <!-- -------------------------------------------------------------- -->
    <!-- All Required js -->
    <!-- -------------------------------------------------------------- -->
    <!-- JavaScript Libraries -->
    <script src="<?= base_url('public/app/lib/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/jquery/jquery-migrate.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- -------------------------------------------------------------- -->
    <!-- This page plugin js -->
    <!-- -------------------------------------------------------------- -->
    <!-- Template Main Javascript File -->
    <script src="<?= base_url('public/app/js/main.js') ?>"></script>
</body>

</html>