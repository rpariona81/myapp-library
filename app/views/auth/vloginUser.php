<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= getenv('APP_NAME') ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css_ex/sticky-footer.css') ?>">

    <link href="<?= base_url('assets/css_ex/styles.css') ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="login-logo text-center mt-4">
                        <img src="<?= base_url('assets/img/logoJMV.jpg') ?>" width="250" height="250" id="logo">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <!--<div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>-->
                                <div class="card-header">
                                    <h3>Bienvenido(a)</h3>
                                    <p class="font-weight-light my-4">Ingresa tu usuario y contraseña para iniciar sesión</p>
                                </div>

                                <div class="card-body">
                                    <?php if ($this->session->flashdata('flashSuccess')) : ?>
                                        <p class='alert alert-success'> <?= $this->session->flashdata('flashSuccess') ?> </p>
                                    <?php endif ?>

                                    <?php if ($this->session->flashdata('flashError')) : ?>
                                        <p class='alert alert-danger'> <?= $this->session->flashdata('flashError') ?> </p>
                                    <?php endif ?>

                                    <?php if ($this->session->flashdata('flashInfo')) : ?>
                                        <p class='alert alert-info'> <?= $this->session->flashdata('flashInfo') ?> </p>
                                    <?php endif ?>

                                    <?php if ($this->session->flashdata('flashWarning')) : ?>
                                        <p class='alert alert-warning'> <?= $this->session->flashdata('flashWarning') ?> </p>
                                    <?php endif ?>
                                    <hr>
                                    <?= form_open('authcontroller/loginUser') ?>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="username" name="username" type="text" placeholder="Usuario" value="<?= set_value('username') ?>" size="50" required />
                                        <label for="inputUser">Usuario</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" value="<?= set_value('password') ?>" size="50" required />
                                        <label for="inputPassword">Contraseña</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                        <a class="btn btn-warning" href="/">Regresar</a>&nbsp;&nbsp;
                                        <input class="btn btn-primary" id="btnLogin" type="submit" value="Ingresar"></input>
                                    </div>
                                    <?= form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </main>
        </div>
    </div>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>-->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js_ex/scripts.js') ?>"></script>
</body>

</html>