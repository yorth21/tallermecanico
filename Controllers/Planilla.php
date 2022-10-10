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

        public function gestionPlanilla()
        {
            $this->session();
            $this->views->getView($this, "gestionPlanilla");
        }

        public function formPlanilla()
        {
            $this->session();
            $this->views->getView($this, "formPlanilla");
        }

        // Metodos

    }

?>