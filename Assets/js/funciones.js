$.get(base_url + 'Inicio/menuPermiso', function (res) {
    $("#admin").html(res);
});

$.get(base_url + 'Inicio/nameUser', function(res){
    $("#navbarDropdown").html(res);
});