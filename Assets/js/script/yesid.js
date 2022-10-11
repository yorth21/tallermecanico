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