<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Vehiculos/gestionVehiculos">Vehiculos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Informacion</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12">
                    <h3 class="card-title">Informacion vehiculo</h3>
                    <p class="card-text">Toda la informacion acerca del vehiculo</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="co col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="form-title mb-3">
                            <i class="fas fa-car"></i> Información del vehiculo
                        </h4>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="idnumber">Placa</label>
                                <p><?php echo $data['placa'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Modelo</label>
                                <p><?php echo $data['modelo'];?></p>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="last">Marca</label>
                                <p><?php echo $data['marca'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Color</label>
                                <p><?php echo $data['color'];?></p>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="last">Tipo vehiculo</label>
                                <p><?php echo $data['tipovehiculo'];?></p>
                            </div>
                        </div>
                        <!-- Si el campo observacion no esta vacion -->
                        <?php if(!empty($data['observacion'])) { ?>
                            <div class="row">
                                <div class="form-group">
                                    <label for="name">Observacion</label>
                                    <p><?php echo $data['observacion'];?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col col-12 col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <h4 class="form-title mb-3">
                            <i class="far fa-user"></i> Información del propietario
                        </h4>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="idnumber">N° Identificación</label>
                                <p><?php echo $data['propietario'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Nombres</label>
                                <p><?php echo $data['nombres'];?></p>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="last">Apellidos</label>
                                <p><?php echo $data['apellidos'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "Views/Templates/footer.php"; ?>