//expresiones regulares
const expresiones2 = {
    placa: /^([A-Z0-9]{3})(\-)([A-Z0-9]{3})$/,
    color: /^([a-zA-Z]{3,20})$/,
    modelo: /^(([19]{2})([0-9]{2})|([2]{1}[0]{1})((([2]{1})([0-5]{1}))|(([0-1]{1})([0-9]{1}))))$/,
    marca: /^[a-zA-Z0-9\s\-]{3,45}$/,
    tipovehiculo: /^[1-9]{1,2}$/,
    observaciones: /^[a-zA-Z0-9\s]{0,1000}$/
}

//definicion del valor de aprobacion de los campos
const campos2 = {
    placa: false,
    color: false,
    modelo: false,
    marca: false,
    tipovehiculo: false,
    observaciones: false
}

// obtener los campos
const placa_v = document.getElementById("placa");
const color_v = document.getElementById("color");
const modelo_v = document.getElementById("modelo");
const marca_v = document.getElementById("marca");
const tipovehiculo_v = document.getElementById("tipovehiculo");
const observaciones_v = document.getElementById("observaciones");

//añadir el listener
if(placa_v!=null && color_v != null && modelo_v != null && marca_v != null && tipovehiculo_v != null){
    placa_v.addEventListener('keyup', function(){validarVehiculo("placa")});
    color_v.addEventListener('keyup', function(){validarVehiculo("color")});
    modelo_v.addEventListener('keyup', function(){validarVehiculo("modelo")});
    marca_v.addEventListener('keyup', function(){validarVehiculo("marca")});
    tipovehiculo_v.addEventListener('change', function(){validarVehiculo("tipovehiculo")});
    observaciones_v.addEventListener('keyup', function(){validarVehiculo("observaciones")});
}

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
});

// Elegir cliente para el vehiculo
function elegirCliente(cedulaCliente) {
    document.getElementById('cedula').value = cedulaCliente;
    $("#buscarCliente").modal("hide");
}

// Registrar vehiculo
function frmRegistrarVehiculo(e) {
    e.preventDefault();
    
    validarVehiculo("observaciones");
    console.log(campos2);

    //validaciones
    if(placa_v.value == "" || color_v.value == "" || modelo_v.value == "" || marca_v.value == "" || tipovehiculo_v.value == ""){
        Swal.fire({
            icon: 'error',
            title: "Error, Faltan datos",
            showConfirmButton: false,
            timer: 3000
        })
    }else{
        if(campos2.placa==true && campos2.color==true && campos2.modelo==true && campos2.marca==true && campos2.tipovehiculo==true && campos2.observaciones==true){
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
const validarCampo2 = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(campo).classList.remove('is-invalid');
        document.getElementById(campo).classList.remove('border-danger');
        document.getElementById(campo).classList.add('border-success');
        document.getElementById(campo).classList.add('is-valid');
        campos2[campo] = true;
    } else {
        document.getElementById(campo).classList.remove('border-success');
        document.getElementById(campo).classList.remove('is-valid');
        document.getElementById(campo).classList.add('border-danger');
        document.getElementById(campo).classList.add('is-invalid');
        campos2[campo] = false;
    }
}

//validacion los campos de producto
const validarVehiculo = (id_campo) => {
    var target = "";
    switch (id_campo) {
        case "placa":
            target = document.getElementById("placa");
            validarCampo2(expresiones2.placa, target, 'placa');
        break;
        case "color":
            target = document.getElementById("color");
            validarCampo2(expresiones2.color, target, 'color');
        break;
        case "modelo":
            target = document.getElementById("modelo");
            validarCampo2(expresiones2.modelo, target, 'modelo');
        break;
        case "marca":
            target = document.getElementById("marca");
            validarCampo2(expresiones2.marca, target, 'marca');
        break;
        case "tipovehiculo":
            target = document.getElementById("tipovehiculo");
            validarCampo2(expresiones2.tipovehiculo, target, 'tipovehiculo');
        break;
        case "observaciones":
            target = document.getElementById("observaciones");
            validarCampo2(expresiones2.observaciones, target, 'observaciones');
        break;
    }
}
