<!--begin::Card-->
<div class="card mb-7">
    <?= form_open('', array('id' => 'FRM_DATOS', 'class' => 'form-horizontal card-toolbar', 'onsubmit' => 'window.location.reload()')); ?>
    <!--begin::Card body-->
    <div class="card-body">
        <!--begin::Compact form-->
        <div class="d-flex align-items-center">
            <!--begin::Input group-->
            <div class="position-relative w-md-400px me-md-2">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                    </svg>
                </span>
                <?= form_input(array('name' => 'search', 'value' => '', 'placeholder' => 'Buscar...', 'class' => 'form-control form-control-solid ps-10', 'id' => 'search_id', 'data-kt-search-element' => 'input')); ?>
            </div>
            <!--begin:Action-->
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary me-5">Buscar</button>
            </div>
            <!--end:Action-->

        </div>

    </div>
    <?= form_close() ?>
</div>

<div class="row mb-5">
    <div class="g-5 gx-xxl-8">
        <div class="card card-xxl-stretch">
            <div class="card-header border-bottom pt-2">
                <h3 class="fw-bolder me-5 my-1 pt-5">
                    <p>Resultados: 444</p>
                </h3>
            </div>
            <div class="card-body">
                <div class="row gy-5 g-xl-8">
                    <?php foreach ($queryNoVigentes as $item) : ?>
                        <div class="col-md-6 col-xxl-4">
                            <div class="card-xl-stretch me-md-6 shadow-sm">
                                <div class="card-header border-0 py-5">
                                    <h2 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1"><?= $item->title ?></span>
                                        <span class="class=" text-muted fw-bold fs-7">
                                            <font color="red"><em><?= $item->employer ?></em></font>
                                        </span>
                                    </h2>
                                </div>
                                <div class="card-body d-flex flex-column text-sm">
                                    <!--<ul style="list-style: none; padding: 0; margin: 0;">-->
                                    <ul class="list-unstyled mt-0 mb-4">
                                        <li>
                                            <i class="fa fa-calendar" style="height: 20px; width: 20px; text-align: center;"></i>
                                            <span>&nbsp;Finaliza el <?= date("d/m/Y", strtotime($item->date_vigency)); ?></span>&nbsp;
                                            <span class="badge bg-danger text-white"><?= $item->expired ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker" style="height: 20px; width: 20px; text-align: center;"></i>
                                            <span>&nbsp;<?= $item->ubicacion ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa fa-money" style="height: 20px; width: 20px; text-align: center;"></i>
                                            <span>&nbsp;S/&nbsp;<?= $item->salary ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-graduation-cap" style="height: 20px; width: 20px; text-align: center;"></i>
                                            <span>&nbsp;<?= $item->career_title . ' [Cód. ' . str_pad($item->id, 6, '0', STR_PAD_LEFT) . ']'; ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-users" style="height: 20px; width: 20px; text-align: center;"></i>
                                            <span>&nbsp;<?= $item->vacancy_numbers ?>&nbsp;vacantes - &nbsp;<?= $item->type_offer ?></span>
                                        </li>
                                    </ul>
                                    <a type="button" class="align-self-end btn btn-lg btn-block btn-danger" style="margin-top: auto;" href="<?= base_url('/users/convocatoria/' . $item->id); ?>"><strong>Ver convocatoria</strong></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<script>
    $(function() {
            $("#convocatorias-list").tabs();
            $("#convocatorias-list").tabs("load", '#vigentes');
        });
    /*$(window).load(function() {
        $('.nav-tabs a[href="#vigentes"]').tab('show');
    });*/
    /*$('#convocatorias-list a').on('click', function(e) {
        e.preventDefault();
        $(this).tab('show');
    });*/
</script>-->