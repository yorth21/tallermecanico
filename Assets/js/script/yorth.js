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