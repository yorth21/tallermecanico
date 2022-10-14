<?php

    class Vehiculos extends Controller
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

        public function gestionVehiculos()
        {
            $this->session();
            $this->views->getView($this, "gestionVehiculos");
        }

        public function formVehiculos()
        {
            $this->session();
            $data['tiposvehiculos'] = $this->model->getTiposVehiculos();
            $this->views->getView($this, "formVehiculos", $data);
        }

        // Metodos
        public function listarVehiculos()
        {
            $this->session();
            $data = $this->model->getVehiculos();

            for ($i=0; $i < count($data); $i++) {
                $data[$i]['acciones'] = '<div>
                                            <a class="btn btn-warning" href="'.base_url.'Vehiculos/editarVehiculo/'.$data[$i]['placa'].'" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-primary" href="'.base_url.'Vehiculos/mostrarVehiculo/'.$data[$i]['placa'].'" title="Ver"><i class="fas fa-clipboard-list"></i></a>
                                        </div>';
            }

            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function registrarVehiculo()
        {
            $this->session();

            // Datos
            $propietario = $_POST['cedula'];
            $placa = $_POST['placa'];
            $modelo = $_POST['modelo'];
            $marca = $_POST['marca'];
            $color = $_POST['color'];
            $tipovehiculo = $_POST['tipovehiculo'];
            $observaciones = $_POST['observaciones'];

            // validar los compos obligatorios
            if (empty($propietario) || empty($placa) || empty($modelo) || empty($marca) || empty($color) || empty($tipovehiculo)) {
                $msg = "Datos incompletos";
            } else {
                // validar si el vehiculo ya existe
                $data = $this->model->getVehiculo($placa);
                if (!empty($data)) {
                    $msg = "Vehiculo ya existe";
                } else {
                    // enviar datos al modelo para ingresar el vehiculo
                    $data = $this->model->registrarVehiculo($propietario, $placa, $modelo, $marca, $color, $tipovehiculo, $observaciones);
                    if ($data == "ok") {
                        $msg = "ok";
                    } else {
                        $msg = "No se registro el vehiculo";
                    }
                }
            }

            echo $msg;
            die();
        }

        public function buscadorClientes(string $cedula)
        {
            $this->session();
            $data = $this->model->buscarClientes($cedula);

            $datos = '';
            for ($i=0; $i < count($data); $i++) {
                $cedula = "'".$data[$i]['cedula']."'";

                $datos = $datos.'
                    <tr onclick="elegirCliente('.$cedula.')">
                        <td>'.$data[$i]['cedula'].'</td>
                        <td>'.$data[$i]['nombres'].'</td>
                        <td>'.$data[$i]['apellidos'].'</td>
                    </tr>
                ';
            }

            echo $datos;
            die();
        }

    }

?>