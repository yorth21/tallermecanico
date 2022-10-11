<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Clientes</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-sm-7 col-md-8 mb-3 mb-sm-0">
                    <h3 class="card-title">Clientes</h3>
                    <p class="card-text">Gestor de Clientes</p>
                </div>
                <div class="col-12 col-sm-5 col-md-4 d-flex justify-content-start justify-content-sm-end">
                    <a class="btn btn-primary" href="<?php echo base_url; ?>Clientes/formClientes"><i class="fas fa-plus"></i> Agregar cliente</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table" id="tblClientes">
            <thead class="thead-dark">
                <tr>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <!-- <div class="table-responsive">
        <table class="table" id="tblEmpleados">
            <thead class="thead-dark">
                <tr>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Especialidad</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div> -->

<?php include "Views/Templates/footer.php"; ?>