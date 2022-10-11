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
            $this->views->getView($this, "formProductos");
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
                $data[$i]['acciones'] = '<div>
                                            <a class="btn btn-warning" href="'.base_url.'Productos/editarProducto/'.$data[$i]['codigo'].'" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-primary" href="'.base_url.'Productos/mostrarProducto/'.$data[$i]['codigo'].'" title="Ver"><i class="fas fa-clipboard-list"></i></a>
                                            <a class="btn btn-danger" href="'.base_url.'Productos/eliminarProducto/'.$data[$i]['codigo'].'" title="Eliminar"><i class="fas fa-'.$icon.'"></i></a>

                                        </div>';
            }
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            die();
        }

        //Eliminar producto
        public function eliminarProducto($codigo){
            $this->session();
            $data = $this->model->eliminarProducto();
        }

        public function editarProducto ($codigo) {
            $this->session();
            $data = $this->model->editarProducto();
            $this->views->getView($this, "editProductos", $data);
        }

        public function mostrarProducto ($codigo) {
            $this->session();
            $data = $this->model->mostrarProducto($codigo);
            $this->views->getView($this, "infoProductos", $data);
        }
    }

?>