// Tabla gestion de vehiculos

let tblVehiculos;
document.addEventListener("DOMContentLoaded", function () {
    tblVehiculos = $('#tblVehiculos').DataTable({
        "aaSorting": [],
        language: {
            url: base_url +'Assets/json/dataTableES.json'
        },
        ajax: {
            url: base_url + 'Vehiculos/listarVehiculos',
            dataSrc: ''
        },
        columns: [
            {
                'data': 'placa'
            },
            {
                'data': 'propietario'
            },
            {
                'data': 'modelo'
            },
            {
                'data': 'marca'
            },
            {
                'data': 'tipovehiculo'
            },
            {
                'data': 'acciones'
            }
        ]
    });
});


// Buscar vehiculo
function buscarCliente(e) {
    e.preventDefault();

    // reiniciar el input y la tabla
    $("#buscarCliente").modal("show");
}

// buscar cada que escriba en el input
const inputBuscar = document.getElementById('cedulaPropietario');
$(inputBuscar).on('keyup', function () {
    let cedulaCliente = inputBuscar.value;
    if (cedulaCliente.length >= 5) {
        const url = base_url + "Vehiculos/buscadorClientes/"+cedulaCliente;
        const http = new XMLHttpRequest();
        http.open("GET", url, true);
        http.send();
        http.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                const res = this.responseText;
                if (res != "") {
                    document.getElementById("datosBuscadorClientes").innerHTML = res;
                }
            }
        }
    }
});

// Elegir cliente para el vehiculo
function elegirCliente(cedulaCliente) {
    document.getElementById('cedula').value = cedulaCliente;
    $("#buscarCliente").modal("hide");
}

// Registrar vehiculo
function frmRegistrarVehiculo(e) {
    e.preventDefault();

    const url = base_url + "Vehiculos/registrarVehiculo";
    const frm = document.getElementById("frmVehiculo");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = this.responseText;
            if (res == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Vehiculo registrado con exito',
                    showConfirmButton: false,
                    timer: 3000
                })
                frm.reset();
                // resetar el buscador del cliente
                inputBuscar.value = '';
                document.getElementById("datosBuscadorClientes").innerHTML = '';
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
