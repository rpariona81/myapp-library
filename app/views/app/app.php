<div class="card ">

    <div class="card-header">
        <h3 class="card-title align-items-start mt-5 flex-column">
            <span class="card-label fw-bolder text-dark"><?= $filepdf->ebook_display ?></span>
            <span class="text-muted mt-1 fw-bold fs-5"><?= $filepdf->ebook_year ?></span>
        </h3>        
    </div>
    <!--begin::Card body-->
    <div class="card-body p-0">
        <!--begin::Wrapper-->
        <div class="card-px pt-10 my-10">
            
        <!--begin::Illustration-->
            <div class="text-center px-5 mb-10">

                <pdfjs-viewer-element
                    src="<?= base_url('uploads/pdf/' . $filepdf->ebook_file) ?>"
                    viewer-path="<?= base_url() ?>assets/plugins/pdfjs/"
                    viewer-css-theme="DARK"
                    locale="es"
                    page="1"
                    viewer-extra-styles="#downloadButton { display: none; }"
                    style="height: 100dvh; border: 1px solid; border-color:black">
                </pdfjs-viewer-element>

                <script type="module" src="https://cdn.skypack.dev/pdfjs-viewer-element"></script>

            </div>
        </div>
    </div>
</div>