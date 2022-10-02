<?php

    class InicioModel extends Query
    {
        private $idUser;
        public function __construct()
        {
            parent::__construct();
        }

        public function verPermiso(string $cedula)
        {
            $sql = "SELECT r.rol FROM detallesrol dr JOIN roles r ON dr.rol=r.id
                    WHERE cedula = $cedula AND dr.estado=1";
            $data = $this->select($sql);
            return $data;
        }

        public function nameUser(string $cedula)
        {
            $sql = "SELECT nombres FROM usuarios WHERE cedula = $cedula";
            $data = $this->select($sql);
            return $data;
        }

    }

?>