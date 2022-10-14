<?php

    class Productos extends Controller
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

        public function formProductos()
        {
            $this->session();
            $data ['cat_productos'] = $this->model->getCategorias();
            $this->views->getView($this, "formProductos", $data);
        }

        public function registrarProducto()
        {
            // obtener fehca_registro
            date_default_timezone_set("America/Bogota");
            $fecha_registro = date('Y-m-d');

            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $precio_compra = $_POST['precio_compra'];
            $precio_venta = $_POST['precio_venta'];
            $stock = $_POST['stock'];

            // validar formulario no tenga espacios vacios
            // validar datos del producto
            if (empty($codigo) || empty($nombre) || empty($categoria) || empty($precio_compra) || empty($precio_venta) || $stock=="") {
                $msg = "Faltan datos del producto";
            } else {
                // validar el codigo ya está registrado
                if (!empty($this->model->buscarCodigo($codigo))) {
                    $msg = "Código del producto ya existe";
                } else {
                    
                    $data = $this->model->registrarProducto($codigo, $nombre, $categoria, $fecha_registro, $precio_compra, $precio_venta, $stock);
                        // validar si el producto se registro con exito
                    if ($data == "ok") {
                        $msg = "ok";
                    } else {
                        $msg = "No se registro el producto";
                    }
                }
            }

            echo $msg;
            die();
        }

        public function gestionProductos()
        {
            $this->session();
            $this->views->getView($this, "gestionProductos");
        }

        // Metodos

        //Listar Productos
        public function listarProductos()
        {
            $this->session();
            $data = $this->model->getProductos();
            $icon = 'times';
            for ($i=0; $i < count($data); $i++) {


                if ($data[$i]['estado'] == 1) {
                    $color = 'success';
                    $msj = 'Activo';
                    // btn
                    $icon = 'trash-alt';
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
                                            <a class="btn btn-warning" href="'.base_url.'Productos/editarProducto/'.$data[$i]['codigo'].'" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-primary" href="'.base_url.'Productos/mostrarProducto/'.$data[$i]['codigo'].'" title="Ver"><i class="fas fa-clipboard-list"></i></a>
                                            <button class="btn btn-'.$btnColor.'" type="button" onclick="btnEliminarProducto('.$data[$i]['codigo'].');"><i class="fas fa-'.$icon.'"></i></button>

                                        </div>';
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        //Eliminar producto
        public function eliminarProducto(String $codigo){
            $this->session();
            $data = $this->model->mostrarProducto($codigo);
            $estado = $data['estado'];
            if($estado==1){
                $estado =0;
            }else{
                $estado =1;
            }
            $data = $this->model->eliminarProducto($codigo, $estado);

            if ($data == "ok") {
                $data = "ok";
            } else {
                $data = "error";
            }

            echo $data;
            die();
        }

        public function editarProducto ($codigo) {
            $this->session();
            $data = $this->model->mostrarProducto($codigo);
            $this->views->getView($this, "editProductos", $data);
        }

        public function actualizarProducto(){

            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $precio_compra = $_POST['precio_compra'];
            $precio_venta = $_POST['precio_venta'];
            $stock = $_POST['stock'];

            // validar formulario no tenga espacios vacios
            // validar datos del producto
            if (empty($codigo) || empty($nombre) || empty($categoria) || empty($precio_compra) || empty($precio_venta) || $stock=="") {
                $msg = "Faltan datos del producto";
            } else {
                // validar el codigo ya está registrado
                if (!empty($this->model->buscarCodigo($codigo))) {
                    $data = $this->model->editarProducto($codigo, $nombre, $categoria, $precio_compra, $precio_venta, $stock);
                        // validar si el producto se registro con exito
                    if ($data == "ok") {
                        $msg = "ok";
                    } else {
                        $msg = "No se actualizó el producto";
                    }
                } else {
                    $msg = "Código del producto no existe";
                }
            }

            echo $msg;
            die();
        }

        public function mostrarProducto ($codigo) {
            $this->session();
            $data = $this->model->mostrarProducto($codigo);
            $this->views->getView($this, "infoProductos", $data);
        }
    }

?>