<?php include "Views/Templates/header.php"; ?>

<div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="far fa-user mr-2"></i>Información de cliente
                </h4>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="idnumber">N° Identificación</label>
                        <p><?php echo $data['cedula'];?></p>
                    </div>
                   

                    <div class="form-group col-6">
                        <label for="name">Nombres</label>
                        <p><?php echo $data['nombres'];?></p>
                    </div>
                    <div class="form-group col-6">
                        <label for="last">Apellidos</label>
                        <p><?php echo $data['apellidos'];?></p>
                    </div>

                    
                    <div class="form-group col-6">
                        <label for="birth">Fecha de nacimiento</label>
                        <p><?php echo $data['fechanac'];?></p>
                    </div>
                    
                </div>
            </div>
        </div>

    <!-- 
    $sql = "SELECT
                    c.cedula,
                    c.nombres,
                    c.apellidos,
                    c.direccion,
                    c.telefono,
                    c.email,
                    c.fechanac,
                    m.municipio
                    FROM clientes c
                    JOIN municipios m ON
                    c.idmunicipio = m.idmunicipio
                    WHERE cedula = '$cedula'
                    ";


    -->

        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Ubicación
                </h4>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="department" class="form-label">Departamento</label>
                        <p><?php echo $data['departamento'];?></p>
                    </div>
                    <div class="form-group col-6">
                        <label for="municipality" class="form-label">Municipios</label>
                        <p><?php echo $data['municipio'];?></p>
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

    <?php include "Views/Templates/footer.php"; ?>