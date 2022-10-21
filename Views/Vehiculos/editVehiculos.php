<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Vehiculos/gestionVehiculos">Vehiculos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12">
                    <h3 class="card-title">Editar vehiculo</h3>
                    <p class="card-text">Formulario para editar un vehiculo registrado</p>
                </div>
            </div>
        </div>
    </div>

    <form method="post" id="frmEditarVehiculo">
        <!-- container datos personales -->
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <h5 class="my-3">Datos del propietario</h5>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="cedula" class="form-label">Cedula</label>
                            <input type="text" class="form-control" name="cedula" id="cedula" value="<?php echo $data['propietario'];?>" readonly>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="nombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $data['nombres'];?>" readonly>
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
                            <input type="text" class="form-control" name="placa" id="placa" value="<?php echo $data['placa'];?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="modelo" value="<?php echo $data['modelo'];?>">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca" value="<?php echo $data['marca'];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" name="color" id="color" value="<?php echo $data['color'];?>">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="mb-3">
                            <label for="tipovehiculo" class="form-label">Tipo vehiculo</label>
                            <select class="form-select" aria-label="Default select example" name="tipovehiculo" id="tipovehiculo">
                                <option value="<?php echo $data['idtipovehiculo'];?>" selected><?php echo $data['tipovehiculo'];?></option>
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
                            <?php if(empty($data['observacion'])) { ?>
                                <textarea class="form-control" name="observaciones" id="observaciones" style="height: 100px" placeholder="Observaciones"></textarea>
                            <?php } else { ?>
                                <textarea class="form-control" name="observaciones" id="observaciones" style="height: 100px"><?php echo $data['observacion']; ?></textarea>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-evenly">
                    <div class="col-12 col-md-4 d-flex justify-content-evenly">
                        <a class="btn btn-danger" href="<?php echo base_url; ?>Vehiculos/gestionVehiculos">Cancelar</a>
                        <button class="btn btn-primary" type="button" onclick="frmEditarVehiculo(event);">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php include "Views/Templates/footer.php"; ?>