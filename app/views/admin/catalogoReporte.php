<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!--begin::Row-->
<div class="row gy-5 g-xl-8 mt-9">
    <!-- column -->
    <div class="col-12">
        <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0 bg-secondary">
                <!-- <div class="d-sm-flex align-items-center"> -->
                <?= form_open('', array('id' => 'FRM_DATOS', 'class' => 'form-horizontal', 'onsubmit' => 'window.location.reload()')); ?>

                <div class="row pt-3">
                    <div class="col-md-4 col-lg-4 align-self-center">
                        <div class="mb-3">
                            <h5 class="card-title text-dark">Catálogo</h5>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 mx-auto">
                        <div class="mb-3">
                            <div class="input-group mb-3">

                                <?= form_dropdown('catalog_id', $catalogs, $selectValue, 'class="form-select" id="catalog_id" required'); ?>
                                &nbsp;
                                <button class="btn btn-primary pull-right font-weight-medium mb-0" type="submit">
                                    <!--<i class="ti-search"></i>-->
                                    <i class="fa fa-search"></i>&nbsp;Filtrar por programa
                                    <!--<i class="fa fa-filter"></i>-->
                                </button>

                                &nbsp;
                                <a class="btn btn-danger" href="<?= base_url('/admin/catalogo') ?>">Limpiar filtro</a>

                            </div>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive p-0">
                    <!--<table id="datatable" name="datatablesSimple" class="table display nowrap table-hover table-bordered mb-0 border-top text-sm" style="width:100%">-->
                    <table id="datatable" name="datatablesSimple" class="table table-striped nowrap dataTable no-footer dtr-inline" style="width:100%">
                        <thead>
                            <tr>
                                <th colspan="5" class="heading"></th>
                            </tr>
                            <tr class="table-primary">
                                <th class="px-2">Código</th>
                                <th>Título</th>
                                <th># lectores</th>
                                <th>última lectura</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $item) : ?>
                                <tr class="align-middle">
                                    <td class="align-middle px-auto"><?= str_pad((int)$item->ebook_code, 5, '0', STR_PAD_LEFT); ?></td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-50px overflow-hidden me-3">
                                            <div class="symbol-label">
                                                <img src="<?= $item->ebook_front_page ?? base_url('assets/media/books/portada_amarilla.png') ?>" alt="Emma Smith" class="w-100" />
                                            </div>

                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <strong class="text-hover-primary mb-1"><?= $item->ebook_display ?></strong>
                                            <span class="text-muted"><?= $item->catalog_display ?></span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <!-- <td></td> -->
                                    <td class="align-middle px-2"><?= str_pad((int)$item->cantReaders, 5, '0', STR_PAD_LEFT); ?></td>
                                    <td class="align-middle px-2"><?= $item->lastView ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <?php
                                            if ($item->status) {
                                                echo '<a name="Detalle" href="' . base_url('/admin/detalle/' . $item->id) . '" class="btn btn-primary btn-sm display-inline" data-bs-toggle="tooltip" data-bs-placement="left" title="Ver detalles"><i class="fa fa-eye"></i></button></a>';
                                            }
                                            ?>

                                            <a class="btn btn-outline-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Editar" href="<?= base_url('/admin/ebook/' . $item->id) ?>"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>