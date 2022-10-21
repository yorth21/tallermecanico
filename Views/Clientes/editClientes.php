<?php include "Views/Templates/header.php"; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Clientes/gestionClientes/">Gestion de clientes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Formulario</li>
    </ol>
</nav>

<form method="post" id="frmCliente">
    <!-- container datos personales -->
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <h5 class="mb-3">Datos personales</h5>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-4">
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cedula</label>
                        <input type="text" class="form-control" name="cedula" id="cedula" value="<?php echo $data['cedula']; ?>" placeholder="Cedula" readonly pattern="[0-9]*" required>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4">
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $data['nombres']; ?>" placeholder="Nombres" pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$" required>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4">
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $data['apellidos']; ?>" placeholder="Apellidos" pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$" required>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $data['direccion']; ?>" placeholder="Direccion" required>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $data['telefono']; ?>" placeholder="Telefono" pattern="[0-9]{7}$" required>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?php echo $data['email']; ?>" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-xl-3 col-sm-4">
                    <div class="mb-3">
                        <label for="departamento" class="form-label">Departamento</label>
                        <select class="form-select" aria-label="Default select example" name="departamento" id="departamento" required>
                            <option value="<?php echo $data['iddepto']; ?>" selected hidden><?php echo $data['departamento']; ?></option>
                            <?php foreach ($data['departamentos'] as $row) { ?>
                                <option value="<?php echo $row['iddepto']; ?>"><?php echo $row['departamento']; ?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4">
                    <div class="mb-3">
                        <label for="municipio" class="form-label">Municipio</label>
                        <select class="form-select" aria-label="Default select example" name="municipio" id="municipio">
                            <option value="<?php echo $data['idmunicipio']; ?>" selected hidden><?php echo $data['municipio']; ?></option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4">
                    <div class="mb-3">
                        <label for="fechanac" class="form-label">Fecha Nacimiento</label>
                        <input class="form-control border" id="fechanac" name="fechanac" type="date" value="<?php echo $data['fechanac']?>" onblur="// vlfecha()" placeholder="Fecha nacimiento" />
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-3 d-flex justify-content-center">
                        <button class="btn btn-primary" type="button" onclick="frmActualizarCliente(event);">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>





<?php include "Views/Templates/footer.php"; ?>