<?php

    class ClientesModel extends Query
    {
        private $cedula;
        public function __construct()
        {
            parent::__construct();
        }

        // Consultas
        public function getClientes()
        {
            $sql = "SELECT
                    cedula,
                    nombres,
                    apellidos,
                    telefono,
                    email
                    FROM clientes";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getCliente($cedula){
            $sql = "SELECT
                    c.cedula,
                    c.nombres,
                    c.apellidos,
                    c.direccion,
                    c.telefono,
                    c.email,
                    c.fechanac,
                    m.municipio
                    FROM clientes c
                    JOIN municipios m ON
                    c.idmunicipio = m.idmunicipio
                    WHERE cedula = '$cedula'
                    ";
            $data = $this->select($sql);
            return $data;
        }

    }

?>