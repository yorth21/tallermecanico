//expresiones regulares
const expresiones = {
    codigo: /^[1-9]{1}[0-9]{4}$/,
    nombre:/^([a-zA-Z]{2})([a-zA-Z0-9\s]{1,47})$/,
    categoria:/^[1-9]{1}$/,
    precio_compra: /^[0-9]{5,8}$/,
    precio_venta: /^[0-9]{5,8}$/,
    stock: /^[0-9]{1,4}$/
}

//definicion del valor de aprobacion de los campos
const campos = {
    codigo : false,
    nombre: false,
    categoria: false,
    precio_compra: false,
    precio_venta: false,
    stock: false
}

// obtener los campos
const cod_producto = document.getElementById("codigo");
const nom_producto = document.getElementById("nombre");
const cat_producto = document.getElementById("categoria");
const precio_compra_producto = document.getElementById("precio_compra");
const precio_venta_producto = document.getElementById("precio_venta");
const stock_producto = document.getElementById("stock");

//añadir el listener
if(cod_producto!=null && nom_producto != null && cat_producto != null && precio_compra_producto != null && precio_venta_producto != null && stock_producto != null){
    cod_producto.addEventListener('keyup', function(){validarProducto("codigo")});
    nom_producto.addEventListener('keyup', function(){validarProducto("nombre")});
    cat_producto.addEventListener('change', function(){validarProducto("categoria")});
    precio_compra_producto.addEventListener('keyup', function(){validarProducto("precio_compra")});
    precio_venta_producto.addEventListener('keyup', function(){validarProducto("precio_venta")});
    stock_producto.addEventListener('keyup', function(){validarProducto("stock")});
}

let tblProductos;
document.addEventListener("DOMContentLoaded", function () {
    tblProductos = $('#tblProductos').DataTable({
        ajax: {
            url: base_url + 'Productos/listarProductos',
            dataSrc: ''
        },
        columns: [
            {
                'data': 'codigo'
            },
            {
                'data': 'nombre'
            },
            {
                'data': 'categoria'
            },
            {
                'data': 'fechaingreso'
            },
            {
                'data': 'preciocompra'
            },
            {
                'data': 'precioventa'
            },
            {
                'data': 'stock'
            },
            {
                'data': 'estado'
            },
            {
                'data': 'acciones'
            }
        ]
    });
});

function zfill(number, width) {
    var numberOutput = Math.abs(number); /* Valor absoluto del número */
    var length = number.toString().length; /* Largo del número */ 
    var zero = "0"; /* String de cero */  
    
    if (width <= length) {
        if (number < 0) {
             return ("-" + numberOutput.toString()); 
        } else {
             return numberOutput.toString(); 
        }
    } else {
        if (number < 0) {
            return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
        } else {
            return ((zero.repeat(width - length)) + numberOutput.toString()); 
        }
    }
}

//eliminar producto
function btnEliminarProducto(codigo) {
    Swal.fire({
        title: '¿Esta seguro de eliminar el producto?',
        text: "No prodras revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Productos/eliminarProducto/"+codigo;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    const res = this.responseText;
                    if (res == "ok") {
                        Swal.fire(
                            'Mensaje!',
                            'Producto eliminado con exito',
                            'success'
                        )
                        tblProductos.ajax.reload();
                    } else {
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }
        }
    })
}

// Registrar producto
function frmRegistrarProducto(e) {
    e.preventDefault();

    //validaciones
    if(cod_producto.value == "" || nom_producto.value == "" || cat_producto.value == "" || precio_compra_producto.value == "" || precio_venta_producto.value == "" || stock_producto.value == ""){
        Swal.fire({
            icon: 'error',
            title: "Error, Faltan datos",
            showConfirmButton: false,
            timer: 3000
        })
    }else{
        if(campos.codigo==true && campos.categoria==true && campos.nombre==true && campos.stock==true && campos.precio_compra==true && campos.precio_venta==true){
            const url = base_url + "Productos/registrarProducto";
            const frm = document.getElementById("frmProducto");
            const http = new XMLHttpRequest();
            http.open("POST", url, true);
            http.send(new FormData(frm));
            http.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    const res = this.responseText;
                    if (res == "ok") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Producto registrado con exito',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        frm.reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: res,
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }
                }
            }
        }else{ 
            Swal.fire({
                icon: 'error',
                title: "Error, en los datos",
                showConfirmButton: false,
                timer: 3000
            })
         }
    }
}


//editar productos
function frmEditarProducto(e) {
    e.preventDefault();
    //validaciones

    //si se quiere guardar justo despues de la carga
    validarProducto("nombre");
    validarProducto("precio_compra");
    validarProducto("precio_venta");
    validarProducto("stock");

    if(nom_producto.value == "" || precio_compra_producto.value == "" || precio_venta_producto.value == "" || stock_producto.value == ""){
        Swal.fire({
            icon: 'error',
            title: "Error, Faltan datos",
            showConfirmButton: false,
            timer: 3000
        })
    }else{
        if(campos.nombre==true && campos.stock==true && campos.precio_compra==true && campos.precio_venta==true){
            const url = base_url + "Productos/actualizarProducto";
            const frm = document.getElementById("frmEditarProducto");
            const http = new XMLHttpRequest();
            http.open("POST", url, true);
            http.send(new FormData(frm));
            http.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    const res = this.responseText;
                    if (res == "ok") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Producto actualizado con exito',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        frm.reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: res,
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }
                }
            }
        }else{ 
            Swal.fire({
                icon: 'error',
                title: "Error, en los datos",
                showConfirmButton: false,
                timer: 3000
            })
         }
    }
}

//Validar cada campo de producto
const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(campo).classList.remove('is-invalid');
        document.getElementById(campo).classList.remove('border-danger');
        document.getElementById(campo).classList.add('border-success');
        document.getElementById(campo).classList.add('is-valid');
        campos[campo] = true;
    } else {
        document.getElementById(campo).classList.remove('border-success');
        document.getElementById(campo).classList.remove('is-valid');
        document.getElementById(campo).classList.add('border-danger');
        document.getElementById(campo).classList.add('is-invalid');
        campos[campo] = false;
    }
}

//validacion los campos de producto
const validarProducto = (id_campo) => {
    var target = "";
    switch (id_campo) {
        case "codigo":
            target = document.getElementById("codigo");
            validarCampo(expresiones.codigo, target, 'codigo');
        break;
        case "nombre":
            target = document.getElementById("nombre");
            validarCampo(expresiones.nombre, target, 'nombre');
        break;
        case "categoria":
            target = document.getElementById("categoria");
            validarCampo(expresiones.categoria, target, 'categoria');
        break;
        case "precio_compra":
            target = document.getElementById("precio_compra");
            validarCampo(expresiones.precio_compra, target, 'precio_compra');
        break;
        case "precio_venta":
            target = document.getElementById("precio_venta");
            validarCampo(expresiones.precio_venta, target, 'precio_venta');
        break;
        case "stock":
            target = document.getElementById("stock");
            validarCampo(expresiones.stock, target, 'stock');
        break;
    }
}

