<style>
    #the-canvas {
        border: 1px solid black;
        padding: 0;
        margin: auto;
        display: block;
        width: calc(100% - 100px);
        height: 100vh;
        height: 100dvh;
    }

    @media (width <=720px) {
        #the-canvas {
            border: 1px solid black;
            padding: 0;
            margin: auto;
            display: block;
            width: 100%;
            height: 100vh;
            height: 100dvh;
        }
    }
</style>
</style>

<script src="<?= base_url() ?>assets/plugins/pdfjs/build/pdf.mjs" type="module"></script>
<script src="<?= base_url() ?>assets/plugins/pdfjs/web/viewer.mjs" type="module"></script>
<script src="<?= base_url() ?>assets/plugins/pdfjs/build/pdf.sandbox.mjs" type="module"></script>
<script src="<?= base_url() ?>assets/plugins/pdfjs/build/pdf.worker.mjs" type="module"></script>

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

                <iframe id="the-canvas"
                    src="<?= base_url() ?>assets/plugins/pdfjs/web/viewer.html?file=<?= base_url('uploads/pdf/' . $filepdf->ebook_file) ?>" </iframe>

            </div>
        </div>
    </div>
</div>