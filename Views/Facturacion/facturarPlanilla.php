<?php include "Views/Templates/header.php"; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Facturacion/vistaFacturar">Facturacion</a></li>
            <li class="breadcrumb-item active" aria-current="page">Facturar</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-sm-7 col-md-8 mb-3 mb-sm-0">
                    <h3 class="card-title">Facturar</h3>
                    <p class="card-text">Aqui generas la factura</p>
                </div>
            </div>
        </div>
    </div>

    <form method="post" id="frmFacturar">
        <!-- Inputs necesarios ocultos -->
        <input class="" type="hidden" id="planilla" name="planilla" value="<?php echo $data['id'];?>">
        <input class="" type="hidden" id="cajero" name="cajero" value="<?php echo $data['cedulacajero'];?>">
        <!-- -------- -->
        <div class="row">
            <div class="co col-12 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title">Datos de la factura</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="numfactura" class="form-label">Numero factura</label>
                                    <input type="text" class="form-control" name="numfactura" id="numfactura" value="<?php echo $data['id'];?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="nomcajero" class="form-label">Nombre cajero</label>
                                    <input type="text" class="form-control" name="nomcajero" id="nomcajero" value="<?php echo $data['nomcajero'];?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title">Datos de la planilla</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="placa" class="form-label">Placa vehiculo</label>
                                    <input type="text" class="form-control" name="placa" id="placa" value="<?php echo $data['placavehiculo'];?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="tipovehiculo" class="form-label">Tipo de vehiculo</label>
                                    <input type="text" class="form-control" name="tipovehiculo" id="tipovehiculo" value="<?php echo $data['tipovehiculo'];?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="nomcliente" class="form-label">Nombre del cliente</label>
                                    <input type="text" class="form-control" name="nomcliente" id="nomcliente" value="<?php echo $data['nomcliente'];?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="tipotrabajo" class="form-label">Tipo de trabajo</label>
                                    <input type="text" class="form-control" name="tipotrabajo" id="tipotrabajo" value="<?php echo $data['tipotrabajo'];?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title">Datos del trabjo</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="encargado" class="form-label">Empleado encargado</label>
                                    <input type="text" class="form-control" name="encargado" id="encargado" value="<?php echo $data['nomempleado'];?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="descripciontrabajo" class="form-label">Trabajo realizado</label>
                                    <p id="descripciontrabajo"><?php echo $data['descripciontrabajo'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Espaacio para agregar productos a la factura -->
            <!-- <input type="text" name="array['item1']['codigo']"> -->
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title">Agregar items</h5>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 d-flex justify-content-end">
                                <button class="btn btn-primary" type="button" onclick="buscarProducto(event);"><i class="fas fa-plus"></i> Agregar item</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Producto</th>
                                            <th>Categoria</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="itemsAgregados">
                                        <!-- Lista de productos -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title">Pago de la factura</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="manoobra" class="form-label">Valor mano de obra</label>
                                    <input type="text" class="form-control" name="manoobra" id="manoobra">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="descuento" class="form-label">Calcular descuento</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="descuento" id="descuento" aria-label="descuento" aria-describedby="button-search" placeholder="Descuento (%)" readonly>
                                        <button class="btn btn-primary" type="button" id="button-search" onclick="calcularDescuento(event);"><i class="fas fa-sync-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="totalapagar" class="form-label">Total a pagar</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="totalapagar" id="totalapagar" aria-label="totalapagar" aria-describedby="button-search" placeholder="Total a pagar" readonly>
                                        <button class="btn btn-primary" type="button" id="button-search" title="Calcular total a pagar" onclick="calcularTotalPagar(event);"><i class="fas fa-sync-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="formadepago" class="form-label">Forma de pago</label>
                                <select class="form-select" aria-label="Default select example" name="formadepago" id="formadepago">
                                    <option value="" selected>Seleccione...</option>
                                    <option value="1">Contado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-evenly mb-5">
            <div class="col-12 col-md-4 d-flex justify-content-evenly">
                <a class="btn btn-danger" href="<?php echo base_url; ?>Vehiculos/gestionVehiculos">Cancelar</a>
                <button class="btn btn-primary" type="button" onclick="frmRegistrarFactura(event);">Registrar factura</button>
            </div>
        </div>
    </form>

    <div id="buscarProducto" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="title">Buscar producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="codNomProducto" class="form-label">Buscador</label>
                        <input type="text" class="form-control" name="codNomProducto" id="codNomProducto" placeholder="Nombre o codigo del producto">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Categoria</th>
                                    <th>Stock</th>
                                    <th>Cantidad</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="datosBuscadorProductos">
                                <!-- Lista de 10 productos -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // agregar la forma de pago a credido
        const selectFormaPago = document.getElementById('formadepago');
        selectFormaPago.addEventListener("click", validarFormaPago);

        function validarFormaPago() {
            // verificar si cumple condiciones
            const tipotrabajo = document.getElementById('tipotrabajo').value;
            const totalapagar = document.getElementById('totalapagar').value;
            if (totalapagar != '') {
                if (totalapagar >= 1000000 && tipotrabajo == 'Reparación') {
                    const option = `<option value="" selected>Seleccione...</option>
                                    <option value="1">Contado</option>
                                    <option value="2">Credito</option>`;
                    selectFormaPago.innerHTML = option;
                }
            }
        }
    </script>

<?php include "Views/Templates/footer.php"; ?>