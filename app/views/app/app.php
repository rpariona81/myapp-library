<style>
    .pdfobject-container {
        height: 100vh;
        height: 100dvh;
        border: 1px solid #ccc;
    }
</style>

<div class="card ">
    <!--begin::Card body-->
    <div class="card-body p-0">
        <!--begin::Wrapper-->
        <div class="card-px text-center pt-20 my-10">
            <!--begin::Title-->
            <h2 class="fs-2x fw-bold mb-10"><?= $filepdf->ebook_display ?></h2>
            <!--end::Title-->
            <!--begin::Illustration-->
            <div class="text-center px-4 mb-10">

                <div id="my-pdf"></div>

                <script src="<?= base_url('assets/plugins/pdfobject/pdfobject.min.js') ?>"></script>
                <script>
                    PDFObject.embed("<?= base_url('uploads/pdf/' . $filepdf->ebook_file) ?>", "#my-pdf");
                </script>
            </div>
        </div>
    </div>
</div>