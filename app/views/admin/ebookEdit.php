<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!--begin::Row-->
<div class="row gy-5 g-xl-8 mt-9">
    <!-- column -->
    <div class="col-12">
        <div class="card border shadow-xs mb-4">

            <div class="card-header border-bottom pb-0 bg-secondary">
                <h4 class="card-title">Libro</h4>
            </div>
            <?= my_validation_errors(validation_errors()); ?>
            <div class="card-body">
                <?= form_open('admincontroller/actualizaebook', array('enctype' => 'multipart/form-data', 'id' => 'updateEbook')); ?>
                <input type="hidden" id="id" name="id" value="<?= $item->id ?>">
                <div class="row pt-3">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="name">Catálogo</label>
                            <?= form_dropdown('catalog_id', $catalogs, $item->catalog_id, 'class="form-select" id="catalog_id"'); ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="ebook_code">Código</label>
                            <input type="text" class="form-control" id="ebook_code" name="ebook_code" value="<?= $item->ebook_code ?>">
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-6">
                        <label for="ebook_title">Título</label>
                        <input type="text" class="form-control" id="ebook_title" name="ebook_title" value="<?= $item->ebook_title ?>">

                    </div>
                    <div class="col-md-6">
                        <label for="ebook_display">Título a mostrar</label>
                        <input type="text" class="form-control" id="ebook_display" name="ebook_display" value="<?= $item->ebook_display ?>">

                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-4">
                        <label for="ebook_author">Autor</label>
                        <input type="text" class="form-control" id="ebook_author" name="ebook_author" value="<?= ($item->ebook_author != NULL) ? $item->ebook_author : '' ?>">

                    </div>
                    <div class="col-md-4">
                        <label for="ebook_editorial">Editorial</label>
                        <input type="text" class="form-control" id="ebook_editorial" name="ebook_editorial" value="<?= ($item->ebook_editorial != NULL) ? $item->ebook_editorial : '' ?>">

                    </div>
                    <div class="col-md-2">
                        <label for="ebook_year">Año</label>
                        <input type="text" class="form-control" id="ebook_year" name="ebook_year" value="<?= ($item->ebook_year != NULL) ? $item->ebook_year : '' ?>">

                    </div>
                    <div class="col-md-2">
                        <label for="ebook_pages"># páginas</label>
                        <input type="text" class="form-control" id="ebook_pages" name="ebook_pages" value="<?= ($item->ebook_pages != NULL) ? $item->ebook_pages : '' ?>">

                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-md-12">
                        <label for="ebook_details">Detalles</label>
                        <textarea class="form-control" id="ebook_details" name="ebook_details">
                            <?= ($item->ebook_details != NULL) ? trim($item->ebook_details) : '' ?>
                        </textarea>
                    </div>
                </div>
                <br><br>
                <div class="row pt-3">
                    <br /><br />
                    <div class="col-md-4">

                        <label>Archivo actual</label>
                        <br>
                        <strong>Descarga:</strong>
                        <a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="<?= ($item->ebook_file != NULL) ? $item->ebook_file : '' ?>" target="_blank"
                            download="<?= ($item->ebook_file != NULL) ? $item->ebook_file : '' ?>" href="<?= base_url('uploads/pdf/' . $item->ebook_file); ?>">
                            <i class="fa fa-file-pdf"></i>
                            <strong><?= $item->ebook_code ?></strong>
                        </a>

                    </div>
                    <div class="col-md-2">
                        <label>Actualizar archivo?</label>
                        <br>
                        <label class="form-check form-check-custom form-check-solid form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkFile" id="checkFile" value="1" />
                            <span class="form-check-label fw-bold text-gray-700 fs-6">Reemplazar</span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nuevo archivo</label>
                            <br>
                            <div class="custom-file">
                                <input type="file" class='file form-control' id="ebook_file" name="ebook_file" data-browse-on-zone-click='true' disabled />
                            </div>
                            <div id="alert-gral">
                                <!--<div class="alert">-->
                                <div id="alert-msg">
                                    <div id="alert-title">

                                    </div>
                                </div>
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>


                </div>
                <div class="row pt-3">
                    <?php if ($this->session->flashdata('flashSuccess')) : ?>
                        <p class='alert alert-success'> <?= $this->session->flashdata('flashSuccess') ?> </p>
                    <?php endif ?>
                    <?php if ($this->session->flashdata('flashError')) : ?>
                        <p class='alert alert-danger'> <?= $this->session->flashdata('flashError') ?> </p>
                    <?php endif ?>
                </div>
                <div class="row pt-3">
                    <div class="col-md-6 mx-auto">
                        <div class="d-md-flex align-items-center">
                            <input class="btn btn-primary" type="submit" value="Actualizar datos" onclick="tinyMCE.triggerSave(true,true);"></input>
                            &nbsp;&nbsp;
                            <a class="btn btn-success" href="<?= base_url('admin/catalogo') ?>" type="button" value="Volver al listado">Volver al listado</a>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/plugins/pdfobject/jquery-3.7.1.min.js') ?>"></script>
<script>
    jQuery(document).ready(function() {
        $('#checkFile').on('change', function() {
            var selectCheck = $('input[name=checkFile]:checked', '#updateEbook').val();
            //alert(selectCheck);
            if (selectCheck !== null) {
                $('#ebook_file').prop('disabled', false);
                $('#ebook_file').prop('required', true);
            }
            if (selectCheck === undefined) {
                $('#ebook_file').prop('disabled', true);
                $('#ebook_file').prop('required', false);
            }
        });
    });
</script>

<script type="text/javascript">
    $('input[type="file"]').on('change', function() {
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            //if (ext != "pdf")
            //alert($(this).val()+'.....'+ext);
            //$(this).val('');
            if (ext == "pdf") {
                //alert("La extensión es: " + ext);
                if ($(this)[0].files[0].size > 67108864) {
                    console.log("El documento excede el tamaño máximo");
                    $('#alert-title').text('¡Precaución!');
                    $('#alert-msg').html("Se solicita un archivo no mayor a 4MB. Por favor verifica.");
                    $("#alert-gral").html();
                    $(this).val('');
                } else {
                    console.log("El documento esta permitido");
                    $('#alert-title').removeClass();
                    $("#alert-gral").hide();
                }
            } else {
                $(this).val('');
                //alert("Extensión no permitida: " + ext);
                $('#alert-title').addClass('text-danger');
                $('#alert-title').text("Extensión no permitida: " + ext);
            }
        }
    });
</script>