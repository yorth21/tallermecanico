<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Productos</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-sm-7 col-md-8 mb-3 mb-sm-0">
                    <h3 class="card-title">Productos</h3>
                    <p class="card-text">Gestor de Productos</p>
                </div>
                <div class="col-12 col-sm-5 col-md-4 d-flex justify-content-start justify-content-sm-end">
                    <a class="btn btn-primary" href="<?php echo base_url; ?>Productos/formProductos"><i class="fas fa-plus"></i> Agregar Producto</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table" id="tblProductos">
            <thead class="thead-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Fecha de Ingreso</th>
                    <th>Precio Compra</th>
                    <th>Precio Venta</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    

<?php include "Views/Templates/footer.php"; ?>