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
            $this->views->getView($this, "formVehiculos");
        }

        // Metodos

    }

?>