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

    }

?>