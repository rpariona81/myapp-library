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
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('public/assets/images/favicon.png') ?>">
    <!-- Custom CSS -->
    <link href="<?= base_url('public/assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('public/lite/css/spinners.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/lite/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/lite/css/colors/golden.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/lite/css/signin.css') ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="text-center">
    <div class="container col-lg-4">
        <div>
            <img class="mb-4" src="<?= base_url('public/assets/images/logo-mini.png') ?>" width="200" height="230" id="logo">
        </div>
        <div class="card">

            <div class="card-header text-white bg-secondary">
                <!--<h3 class="card-title">Bienvenido(a)</h3>-->
                <p class="font-weight-light my-1">INICIAR SESIÓN</p>
            </div>
            <div class="card-body">
                <?php if ($this->session->flashdata('flashSuccess')) : ?>
                    <div class="d-grid gap-2 px-3">
                        <p class='mt-1 alert alert-success'> <?= $this->session->flashdata('flashSuccess') ?> </p>
                    </div>
                <?php endif ?>

                <?php if ($this->session->flashdata('flashError')) : ?>
                    <div class="d-grid gap-2 px-3">
                        <p class='mt-1 alert alert-danger'> <?= $this->session->flashdata('flashError') ?> </p>
                    </div>
                <?php endif ?>

                <?php if ($this->session->flashdata('flashInfo')) : ?>
                    <div class="d-grid gap-2 px-3">
                        <p class='mt-1 alert alert-info'> <?= $this->session->flashdata('flashInfo') ?> </p>
                    </div>
                <?php endif ?>

                <?php if ($this->session->flashdata('flashWarning')) : ?>
                    <div class="d-grid gap-2 px-3">
                        <p class='mt-1 alert alert-warning'> <?= $this->session->flashdata('flashWarning') ?> </p>

                    <?php endif ?>

                    <?= form_open('authcontroller/loginAdmin',  ['class' => 'form-signin']) ?>
                    <div class="form-row">
                        <label for="inputEmail" class="sr-only">Usuario</label>
                        <input class="form-control" id="username" name="username" type="text" placeholder="Usuario" value="<?= set_value('username') ?>" size="50" required />
                    </div><br>
                    <div class="form-row">
                        <label for="inputPassword" class="sr-only">Contraseña</label>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" value="<?= set_value('password') ?>" size="50" required />
                    </div>
                    <div class="form-row">
                        <div class="col-6 pull-left">
                            <a class="btn btn-warning px-3 btn-block" href="/">Regresar</a>&nbsp;&nbsp;
                        </div>
                        <div class="col-6 pull-right">
                            <input class="btn bg-secondary text-white px-3 btn-block" id="btnLogin" type="submit" value="Ingresar"></input>
                        </div>
                    </div>
                    <?= form_close() ?>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Login box.scss -->
                    <!-- -------------------------------------------------------------- -->
            </div>

            <!-- -------------------------------------------------------------- -->
            <!-- All Required js -->
            <!-- -------------------------------------------------------------- -->
            <script src="<?= base_url('public/assets/plugins/jquery/jquery.min.js') ?>"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?= base_url('public/assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
            <!-- -------------------------------------------------------------- -->
            <!-- This page plugin js -->
            <!-- -------------------------------------------------------------- -->
            <script src="<?= base_url('public/lite/js/jquery.slimscroll.js') ?>"></script>
            <script src="<?= base_url('public/lite/js/waves.js') ?>"></script>
            <script src="<?= base_url('public/lite/js/custom.min.js') ?>"></script>



</body>

</html>