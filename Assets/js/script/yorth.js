// Menu y perfil de usuario

$.get(base_url + 'Inicio/menuPermiso', function (res) {
    $("#admin").html(res);
});

$.get(base_url + 'Inicio/nameUser', function(res){
    $("#navbarDropdown").html(res);
});

// Fin menu

// dataTable

let tblEmpleados;
document.addEventListener("DOMContentLoaded", function () {
    tblEmpleados = $('#tblEmpleados').DataTable({
        "aaSorting": [],
        language: {
            url: base_url +'Assets/json/dataTableES.json'
        },
        ajax: {
            url: base_url + 'Admin/listarEmpleados',
            dataSrc: ''
        },
        columns: [
            {
                'data': 'cedula'
            },
            {
                'data': 'nombres'
            },
            {
                'data': 'apellidos'
            },
            {
                'data': 'especialidad'
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

// Fin dataTable


// Validar fecha
// Solo permite ingresar una fecha >= a los 18 años

var myDate = $('#fechanac');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear()-18;
if(dd < 10)
    dd = '0' + dd;

if(mm < 10)
    mm = '0' + mm;

today = yyyy + '-' + mm + '-' + dd;
myDate.attr("max", today);

function vlfecha(){
    var date = myDate.val();
    if(Date.parse(date)){
        if(date > today){
            document.getElementById('fechanac').classList.remove('is-valid');
            document.getElementById('fechanac').classList.add('is-invalid');
        } else {
            document.getElementById('fechanac').classList.add('is-valid');
            document.getElementById('fechanac').classList.remove('is-invalid');
        }
    }
}

// Fin validar fecha


// Selects referenciados

$(document).ready(function(e){
    $("#departamento").change(function () {
        var iddepto = $("#departamento").val();
        $.ajax({
            // data: parametros,
            url: base_url + 'Admin/getMunicipiosDepa/'+iddepto,
            type: 'post',
            beforeSend: function () {
            },
            success: function (response) {
                $("#municipio").html(response);
            }
        });
    })
});

// Fin selects referenciados

// Registrar empleado

function frmRegistrarEmpleado(e) {
    e.preventDefault();
    const cedula = document.getElementById("cedula");

    const url = base_url + "Admin/registrarEmpleado";
    const frm = document.getElementById("frmEmpleado");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = this.responseText;
            if (res == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Empleado registrado con exito',
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
}

// estado empleado

function btnEliminarEmpleado(cedula) {
    Swal.fire({
        title: 'Esta seguro?',
        text: "El usuario "+cedula+" quedara inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Admin/estadoEmpleado/"+cedula;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    const res = this.responseText;
                    if (res == "ok") {
                        Swal.fire(
                            'Mensaje!',
                            'Usuario eliminado con exito',
                            'success'
                        )
                        tblEmpleados.ajax.reload();
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

// Fin estado empleado


// Editar datos personales del empleado

function frmEditarEmpleado(e) {
    e.preventDefault();

    const url = base_url + "Admin/editarEmpleado";
    const frm = document.getElementById("frmEditarEmpleado");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = this.responseText;
            if (res == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Cambios guardados con exito!',
                    showConfirmButton: false,
                    timer: 2000
                })
                setTimeout(() => {
                    location.href = base_url + "Admin/empleados"
                }, 2000);
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
}

// editar empleado

// ==================================================================== //
// Codigo para la seccion Facturar

// tabla para mostrar las planillas disponibles a facturar
let tblFacturarPlanilla;
document.addEventListener("DOMContentLoaded", function () {
    tblFacturarPlanilla = $('#tblFacturarPlanilla').DataTable({
        "aaSorting": [],
        ajax: {
            url: base_url + 'Facturacion/listarPlanilla/1',
            dataSrc: ''
        },
        columns: [
            {
                'data': 'nombres'
            },
            {
                'data': 'placavehiculo'
            },
            {
                'data': 'fechaingreso'
            },
            {
                'data': 'fechaentrega'
            },
            {
                'data': 'tipotrabajo'
            },
            {
                'data': 'nomempleado'
            },
            {
                'data': 'acciones'
            }
        ]
    });
});

// buscador para agregar clientes

function buscarProducto(e) {
    e.preventDefault();
    // mostrar el modal
    $("#buscarProducto").modal("show");
}

// buscar cada que escriba en el input
const inputBuscarProducto = document.getElementById('codNomProducto');
$(inputBuscarProducto).on('keyup', function () {
    let codNomProducto = inputBuscarProducto.value;
    if (codNomProducto != '') {
        const url = base_url + "Facturacion/buscadorProductos/"+codNomProducto;
        const http = new XMLHttpRequest();
        http.open("GET", url, true);
        http.send();
        http.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                const res = this.responseText;
                if (res != "") {
                    document.getElementById("datosBuscadorProductos").innerHTML = res;

                    // impedir digitar numeros con el teclado
                    $("input.keydown").keydown(function() {
                        return false
                    });
                } else {
                    document.getElementById("datosBuscadorProductos").innerHTML = '';
                }
            }
        }
    } else {
        document.getElementById("datosBuscadorProductos").innerHTML = '';
    }
});

// Seleccionar producto agregar
function btnAgregarProducto(codigoProd) {
    // traer la cantidad del producto agregar
    const idinput = 'producto-' + codigoProd;
    const cantidadProd = document.getElementById(idinput).value;
    // obtner el tbody
    const tbody = document.getElementById("itemsAgregados");
    // crear el item a agregar
    const url = base_url + "Facturacion/agregarProducto/"+codigoProd;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            if (res != "") {
                // crear el tr para la tabla
                var tr = document.createElement('tr');
                const classTr = 'codigo-' + codigoProd;
                tr.id = classTr;
                const precioProd = res.precioventa * cantidadProd;
                let html = '';
                html += `
                        <td><input type="text" class="form-control" name="codigo[]" value="${res.codigo}" readonly></td>
                        <td><input type="text" class="form-control" value="${res.nombre}" readonly></td>
                        <td><input type="text" class="form-control" value="${res.categoria}" readonly></td>
                        <td><input type="text" class="form-control" name="cantidad[]" value="${cantidadProd}" readonly></td>
                        <td><input type="text" class="form-control inputPrecioProd" name="precio[]" value="${precioProd}" readonly></td>
                        <td><button class="btn btn-danger" type="button" onclick="btnBorrarItem('${classTr}');" title="Eliminar"><i class="fas fa-trash"></i></button></td>
                        `;
                tr.innerHTML = html;

                // tbody.appendChild(res);
                tbody.appendChild(tr);
            }
        }
    }
}

// borrar items agregados
function btnBorrarItem(classTr) {
    $('#'+classTr).remove();
}

// calcular total a pagar
function calcularTotalPagar(e) {
    e.preventDefault();

    var arrayPrecios = new Array();
    var inputsPrecios = document.getElementsByClassName('inputPrecioProd'),
    namesValues = [].map.call(inputsPrecios, function (dataInput) {
        arrayPrecios.push(dataInput.value);
    });
    var totalProductos = 0;
    arrayPrecios.forEach(function (inputsValuesData) {
        totalProductos += +inputsValuesData;
    });
    var manoobra = document.getElementById('manoobra').value;
    if (manoobra) {
        var totalPagar = +manoobra + totalProductos;
        document.getElementById('totalapagar').value = totalPagar;
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Digitar el valor de mano de obra',
            showConfirmButton: false,
            timer: 2000
        })
    }
}

// Registrar factura
function frmRegistrarFactura(e) {
    e.preventDefault();
    const url = base_url + "Facturacion/registrarFactura";
    const frm = document.getElementById("frmFacturar");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = this.responseText;
            if (res == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Factura registrada con exito!',
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
}

// calcular descuento

function calcularDescuento(e) {
    e.preventDefault();

    Swal.fire({
        icon: 'info',
        title: 'Boton en desarrollo',
        showConfirmButton: false,
        timer: 3000
    })
}