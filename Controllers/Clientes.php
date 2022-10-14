<?php

    class Clientes extends Controller
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

        public function gestionClientes()
        {
            $this->session();
            $this->views->getView($this, "gestionClientes");
        }

        public function formClientes()
        {
            $this->session();
            $data['departamentos'] = $this->model->getDepartamentos();
            $this->views->getView($this, "formClientes", $data);
        }

        // Metodos
        public function listarClientes(){
            $this->session();
            $data = $this->model->getClientes();
            for ($i=0; $i < count($data); $i++) {
                

                $data[$i]['acciones'] = '<div>
                                            <a class="btn btn-warning" href="'.base_url.'Clientes/editClientes/'.$data[$i]['cedula'].'" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-primary" href="'.base_url.'Clientes/infoClientes/'.$data[$i]['cedula'].'" title="Ver"><i class="fas fa-clipboard-list"></i></a>
                                        </div>';
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function infoClientes($cedula)
        {
            $this->session();
            $data = $this->model->getCliente($cedula);
            $this->views->getView($this, "infoClientes", $data);
        }

        public function registrarCliente(){
            $cedula = $_POST['cedula'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $municipio = $_POST['municipio'];
            $fechanac = $_POST['fechanac'];

            if (empty($cedula) || empty($nombres) || empty($apellidos) || empty($direccion) || empty($telefono) || empty($email) || empty($municipio)  || empty($fechanac) ) {
                $msg = "Faltan datos personales";
            } else {
                // validar cedula y usuario no existan
                if (!empty($this->model->buscarCedula($cedula))) {
                    $msg = "Cliente ya existe";
                } else {
                    // validar datos empleado
                    $data = $this->model->registrarCliente($cedula, $nombres, $apellidos, $direccion, $telefono, $email, $municipio, $fechanac);
                    // validar si usuario se registro con exito
                    if ($data == "ok") {
                        $msg = "ok";
                    } else {
                        $msg = "No se registro el cliente";
                    }
                }
            }

            echo $msg;
            die();
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
    }
?>