let tblClientes;
document.addEventListener("DOMContentLoaded", function () {
    tblClientes = $('#tblClientes').DataTable({
        ajax: {
            url: base_url + 'Clientes/listarClientes',
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
                'data': 'telefono'
            },
            {
                'data': 'email'
            },
            {
                'data': 'acciones'
            }
        ]
    });
});

function frmRegistrarCliente(e) {
    e.preventDefault();
    const url = base_url + "Clientes/registrarCliente";
    const frm = document.getElementById("frmCliente");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = this.responseText;
            console.log(res);
            if (res == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Cliente registrado con exito',
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

function frmActualizarCliente(e) {
    e.preventDefault();
    const url = base_url + "Clientes/actualizarCliente";
    const frm = document.getElementById("frmCliente");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = this.responseText;
            console.log(res);
            if (res == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Cliente actualizado con exito',
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

$(document).ready(function(e){
    $("#departamento").change(function () {
        var iddepto = $("#departamento").val();
        $.ajax({
            // data: parametros,
            url: base_url + 'Clientes/getMunicipiosDepa/'+iddepto,
            type: 'post',
            beforeSend: function () {
            },
            success: function (response) {
                $("#municipio").html(response);
            }
        });
    })
});

