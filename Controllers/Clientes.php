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

    }

?>