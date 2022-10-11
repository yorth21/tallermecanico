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
            $this->views->getView($this, "formClientes");
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

    }

?>