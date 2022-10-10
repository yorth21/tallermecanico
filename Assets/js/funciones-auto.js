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

/* function vlfecha(){
    var date = myDate.val();
    if(Date.parse(date)){
        if(date > today){
            document.getElementById('fechanac').classList.remove('valid');
            document.getElementById('fechanac').classList.add('is-invalid');
            // document.getElementById('alertfechanac').classList.remove('d-none');
            // campos['fechanac'] = false;
        } else {
            document.getElementById('fechanac').classList.add('valid');
            document.getElementById('fechanac').classList.remove('is-invalid');
            // document.getElementById('alertfechanac').classList.add('d-none');
            // campos['fechanac'] = true;
        }
    }
} */

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