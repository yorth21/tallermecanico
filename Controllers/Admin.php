<?php

    class Admin extends Controller
    {

        public function __construct()
        {
            session_start();
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
            $this->views->getView($this, "index");
        }

        public function empleados()
        {
            $this->session();
            $this->views->getView($this, "empleados");
        }
        
        public function mostrarEmpleado($cedula){
            $this->session();
            
            $data = $this->model->getEmpleado($cedula);
            $this->views->getView($this, "mostrarEmpleado", $data);
        }



        public function listarEmpleados()
        {
            $this->session();
            $data = $this->model->getEmpleados();
            for ($i=0; $i < count($data); $i++) {
                if ($data[$i]['estado'] == 1) {
                    $color = 'success';
                    $msj = 'Activo';
                    // btn
                    $icon = 'times';
                    $btnColor = 'danger';
                    $btnMsj = 'Inactivar';
                } else {
                    $color = 'danger';
                    $msj = 'Inactivo';
                    // btn
                    $icon = 'check';
                    $btnColor = 'success';
                    $btnMsj = 'Activar';

                }

                $data[$i]['estado'] = '<span class="badge bg-'.$color.'">'.$msj.'</span>';

                $data[$i]['acciones'] = '<div>
                                            <a class="btn btn-warning" href="'.base_url.'Admin/editarEmpleado/'.$data[$i]['cedula'].'" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-primary" href="'.base_url.'Admin/mostrarEmpleado/'.$data[$i]['cedula'].'" title="Ver"><i class="fas fa-clipboard-list"></i></a>
                                            <a class="btn btn-'.$btnColor.'" href="'.base_url.'Buzon/verSolicitud/'.$data[$i]['cedula'].'" title="'.$btnMsj.'"><i class="fas fa-'.$icon.'"></i></a>
                                        </div>';
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function formularioEmpleado()
        {
            $this->session();
            $this->views->getView($this, "formularioEmpleado");
        }

    }

?>