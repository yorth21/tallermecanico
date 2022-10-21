<?php

    class Planilla extends Controller
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

        // vistas

        public function gestionPlanilla()
        {
            $this->session();
            $this->views->getView($this, "gestionPlanilla");
        }

        public function formPlanilla()
        {
            $this->session();
            $data['tipostrabajo'] = $this->model->getTiposTrabajos();
            $this->views->getView($this, "formPlanilla", $data);
        }

        public function editarPlanilla($id)
        {
            $this->session();
            $data = $this->model->getPlanilla($id);
            $this->views->getView($this, "editPlanilla", $data);
        }

        public function verPlanilla($id)
        {
            $this->session();
            $data = $this->model->getPlanilla($id);
            if (empty($data['fechaentrega'])) {
                $data['fechaentrega'] = '<span class="badge bg-warning text-dark">No facturada</span>';
            }
            $this->views->getView($this, "infoPlanilla",$data);
        }

        public function facturadasPlanilla()
        {
            $this->session();
            $this->views->getView($this, "facturadasPlanilla");
        }

        // Metodos

        public function listarPlanilla($estado)
        {
            $this->session();
            $data = $this->model->getPlanillas($estado);
            for ($i=0; $i < count($data); $i++) {
                if ($estado == 1) {
                    $data[$i]['acciones'] = '<div>
                                            <a class="btn btn-warning me-1" href="'.base_url.'Planilla/editarPlanilla/'.$data[$i]['id'].'" title="Editar"><i class="fas fa-edit"></i></a>';
                    $data[$i]['fechaentrega'] = '<span class="badge bg-warning text-dark">No facturada</span>';
                } else {
                    $data[$i]['acciones'] = '<div>';
                }

                $data[$i]['acciones'] = $data[$i]['acciones'].'<a class="btn btn-primary" href="'.base_url.'Planilla/verPlanilla/'.$data[$i]['id'].'" title="Ver"><i    class="fas fa-clipboard-list"></i></a>
                                        </div>';

                $data[$i]['nombres'] = $data[$i]['nombres'].' '.$data[$i]['apellidos'];
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function buscarVehiculoPlanilla($placa)
        {
            $this->session();
            $data = $this->model->buscarVehiculo($placa);

            $datos = '';
            for ($i=0; $i < count($data); $i++) {
                $placa = "'".$data[$i]['placa']."'";
                $propietario = "'".$data[$i]['propietario']."'";
                $tipoVehiculo = "'".$data[$i]['tipovehiculo']."'";
                $nombres = $data[$i]['nombres'].' '.$data[$i]['apellidos'];

                $datos = $datos.'
                    <tr onclick="elegirVehiculo('.$placa.', '.$propietario.', '.$tipoVehiculo.')" style="cursor: pointer">
                        <td>'.$data[$i]['placa'].'</td>
                        <td>'.$data[$i]['tipovehiculo'].'</td>
                        <td>'.$nombres.'</td>
                    </tr>
                ';
            }

            echo $datos;
            die();
        }

        public function getTipoEmpleados($tipoVehiculo)
        {
            $this->session();
            $data = $this->model->getTipoEmpleados($tipoVehiculo);
            $html = "<option value='' selected> Seleccione... </option>";
            for ($i=0; $i < count($data); $i++) {
                $html.="<option value='".$data[$i]['cedula']."'>".$data[$i]['nombres'].' '.$data[$i]['apellidos']."</option>";
            }
            echo $html;
            die();
        }

        public function registrarPlanilla()
        {
            $this->session();
            // obtener fehca_registro
            date_default_timezone_set("America/Bogota");
            $fecha_ingreso = date('Y-m-d h:i:s');

            // obtener datos del formulario
            $cliente = $_POST['cliente'];
            $placa = $_POST['placa'];
            $descripTrabajo = $_POST['descripTrabajo'];
            $observaciones = $_POST['observaciones'];
            $empleado = $_POST['empleado'];
            $tipotrabajo = $_POST['tipotrabajo'];

            // Validar campos obligatorios no esten vacios
            if (empty($cliente) || empty($placa) || empty($descripTrabajo) || empty($empleado) || empty($tipotrabajo)) {
                $msg = "Faltan datos para hacer el registro";
            } else {
                $data = $this->model->registrarPlanilla($cliente, $fecha_ingreso, $placa, $descripTrabajo, $observaciones, $empleado, $tipotrabajo);
                // validar si se registro la planilla
                if ($data == "ok") {
                    $msg = "ok";
                } else {
                    $msg = "No se registro la planilla";
                }
            }

            echo $msg;
            die();
        }

    }

?>