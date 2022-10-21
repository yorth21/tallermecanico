<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Planilla/gestionPlanilla">Planillas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulario</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12">
                    <h3 class="card-title">Formulario Planilla</h3>
                    <p class="card-text">Formulario para registrar Planilla de ingreso</p>
                </div>
            </div>
        </div>
    </div>

    <form method="post" id="frmPlanilla">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <h5 class="card-title">Planilla</h5>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="placa" class="form-label">Placa vehiculo</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="placa" id="placa" aria-label="placa" aria-describedby="button-search" placeholder="Placa" readonly>
                                <button class="btn btn-primary" type="button" id="button-search" onclick="buscarVehiculoPlanilla(event);"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="cliente" class="form-label">Cliente</label>
                            <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Cedula cliente" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="empleado" class="form-label">Empleados</label>
                            <select class="form-select" aria-label="Default select example" name="empleado" id="empleado">
                                <option value="" selected>Seleccione...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="tipotrabajo" class="form-label">Tipos trabajo</label>
                            <select class="form-select" aria-label="Default select example" name="tipotrabajo" id="tipotrabajo">
                                <option value="" selected>Seleccione...</option>
                                <?php foreach ($data['tipostrabajo'] as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['tipotrabajo']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-sm-6">
                        <div class="mb-3">
                            <label for="descripTrabajo">Descripcion del trabajo</label>
                            <textarea class="form-control" name="descripTrabajo" id="descripTrabajo" style="height: 100px"  placeholder="Descripcion del trabajo a realizar"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <div class="mb-3">
                            <label for="observaciones">Observaciones</label>
                            <textarea class="form-control" name="observaciones" id="observaciones" style="height: 100px"  placeholder="Obervaciones"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-evenly">
                    <div class="col-12 col-md-4 d-flex justify-content-evenly">
                        <a class="btn btn-danger" href="<?php echo base_url; ?>Planilla/gestionPlanilla">Cancelar</a>
                        <button class="btn btn-primary" type="button" onclick="frmRegistrarPlanilla(event);">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div id="buscarVehiculoPlanilla" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="title">Buscar vehiculo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="placaVehiculo" class="form-label">Buscador</label>
                        <input type="text" class="form-control" name="placaVehiculo" id="placaVehiculo" placeholder="Placa vehiculo">
                    </div>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Placa</th>
                                <th>Tipo vehiculo</th>
                                <th>Propietario</th>
                            </tr>
                        </thead>
                        <tbody id="datosBuscadorVehiculos">
                            <!-- Lista de 10 Vehiculos -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



<?php include "Views/Templates/footer.php"; ?>