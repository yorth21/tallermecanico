let tblProductos;
document.addEventListener("DOMContentLoaded", function () {
    tblProductos = $('#tblProductos').DataTable({
        ajax: {
            url: base_url + 'Productos/listarProductos',
            dataSrc: ''
        },
        columns: [
            {
                'data': 'codigo'
            },
            {
                'data': 'nombre'
            },
            {
                'data': 'categoria'
            },
            {
                'data': 'fechaingreso'
            },
            {
                'data': 'preciocompra'
            },
            {
                'data': 'precioventa'
            },
            {
                'data': 'stock'
            },
            {
                'data': 'acciones'
            }
        ]
    });
});