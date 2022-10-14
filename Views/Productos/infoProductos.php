<?php include "Views/Templates/header.php"; ?>

<div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                <i class="fa-solid fa-screwdriver-wrench"></i> Producto
                </h4>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="idnumber">Codigo Del Producto</label>
                        <p><?php echo $data['codigo'];?></p>
                    </div>
                    <div class="form-group col-6">
                        <label for="idtype">Nombre Producto</label>
                        <p><?php echo $data['nombre'];?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                <i class="fa-sharp fa-solid fa-clipboard-list"></i>
                    Categoria
                </h4>

                <div class="form-group col-6">
                    <br>
                        <p><?php echo $data['categoria'];?></p>
                    </div>
                
                </div>
            </div>
        </div>

<div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
		
                <h4 class="form-title mb-3">
                   <i class="fa-solid fa-file-invoice-dollar"></i>
                    Precio
                </h4>
                <div class="row mb-3">
                    <div class="form-group col-6">
                            <label for="idtype">Precio de Compra</label>
                            <p> $<?php echo $data['preciocompra'];?></p>
                    </div>
                    <div class="form-group col-6">
                            <label for="idtype">Precio de Venta</label>
                            <p> $<?php echo $data['precioventa'];?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <div class="row">
                    <h4 class="form-title mb-3">
                        <i class="fa-brands fa-stack-overflow"></i>
                        Existencias
                    </h4>
                    <div class="form-group col-12">
                            <br>
                            <p><?php echo $data['stock'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    

<?php include "Views/Templates/footer.php"; ?>