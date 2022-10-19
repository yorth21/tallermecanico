<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Admin/empleados">Empleados</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12">
                    <h3 class="card-title">Editar datos del empleado</h3>
                    <p class="card-text">Se puede editar los datos personales del empleado</p>
                </div>
            </div>
        </div>
    </div>

    <form method="post" id="frmEditarEmpleado">
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
                            <input type="text" class="form-control" name="cedula" id="cedula" value="<?php echo $data['empleado']['cedula'];?>" readonly>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="nombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $data['empleado']['nombres'];?>">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $data['empleado']['apellidos'];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $data['empleado']['direccion'];?>">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $data['empleado']['telefono'];?>">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?php echo $data['empleado']['email'];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="departamento" class="form-label">Departamento</label>
                            <select class="form-select" aria-label="Default select example" name="departamento" id="departamento">
                                <option value="<?php echo $data['empleado']['iddepto'];?>" selected><?php echo $data['empleado']['departamento'];?></option>
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
                                <option value="<?php echo $data['empleado']['idmunicipio'];?>" selected><?php echo $data['empleado']['municipio'];?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="fechanac" class="form-label">Fecha Nacimiento</label>
                            <input class="form-control" id="fechanac" name="fechanac" type="date" value="<?php echo $data['empleado']['fechanac'];?>" onblur="vlfecha();"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $data['empleado']['usuario'];?>" readonly>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="clave" class="form-label">Clave</label>
                            <input type="text" class="form-control" name="clave" id="clave" value="<?php echo $data['empleado']['clave'];?>">
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-evenly">
                    <div class="col-12 col-md-4 d-flex justify-content-evenly">
                        <a class="btn btn-danger" href="<?php echo base_url; ?>Admin/empleados">Cancelar</a>
                        <button class="btn btn-primary" type="button" onclick="frmEditarEmpleado(event);">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php include "Views/Templates/footer.php"; ?>