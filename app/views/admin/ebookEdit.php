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
                <?= form_open('admincontroller/actualizaebook', array('enctype' => 'multipart/form-data')); ?>
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
                        <input type="text" class="form-control" id="ebook_author" name="ebook_author" value="<?= $item->ebook_author ?>">

                    </div>
                    <div class="col-md-4">
                        <label for="ebook_editorial">Editorial</label>
                        <input type="text" class="form-control" id="ebook_editorial" name="ebook_editorial" value="<?= $item->ebook_editorial ?>">

                    </div>
                    <div class="col-md-2">
                        <label for="ebook_year">Año</label>
                        <input type="text" class="form-control" id="ebook_year" name="ebook_year" value="<?= $item->ebook_year ?>">

                    </div>
                    <div class="col-md-2">
                        <label for="ebook_pages"># páginas</label>
                        <input type="text" class="form-control" id="ebook_pages" name="ebook_pages" value="<?= $item->ebook_pages ?>">

                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-md-12">
                        <label for="ebook_details">Detalles</label>
                        <textarea class="form-control" id="ebook_details" name="ebook_details" value="<?= $item->ebook_details ?>">
                        </textarea>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Archivo</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class='file form-control' id="ebook_file" name="ebook_file" data-browse-on-zone-click='true' />
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">

                        <label>Archivo</label>
                        <div></div>
                        <strong>Descarga:</strong>
                        <a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Descargar" target="_blank" download="<?= $item->ebook_url; ?>" href="<?= base_url('/uploads/pdf/' . $item->ebook_file); ?>">
                            <i class="fa fa-file-pdf" title="<?= $item->ebook_file ?>"></i>
                        </a>

                    </div>
                </div>
                <div class="row pt-3">
                    <?php if ($this->session->flashdata('flashSuccess')) : ?>
                        <p class='alert alert-success'> <?= $this->session->flashdata('flashSuccess') ?> </p>
                    <?php endif ?>
                </div>
                <div class="row pt-3">
                    <div class="col-md-3 mx-auto">
                        <div class="d-md-flex align-items-center">
                            <input class="btn btn-primary" type="submit" value="Actualizar datos"></input>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>