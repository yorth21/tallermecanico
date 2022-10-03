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

    <form id="frmEmpleado">
        <!-- container datos personales -->
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombres">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos">
            </div>
        </div>
    </form>

<?php include "Views/Templates/footer.php"; ?>