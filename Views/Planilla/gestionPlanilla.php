<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Planilla</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-sm-7 col-md-8 mb-3 mb-sm-0">
                    <h3 class="card-title">Planilla ingreso</h3>
                    <p class="card-text">Listado de planillas sin facturar</p>
                </div>
                <div class="col-12 col-sm-5 col-md-4 d-flex justify-content-start justify-content-sm-end">
                    <a class="btn btn-primary me-3" href="<?php echo base_url; ?>Planilla/formPlanilla"><i class="fas fa-plus"></i> Agregar Planilla</a>
                    <a class="btn btn-success" href="<?php echo base_url; ?>Planilla/facturadasPlanilla"><i class="fas fa-history"></i></i> Facturadas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table" id="tblPlanilla">
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