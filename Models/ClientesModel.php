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
                    m.municipio,
                    d.departamento
                    FROM clientes c
                    JOIN municipios m 
                    ON
                    c.idmunicipio = m.idmunicipio
                    JOIN departamentos d
                    ON m.iddepto = d.iddepto
                    WHERE cedula = '$cedula'
                    ";
            $data = $this->select($sql);
            return $data;
        }

        public function buscarCedula($cedula)
        {
            $sql = "SELECT * FROM clientes WHERE cedula='$cedula'";
            $data = $this->select($sql);
            return $data;
        }

        public function registrarCliente(string $cedula, string $nombres, string $apellidos, string $direccion, string $telefono, string $email, string $municipio, string $fechanac)
        {
            // datos tabla usuarios
            $this->cedula = $cedula;
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
            $this->email = $email;
            $this->municipio = $municipio;
            $this->fechanac = $fechanac;

            $sql = "INSERT INTO clientes(cedula, nombres, apellidos, direccion, telefono, email, idmunicipio, fechanac) VALUES (?,?,?,?,?,?,?,?)";
            $datos = array($this->cedula, $this->nombres, $this->apellidos, $this->direccion, $this->telefono, $this->email, $this->municipio, $this->fechanac);
            $data = $this->save($sql, $datos);
            
            if ($data == 1) {
                $data = "ok";
            } else {
                $data = "error";
            }
            return $data;
        }

        public function getMunicipiosDepa($iddepto)
        {
            $sql = "SELECT * FROM municipios WHERE iddepto='$iddepto'";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getDepartamentos()
        {
            $sql = "SELECT * FROM departamentos";
            $data = $this->selectAll($sql);
            return $data;
        }
    }

?>