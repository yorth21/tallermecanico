<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Productos/gestionProductos">Productos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulario Productos</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12">
                    <h3 class="card-title">Formulario Productos</h3>
                    <p class="card-text">Formulario para registrar productos nuevos</p>
                </div>
            </div>
        </div>
    </div>

    <form method="post" id="frmProducto">
        <!-- container datos del producto -->
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <h5 class="mb-3">Datos del Producto</h5>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Código</label>
                            <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                                <option value="" selected>Seleccione...</option>
                                <?php foreach ($data['cat_productos'] as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['categoria']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="precio_compra" class="form-label">Precio de Compra</label>
                            <input type="text" class="form-control" name="precio_compra" id="precio_compra" placeholder="Precio de Compra">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="precio_venta" class="form-label">Precio de Venta</label>
                            <input type="text" class="form-control" name="precio_venta" id="precio_venta" placeholder="Precio de Venta">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="mb-3">
                            <label for="stock" class="form-label">Número de Existencias</label>
                            <input type="text" class="form-control" name="stock" id="stock" placeholder="Número de Existencias">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row d-flex justify-content-center">
                    <div class="col-3 d-flex justify-content-center">
                        <button class="btn btn-primary" type="button" onclick="frmRegistrarProducto(event);">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    

<?php include "Views/Templates/footer.php"; ?>