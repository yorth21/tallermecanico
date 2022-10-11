<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Admin/empleados">Empleados</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulario</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12">
                    <h3 class="card-title">Formulario empleados</h3>
                    <p class="card-text">Formulario para registrar empleados nuevos</p>
                </div>
            </div>
        </div>
    </div>

    <form method="post" id="frmEmpleado">
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
                            <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="nombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="departamento" class="form-label">Departamento</label>
                            <select class="form-select" aria-label="Default select example" name="departamento" id="departamento">
                                <option value="" selected>Seleccione...</option>
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
                                <option value="" selected>Seleccione...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="fechanac" class="form-label">Fecha Nacimiento</label>
                            <input class="form-control border" id="fechanac" name="fechanac" type="date" onblur="// vlfecha()" placeholder="Fecha nacimiento" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="clave" class="form-label">Clave</label>
                            <input type="text" class="form-control" name="clave" id="clave" placeholder="Clave">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h5 class="my-3">Datos del empleado</h5>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="especialidad" class="form-label">Especialidad</label>
                            <select class="form-select" aria-label="Default select example" name="especialidad" id="especialidad">
                                <option value="" selected>Seleccione...</option>
                                <option value="8">Prueba</option>
                                <?php foreach ($data['especialidades'] as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['especialidad']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="sueldo" class="form-label">Sueldo</label>
                            <input type="text" class="form-control" name="sueldo" id="sueldo" placeholder="Sueldo">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-3 d-flex justify-content-center">
                        <button class="btn btn-primary" type="button" onclick="frmRegistrarEmpleado(event);">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php include "Views/Templates/footer.php"; ?>