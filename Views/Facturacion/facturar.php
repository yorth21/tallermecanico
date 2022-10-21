<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Facturacion</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-sm-7 col-md-8 mb-3 mb-sm-0">
                    <h3 class="card-title">Planillas sin facturar</h3>
                    <p class="card-text">Aqui puedes buscar y seleccionar la planilla a facturar</p>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table" id="tblFacturarPlanilla">
            <thead class="thead-dark">
                <tr>
                    <th>Cliente</th>
                    <th>Placa</th>
                    <th>Fecha ingreso</th>
                    <th>Fecha entrega</th>
                    <th>Tipo trabajo</th>
                    <th>Empleado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

<?php include "Views/Templates/footer.php"; ?>