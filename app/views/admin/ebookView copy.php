<style>
    .pdfobject-container {
        width: 100%;
        height: 80vh;
        height: 60dvh;
        border: 1px solid #ccc;
    }
</style>

<div class="row mt-9">
<!--begin::Layout-->
<div class="d-flex flex-column flex-lg-row">
    <!--begin::Content-->
    <!-- <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-lg-15 me-xl-10"> -->
    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-lg-15 me-xl-10">
        <!--begin::Card-->
        <div class="card d-flex">
            <!--begin::Card body-->
            <div class="card-body p-12">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                        <!--begin::Input group-->
                        <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Specify invoice date">
                            <!--begin::Date-->
                            <h2><?php echo $book->ebook_code . ' - ' . $book->ebook_display; ?></h2>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->


                    </div>
                    <!--end::Top-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-10"></div>
                    <!--end::Separator-->
                    <!--begin::Wrapper-->
                    <div class="mb-0">
                        <!--begin::Row-->
                        <div class="row gx-10 mb-5">
                            <embed src="<?= base_url('uploads/pdf/' . $book->ebook_file) ?>" frameborder="0" width="100%" height="600px">
                        </div>
                        <!--end::Row-->


                        <!--begin::Notes-->
                        <div class="mb-0">
                            <label class="form-label fs-6 fw-bolder text-gray-700">Notas</label>
                            <textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Thanks for your business"><?= html_entity_decode($book->ebook_details) ?></textarea>
                        </div>
                        <!--end::Notes-->
                    </div>
                    <!--end::Wrapper-->
                
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
    <!--begin::Sidebar-->
    <div class="flex-lg-auto min-w-lg-300px">
        <!--begin::Card-->
        <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
            <!--begin::Card body-->
            <div class="card-body p-10">
                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder fs-6 text-gray-700">Catálogo</label>
                    <!--end::Label-->
                    <!--begin::Select-->
                    <h6><?= $book->catalog_display ?></h6>
                    <!--end::Select-->
                </div>
                <!--end::Input group-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-8"></div>
                <!--end::Separator-->
                <!--begin::Input group-->
                <div class="mb-8">
                    <!--begin::Option-->
                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Autor:
                            <?= $book->ebook_author ?></span>
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Año:
                            <?= $book->ebook_code ?></span>
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Cant. de pág.:
                            <?= $book->ebook_pages ?> </span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Input group-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-8"></div>
                <!--end::Separator-->
                <!--begin::Actions-->
                <div class="mb-0">
                    <!--begin::Row-->
                    <a href="<?= base_url('admin/catalogo') ?>" class="btn btn-primary btn-active-light-primary w-100">Volver al listado</a>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Sidebar-->
</div>
<!--end::Layout-->
</div>

<script src="<?= base_url('assets/plugins/pdfobject/jquery-3.7.1.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/pdfobject/pdfobject.min.js') ?>"></script>