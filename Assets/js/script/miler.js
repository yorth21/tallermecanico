let tblPlanilla, tblPlanillasFacturadas;
document.addEventListener("DOMContentLoaded", function () {
    tblPlanilla = $('#tblPlanilla').DataTable({
        "aaSorting": [],
        ajax: {
            url: base_url + 'Planilla/listarPlanilla/1',
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
    tblPlanillasFacturadas = $('#tblPlanillasFacturadas').DataTable({
        "aaSorting": [],
        ajax: {
            url: base_url + 'Planilla/listarPlanilla/2',
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

// funciones para el buscador del vechiculo para registrarlo en la planilla
function buscarVehiculoPlanilla(e) {
    e.preventDefault();
    // mostrar el modal
    $("#buscarVehiculoPlanilla").modal("show");
}

// buscar cada que escriba en el input
const inputBuscarVehiculo = document.getElementById('placaVehiculo');
$(inputBuscarVehiculo).on('keyup', function () {
    let placaVehiculo = inputBuscarVehiculo.value;
    if (placaVehiculo != '') {
        const url = base_url + "Planilla/buscarVehiculoPlanilla/"+placaVehiculo;
        const http = new XMLHttpRequest();
        http.open("GET", url, true);
        http.send();
        http.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                const res = this.responseText;
                if (res != "") {
                    document.getElementById("datosBuscadorVehiculos").innerHTML = res;
                } else {
                    document.getElementById("datosBuscadorVehiculos").innerHTML = '';
                }
            }
        }
    } else {
        document.getElementById("datosBuscadorVehiculos").innerHTML = '';
    }
});

// enviarle el valor al input de placa
function elegirVehiculo(placaVehiculo ,propietarioVehiculo, tipoVehiculo) {
    document.getElementById('placa').value = placaVehiculo;
    document.getElementById('cliente').value = propietarioVehiculo;
    // llenar el select de los empleados para cada cargo
    console.log(tipoVehiculo);
    const url = base_url + 'Planilla/getTipoEmpleados/'+tipoVehiculo;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = this.responseText;
            document.getElementById("empleado").innerHTML = res;
        }
    }
    $("#buscarVehiculoPlanilla").modal("hide");
}

// registrar la planilla
function frmRegistrarPlanilla(e) {
    e.preventDefault();

    const url = base_url + "Planilla/registrarPlanilla";
    const frm = document.getElementById("frmPlanilla");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            const res = this.responseText;
            if (res == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Se registro la planilla con exito',
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