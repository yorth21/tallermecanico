<?php

    class Facturacion extends Controller
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

        // Vistas

        public function vistaFacturar()
        {
            $this->session();
            $this->views->getView($this, "facturar");
        }

        public function vistaHistorialFacturas()
        {
            $this->session();
            $this->views->getView($this, "historialFacturas");
        }

        public function facturarPlanilla($id)
        {
            $this->session();
            // traer los datos necesarios para la factura
            $data = $this->model->getPlanilla($id);
            $data['nomcliente'] = $data['nomcliente'].' '.$data['apellcliente'];
            $data['nomempleado'] = $data['nomempleado'].' '.$data['apellempleado'];
            $data['cedulacajero'] = $_SESSION['cedula'];
            $data['nomcajero'] = $_SESSION['nombres'].' '.$_SESSION['apellidos'];
            // enviar a la vista con los datos
            $this->views->getView($this, "facturarPlanilla", $data);
        }

        // Metodos

        public function listarPlanilla($estado)
        {
            $this->session();
            $data = $this->model->getPlanillas($estado);
            for ($i=0; $i < count($data); $i++) {
                if ($estado == 1) {
                    $data[$i]['acciones'] = '<div>
                                            <a class="btn btn-success" href="'.base_url.'Facturacion/facturarPlanilla/'.$data[$i]['id'].'" title="Facturar"><i class="fas fa-clipboard-check"></i></a>
                                            </div>';
                    $data[$i]['fechaentrega'] = '<span class="badge bg-warning text-dark">No facturada</span>';
                }

                $data[$i]['nombres'] = $data[$i]['nombres'].' '.$data[$i]['apellidos'];
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function buscadorProductos(string $codNomProducto)
        {
            $this->session();
            $data = $this->model->buscadorProductos($codNomProducto);

            $datos = '';
            for ($i=0; $i < count($data); $i++) {
                $codigo = "'".$data[$i]['codigo']."'";

                $datos = $datos.'
                    <tr>
                        <td>'.$data[$i]['codigo'].'</td>
                        <td>'.$data[$i]['nombre'].'</td>
                        <td>'.$data[$i]['categoria'].'</td>
                        <td>'.$data[$i]['stock'].'</td>
                        <td><input class="form-control keydown" type="number" name="" id="producto-'.$data[$i]['codigo'].'" min="1" max="'.$data[$i]['stock'].'"></td>
                        <td><button class="btn btn-success" type="button" onclick="btnAgregarProducto('.$codigo.');" title="Seleccionar"><i class="fas fa-check"></i></button></td>
                    </tr>
                ';
            }

            echo $datos;
            die();
        }

        public function agregarProducto($codigo)
        {
            $this->session();
            $data = $this->model->buscarProducto($codigo);
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        public function registrarFactura()
        {
            $this->session();
            // facha de registro
            date_default_timezone_set("America/Bogota");
            $fecha = date('Y-m-d h:i:s');

            // datos de la tabla facturas
            $numfactura = $_POST['numfactura'];
            $cajero = $_SESSION['cedula'];
            $planilla = $_POST['planilla'];
            $totalapagar = $_POST['totalapagar'];
            $descuentos = 0;
            $observacion = '';
            $formadepago = $_POST['formadepago'];

            // Arrays para la tabla productos
            $codigoProd = $_POST['codigo'];
            $cantidadProd = $_POST['cantidad'];

            // Validar campos importantes no esten vacios
            if (empty($numfactura) || empty($cajero) || empty($planilla)   || empty($totalapagar) || empty($formadepago)) {
                $msg = "Completa todos los campos";
            } else {
                // enviar datos al modelo para registrar en la base de datos
                $data = $this->model->registrarFactura($numfactura, $fecha, $cajero, $planilla, $totalapagar, $descuentos, $observacion, $formadepago, $codigoProd, $cantidadProd);
                // validar si se registro la factura con exito
                if ($data == "ok") {
                    $msg = "ok";
                } else {
                    $msg = "No se registro el usuario";
                }
            }

            echo $msg;
            die();
        }

    }

?>