<?php

    class Inicio extends Controller
    {

        public function __construct()
        {
            session_start();

            // cargar construct de la isntancia
            parent::__construct();
        }

        public function session()
        {
            if (empty($_SESSION['activo'])) {
                header("location: ".base_url);
            }
        }

        public function index()
        {
            $this->session();
            // enviar a la vista para logearse
            $this->views->getView($this, "index");
        }

        public function menuPermiso()
        {
            $this->session();
            $cedula = $_SESSION['cedula'];
            $permiso = $this->model->verPermiso($cedula);
            if (!empty($permiso) && $permiso['rol'] == 'administrador') {
                $data = '<a class="nav-link collapsed" href="'.base_url.'Buzon" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                                                <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                                Administracion
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="'.base_url.'Admin/empleados"><i class="fas fa-users m-2"></i> Empleados</a>
                                                </nav>
                                            </div>';
            } else {
                $data = '';
            }
            echo $data;
            die();
        }

        public function nameUser()
        {
            $this->session();
            $cedula = $_SESSION['cedula'];
            $nameUser = $this->model->nameUser($cedula);
            if (!empty($nameUser)) {
                $data = $nameUser['nombres'].' ';
            } else {
                $data = '';
            }

            echo $data;
            die();
        }

    }

?>
