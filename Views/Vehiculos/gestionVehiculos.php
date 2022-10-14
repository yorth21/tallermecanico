<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Vehiculos</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-sm-7 col-md-8 mb-3 mb-sm-0">
                    <h3 class="card-title">Vehiculos</h3>
                    <p class="card-text">Gestor de vehiculos</p>
                </div>
                <div class="col-12 col-sm-5 col-md-4 d-flex justify-content-start justify-content-sm-end">
                    <a class="btn btn-primary" href="<?php echo base_url; ?>Vehiculos/formVehiculos"><i class="fas fa-plus"></i> Registrar vehiculo</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table" id="tblVehiculos">
            <thead class="thead-dark">
                <tr>
                    <th>Placa</th>
                    <th>Propietario</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

<?php include "Views/Templates/footer.php"; ?>