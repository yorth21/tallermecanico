// Validar formulario empleados

// function registrarEmpleado(e) {
//     e.preventDefault();


// }

// // Fin validacion formulario

// const formulario = document.getElementById('frmEmpleado');
// const inputs = document.querySelectorAll('#frmEmpleado input');

// const expresiones = {
//     usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
//     nombre: /^[a-zA-ZÀ-ÿ\s]{1,30}$/, // Letras y espacios, pueden llevar acentos.
//     password: /^.{4,12}$/, // 4 a 12 digitos.
//     correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
//     telefono: /^\d{6,15}$/ // 7 a 14 numeros.
// }





// inputs.forEach((input) => {
//     input.addEventListener('keyup', validarFormulario);
//     input.addEventListener('blur', validarFormulario);
// });



// Registrar empleado

function frmRegistrarEmpleado(e) {
    e.preventDefault();

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

// Registrar empleado