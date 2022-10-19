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

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="card-form p-4">
                        <h4 class="form-title mb-3">
                            <i class="far fa-user"></i> Información del propietario
                        </h4>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="idnumber">N° Identificación</label>
                                <p><?php echo $data['propietario'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="name">Nombres</label>
                                <p><?php echo $data['nombres'];?></p>
                            </div>
                            <div class="form-group col-6">
                                <label for="last">Apellidos</label>
                                <p><?php echo $data['apellidos'];?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="card-form p-4">
                        <h4 class="form-title mb-3">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Ubicación
                        </h4>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="department">Departamento</label>
                                <p><?php echo $data['departamento'];?></p>
                            </div>
                            <div class="form-group col-6">
                                <label for="municipality">Municipios</label>
                                <p><?php echo $data['municipio'];?></p>
                            </div>
                            <div class="form-group col-6">
                                <label for="municipality">Direccion</label>
                                <p><?php echo $data['direccion'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="card-form p-4">
                        <h4 class="form-title mb-3">
                            <i class="far fa-address-book mr-2"></i>
                            Información de contacto
                        </h4>
                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="email">E-mail</label>
                                <p><?php echo $data['email'];?></p>
                            </div>
                            <div class="form-group col-6">
                                <label for="tel">Teléfono</label>
                                <p><?php echo $data['telefono'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="card-form p-4">
                        <h4 class="form-title mb-3">
                            <i class="fas fa-wrench"></i>
                            Información del empleado
                        </h4>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="idnumber">Especialidad</label>
                                <p><?php echo $data['especialidad'];?></p>
                            </div>

                            <div class="form-group col-6">
                                <label for="name">Sueldo</label>
                                <p><?php echo $data['sueldo'];?></p>
                            </div>
                            <div class="form-group col-6">
                                <label for="last">Fecha ingreso</label>
                                <p><?php echo $data['fechaingreso'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "Views/Templates/footer.php"; ?>