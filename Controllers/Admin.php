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

        public function mostrarEmpleado($cedula)
        {
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
            $data['departamentos'] = $this->model->getDepartamentos();
            $data['especialidades'] = $this->model->getEspecialidades();
            $this->views->getView($this, "formularioEmpleado", $data);
        }

        public function getMunicipiosDepa(string $iddepto)
        {
            $data = $this->model->getMunicipiosDepa($iddepto);
            $html = "<option value='' selected> Seleccione... </option>";
            for ($i=0; $i < count($data); $i++) {
                $html.="<option value='".$data[$i]['idmunicipio']."'>".$data[$i]['municipio']."</option>";
            }
            echo $html;
            die();
        }

        public function registrarEmpleado()
        {
            // obtener fehca_registro
            date_default_timezone_set("America/Bogota");
            $fecha_registro = date('Y-m-d');

            $cedula = $_POST['cedula'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $departamento = $_POST['departamento'];
            $municipio = $_POST['municipio'];
            $fechanac = $_POST['fechanac'];
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            $especialidad = $_POST['especialidad'];
            $sueldo = $_POST['sueldo'];

            // validar formulario no tenga espacios vacios
            // validar datos personales
            if (empty($cedula) || empty($nombres) || empty($apellidos) || empty($direccion) || empty($telefono) || empty($email) || empty($departamento)  || empty($municipio)  || empty($fechanac)  || empty($apellidos) || empty($usuario)  || empty($clave)) {
                $msg = "Faltan datos personales";
            } else {
                // validar cedula y usuario no existan
                if (!empty($this->model->buscarCedula($cedula)) || !empty($this->model->buscarUsuario($usuario))) {
                    $msg = "Cedula o usuario ya existen";
                } else {
                    // validar datos empleado
                    if (empty($especialidad) || empty($sueldo) || $sueldo < 0) {
                        $msg = "Faltan datos empleado";
                    } else {
                        $data = $this->model->registrarEmpleado($cedula, $nombres, $apellidos, $direccion, $telefono, $email, $municipio, $fechanac, $usuario, $clave, $fecha_registro, $sueldo, $especialidad);
                        // validar si usuario se registro con exito
                        if ($data == "ok") {
                            $msg = "ok";
                        } else {
                            $msg = "No se registro el usuario";
                        }
                    }
                }
            }

            echo $msg;
            die();
        }

    }

?>