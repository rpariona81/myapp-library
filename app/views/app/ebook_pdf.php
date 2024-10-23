<style>
    #the-canvas {
        border: 1px solid black;
        padding: 0;
        margin: auto;
        display: block;
        width: calc(100% - 100px);
    }

    @media (width <=720px) {
        #the-canvas {
            border: 1px solid black;
            padding: 0;
            margin: auto;
            display: block;
            width: 100%;
        }
    }
</style>

<script src="<?= base_url() ?>assets/plugins/pdfjs/build/pdf.mjs" type="module"></script>
<script src="<?= base_url() ?>assets/plugins/pdfjs/build/pdf.sandbox.mjs" type="module"></script>
<script src="<?= base_url() ?>assets/plugins/pdfjs/build/pdf.worker.mjs" type="module"></script>


<!-- <script src="//mozilla.github.io/pdf.js/build/pdf.mjs" type="module"></script> -->

<script type="module">
    // If absolute URL from the remote server is provided, configure the CORS
    // header on that server.
    var url = '<?= base_url('uploads/pdf/' . $filepdf->ebook_file) ?>';

    // Loaded via <script> tag, create shortcut to access PDF.js exports.
    var {
        pdfjsLib
    } = globalThis;

    // The workerSrc property shall be specified.
    /* <!--pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.mjs'; -->*/
    pdfjsLib.GlobalWorkerOptions.workerSrc = '<?= base_url() ?>assets/plugins/pdfjs/build/pdf.worker.mjs';

    var pdfDoc = null,
        pageNum = 1,
        pageRendering = false,
        pageNumPending = null,
        scale = 1,
        canvas = document.getElementById('the-canvas'),
        ctx = canvas.getContext('2d');

    /**
     * Get page info from document, resize canvas accordingly, and render page.
     * @param num Page number.
     */
    function renderPage(num) {
        pageRendering = true;
        // Using promise to fetch the page
        pdfDoc.getPage(num).then(function(page) {
            var viewport = page.getViewport({
                scale: scale
            });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            var transform = scale !== 1 ? [scale, 0, 0, scale, 0, 0] :
                null;

            // Render PDF page into canvas context
            var renderContext = {
                canvasContext: ctx,
                transform: transform,
                viewport: viewport
            };
            var renderTask = page.render(renderContext);

            // Wait for rendering to finish
            renderTask.promise.then(function() {
                pageRendering = false;
                if (pageNumPending !== null) {
                    // New page rendering is pending
                    renderPage(pageNumPending);
                    pageNumPending = null;
                }
            });
        });

        // Update page counters
        document.getElementById('page_num').textContent = num;
    }

    /**
     * If another page rendering in progress, waits until the rendering is
     * finised. Otherwise, executes rendering immediately.
     */
    function queueRenderPage(num) {
        if (pageRendering) {
            pageNumPending = num;
        } else {
            renderPage(num);
        }
    }

    /**
     * Displays previous page.
     */
    function onPrevPage() {
        if (pageNum <= 1) {
            return;
        }
        pageNum--;
        queueRenderPage(pageNum);
    }
    document.getElementById('prev').addEventListener('click', onPrevPage);

    /**
     * Displays next page.
     */
    function onNextPage() {
        if (pageNum >= pdfDoc.numPages) {
            return;
        }
        pageNum++;
        queueRenderPage(pageNum);
    }

    document.getElementById('next').addEventListener('click', onNextPage);

    /**
     * Displays next page.
     */
    function zoomOut() {
        if (scale > 1) scale -= 0.1;
        queueRenderPage(pageNum);
    }

    document.getElementById('zoomOut').addEventListener('click', zoomOut);

    /**
     * Displays next page.
     */
    function zoomIn() {
        scale += 0.1;
        queueRenderPage(pageNum);
    }

    document.getElementById('zoomIn').addEventListener('click', zoomIn);

    /**
     * Asynchronously downloads PDF.
     */
    pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('page_count').textContent = pdfDoc.numPages;

        // Initial/first page rendering
        renderPage(pageNum);
    });
</script>

<div class="card ">
    <!--begin::Card body-->
    <div class="card-body p-0">
        <!--begin::Wrapper-->
        <div class="card-px text-center pt-20 my-10">
            <!--begin::Title-->
            <h2 class="fs-2x fw-bold mb-10"><?= $filepdf->ebook_display ?></h2>
            <!--end::Title-->

            <!--begin::Description-->
            <p class="text-gray-500 fs-4 fw-semibold">
            <div>
                <button class="btn btn-secondary" id="prev">Previous</button>
                <button class="btn btn-secondary" id="next">Next</button>
                <button class="btn btn-secondary" id="zoomIn">++</button>
                <button class="btn btn-secondary" id="zoomOut">--</button>
                &nbsp; &nbsp;
                <span>Páginas: <span id="page_num"></span> / <span id="page_count"></span></span>
            </div>
            </p>
            <!--end::Description-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Illustration-->
        <div class="text-center px-4 mb-10">

            <canvas id="the-canvas">

            </canvas>
        </div>
        <!--end::Illustration-->

    </div>
    <!--end::Card body-->
</div>