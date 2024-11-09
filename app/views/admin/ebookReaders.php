<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!--begin::Row-->
<div class="row gy-5 g-xl-8 mt-9">
    <!-- column -->
    <div class="col-12">
        <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0 bg-light">
                <div class="d-flex flex-wrap flex-stack mb-6">
                    <!--begin::Title-->
                    <h3 class="fw-bolder my-2">Lectores

                    </h3>
                    <!--end::Title-->
                    <!--begin::Controls-->
                    <div class="d-flex align-items-center my-2">
                        <!--begin::Select wrapper-->
                        <div class="w-100px me-5">

                        </div>
                        <!--end::Select wrapper-->
                        <a class="btn btn-warning btn-sm" href="<?= base_url('admin/reportes') ?>">Volver al listado</a>
                    </div>
                    <!--end::Controls-->
                </div>
            </div>



            <div class="card-body">
                <div class="table-responsive p-0">
                    <!-- <table id="datatable" name="datatablesSimple" class="table display nowrap table-hover table-bordered mb-0 border-top text-sm" style="width:100%"> -->
                    <table id="datatable" name="datatablesSimple" class="table table-striped nowrap dataTable no-footer dtr-inline" style="width:100%">
                        <thead>
                            <tr>
                                <th colspan="4" class="heading"></th>
                            </tr>
                            <tr class="table-primary">
                                <th class="px-2">Libro consultado</th>
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Nombres y apellidos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($records as $item) : ?>
                                <tr class="align-middle">
                                    <td class="px-2"><?= $item->ebook_display ?></td>
                                    <td><?= $item->username ?></td>
                                    <td><?= $item->email ?></td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <strong class="text-hover-primary mb-1"><?= $item->name . ' ' . $item->paternal_surname . ' ' . $item->maternal_surname ?></strong>
                                            <span class="text-gray-800"><?= $item->career_title ?></span>
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