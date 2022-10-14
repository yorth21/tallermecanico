<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Vehiculos/gestionVehiculos">Vehiculos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulario</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12">
                    <h3 class="card-title">Formulario vehiculos</h3>
                    <p class="card-text">Formulario para registrar vehiculos nuevos</p>
                </div>
            </div>
        </div>
    </div>

    <form method="post" id="frmVehiculo">
        <!-- container datos personales -->
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <h5 class="my-3">Datos del propietario</h5>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="cedula" class="form-label">Cedula propietario</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="cedula" id="cedula" aria-label="cedula" aria-describedby="button-search" placeholder="Cedula propietario" readonly>
                                <button class="btn btn-primary" type="button" id="button-search" onclick="buscarCliente(event);"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h5 class="mb-3">Datos del vehiculo</h5>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="placa" class="form-label">Placa</label>
                            <input type="text" class="form-control" name="placa" id="placa" placeholder="Placa">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" name="color" id="color" placeholder="Color">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="tipovehiculo" class="form-label">Tipo vehiculo</label>
                            <select class="form-select" aria-label="Default select example" name="tipovehiculo" id="tipovehiculo">
                                <option value="" selected>Seleccione...</option>
                                <?php foreach ($data['tiposvehiculos'] as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['tipovehiculo']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-sm-6">
                        <div class="mb-3">
                            <label for="observaciones">Observaciones</label>
                            <textarea class="form-control" name="observaciones" id="observaciones" style="height: 100px"  placeholder="Obervaciones"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-3 d-flex justify-content-center">
                        <button class="btn btn-primary" type="button" onclick="frmRegistrarVehiculo(event);">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div id="buscarCliente" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="title">Buscar cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="cedulaPropietario" class="form-label">Buscador</label>
                        <input type="text" class="form-control" name="cedulaPropietario" id="cedulaPropietario" placeholder="Cedula propietario">
                    </div>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                            </tr>
                        </thead>
                        <tbody id="datosBuscadorClientes">
                            <!-- Lista de 10 clientes -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include "Views/Templates/footer.php"; ?>