<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Panel de Administracion</title>
        <script src="<?php echo base_url; ?>Assets/js/jquery-3.6.0.min.js"></script>
        <link href="<?php echo base_url; ?>Assets/css/dataTable.css" rel="stylesheet" />
        <link href="<?php echo base_url; ?>Assets/css/styles.css" rel="stylesheet" />
        <link href="<?php echo base_url; ?>Assets/css/navbar.css" rel="stylesheet" />
        <script src="<?php echo base_url; ?>Assets/js/all.js" crossorigin="anonymous"></script>

        <link href="<?php echo base_url; ?>Assets/css/richtext.min.css" rel="stylesheet" />
        <script src="<?php echo base_url; ?>Assets/js/jquery.richtext.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo base_url; ?>Inicio">CMVA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <div class="row ms-auto mx-4 d-flex align-items-center">
                <!-- <div class="col-3">
                    <div class="ms-auto mx-4" id="div-perfil">
                        <img id="user-perfil" src="<?php echo base_url; ?>Img/User/user-1.jpg" alt="">
                    </div>
                </div> -->
                <div class="col-9 d-flex align-items-center m-0">
                    <a class="nav-link dropdown-toggle text-white text-center mx-0" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url; ?>Usuario/perfil">Perfil</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo base_url; ?>Login/salir">Cerrar session</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="<?php echo base_url; ?>Inicio">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link collapsed" href="<?php echo base_url; ?>Buzon" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Buzon
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url; ?>Buzon/nueva"><i class="fas fa-plus m-2"></i> Nueva</a>
                                    <a class="nav-link" href="<?php echo base_url; ?>Buzon/seguimiento"><i class="fas fa-tasks m-2"></i> Seguimiento</a>
                                </nav>
                            </div>
                            <div id="admin">
                                <!-- menu administracion -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-2">


