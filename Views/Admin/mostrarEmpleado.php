<?php include "Views/Templates/header.php"; ?>

<div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="far fa-user mr-2"></i>Información básica
                </h4>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="idnumber">N° Identificación</label>
                        <p><?php echo $data['cedula'];?></p>
                    </div>
                    <div class="form-group col-6">
                        <label for="idtype">Tipo de identificación</label>
                        <p></p>
                    </div>

                    <div class="form-group col-6">
                        <label for="name">Nombres</label>
                        <p><!-- --></p>
                    </div>
                    <div class="form-group col-6">
                        <label for="last">Apellidos</label>
                        <p><!-- --></p>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="form-group col-6">
                        <label for="birth">Fecha de nacimiento</label>
                        <p><!-- --></p>
                    </div>
                    <div class="form-group col-6">
                        <label for="stratrum">Estrato</label>
                        <p><!-- --></p>
                    </div>
                    <div class="form-group col-6">
                        <label for="sex">Sexo</label>
                        <p><!-- --></p>
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
                        <label for="department" class="form-label">Departamento</label>
                        <p><!-- --></p>
                    </div>
                    <div class="form-group col-6">
                        <label for="municipality" class="form-label">Municipios</label>
                        <p><!-- --></p>

                    </div>
                    <div class="form-group col-6">
                        <label for="neigh">Barrio</label>
                        <p><!-- --></p>

                    </div>
                    <div class="form-group col-6">
                        <label for="address">Dirección</label>
                        <p><!-- --></p>
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
                        <p>
                            <!-- -->
                        </p>

                    </div>
                    <div class="form-group col-6">
                        <label for="cel">Celular</label>
                        <p><!-- --></p>
                    </div>
                    <div class="form-group col-6">
                        <label for="tel">Teléfono</label>
                        <p><!-- --></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <div class="row">
                    <h4 class="form-title mb-3">
                        <i class="far fa-list-alt mr-2"></i>
                        Descripción
                    </h4>
                    <div class="form-group col-12">
                        <p><!-- --></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "Views/Templates/footer.php"; ?>