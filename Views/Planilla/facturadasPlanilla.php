<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Planilla/gestionPlanilla">Planillas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Facturadas</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12">
                    <h3 class="card-title">Planillas facturadas</h3>
                    <p class="card-text">Listado de todas las planillas facturadas</p>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table" id="tblPlanillasFacturadas">
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