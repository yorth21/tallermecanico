<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Planilla/gestionPlanilla">Planillas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Informacion</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12">
                    <h3 class="card-title">Informacion Planilla</h3>
                    <p class="card-text">Informacion completa acerca de la planilla</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="form-title mb-3">
                            <i class="fas fa-clipboard-list"></i> Datos planilla
                        </h4>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Numero de planilla</label>
                                <p><?php echo $data['id'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Placa del vehiculo</label>
                                <p><?php echo $data['placavehiculo'];?></p>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="last">Tipo vehiculo</label>
                                <p><?php echo $data['nombres'].' '.$data['apellidos'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Cedula del cliente</label>
                                <p><?php echo $data['cliente'];?></p>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="last">Nombres del cliente</label>
                                <p><?php echo $data['nombres'].' '.$data['apellidos'];?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Nombre del encargado</label>
                                <p><?php echo $data['nomempleado'].' '.$data['apellempleado'];?></p>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="last">Tipo de trabajo</label>
                                <p><?php echo $data['tipotrabajo'];?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Fecha ingreso</label>
                                <p><?php echo $data['fechaingreso'];?></p>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="last">Fecha entrega</label>
                                <p><?php echo $data['fechaentrega'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="form-title mb-3">
                            <i class="far fa-sticky-note"></i> Observaciones
                        </h4>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="name">Descripcion del trabajo</label>
                                <p><?php echo $data['descripciontrabajo'];?></p>
                            </div>
                        </div>
                        <?php if(!empty($data['observacion'])) { ?>
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name">Observaciones</label>
                                    <p><?php echo $data['observacion'];?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "Views/Templates/footer.php"; ?>