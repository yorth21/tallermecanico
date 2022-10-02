Skip to content
Search or jump to…
Pull requests
Issues
Marketplace
Explore
 
@yorth21 
yorth21
/
confaweb
Private
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Settings
confaweb/Controllers/Inicio.php /
@yorth21
yorth21 solicitudes respondidas
…
Latest commit 4c695b4 on 9 Aug
 History
 1 contributor
76 lines (65 sloc)  2.74 KB

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
                $data = 'Administracion';
                /*$data = '<a class="nav-link collapsed" href="'.base_url.'Buzon" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                                                <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                                Administracion
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="'.base_url.'Admin/buzon"><i class="fas fa-envelope m-2"></i> Buzon</a>
                                                    <a class="nav-link" href="'.base_url.'Admin/respondidas"><i class="fas fa-tasks m-2"></i> Respondidas</a>
                                                </nav>
                                            </div>';
                */
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
                $data = $nameUser['nombres'];
            } else {
                $data = '';
            }

            echo $data;
            die();
        }

    }

?>
