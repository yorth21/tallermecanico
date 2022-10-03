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