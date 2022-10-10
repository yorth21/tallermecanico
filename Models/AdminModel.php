<?php

    class AdminModel extends Query
    {
        private $cedula;
        public function __construct()
        {
            parent::__construct();
        }

        public function getEmpleados()
        {
            $sql = "SELECT
                    u.cedula,
                    u.nombres,
                    u.apellidos,
                    u.direccion,
                    u.telefono,
                    u.email,
                    u.fechanac,
                    u.estado,
                    e.fechaingreso,
                    e.sueldo,
                    esp.especialidad,
                    r.rol
                    FROM usuarios u
                    JOIN empleados e ON u.cedula=e.cedula
                    JOIN especialidades esp ON e.especialidad=esp.id
                    JOIN detallesrol dr ON u.cedula=dr.cedula
                    JOIN roles r ON dr.rol=r.id";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getEmpleado($cedula)
        {
            $sql = "SELECT
                    u.cedula,
                    u.nombres,
                    u.apellidos,
                    u.direccion,
                    u.telefono,
                    u.email,
                    u.fechanac,
                    u.estado,
                    e.fechaingreso,
                    e.sueldo,
                    esp.especialidad,
                    r.rol
                    FROM usuarios u
                    JOIN empleados e ON u.cedula=e.cedula
                    JOIN especialidades esp ON e.especialidad=esp.id
                    JOIN detallesrol dr ON u.cedula=dr.cedula
                    JOIN roles r ON dr.rol=r.id
                    WHERE u.cedula = '$cedula'
                    ";
            $data = $this->select($sql);
            return $data;
        }

        public function getDepartamentos()
        {
            $sql = "SELECT * FROM departamentos";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getMunicipiosDepa($iddepto)
        {
            $sql = "SELECT * FROM municipios WHERE iddepto='$iddepto'";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getEspecialidades()
        {
            $sql = "SELECT * FROM especialidades WHERE estado=1";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function buscarCedula($cedula)
        {
            $sql = "SELECT * FROM usuarios WHERE cedula='$cedula'";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function buscarUsuario($usuario)
        {
            $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function registrarEmpleado(string $cedula, string $nombres, string $apellidos, string $direccion, string $telefono, string $email, string $municipio, string $fechanac, string $usuario, string $clave, string $fechaingreso, string $sueldo, string $especialidad)
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
            $this->usuario = $usuario;
            $this->clave = $clave;

            // datos tabla empleados
            $this->fechaingreso = $fechaingreso;
            $this->sueldo = $sueldo;
            $this->especialidad = $especialidad;

            $sql = "BEGIN;
                    INSERT INTO usuarios(cedula, nombres, apellidos, direccion, telefono, email, idmunicipio, fechanac, usuario, clave) VALUE(?,?,?,?,?,?,?,?,?,?);
                    INSERT INTO empleados(cedula, fechaingreso, sueldo, especialidad) VALUES (?,?,?,?);
                    COMMIT";
            $datos = array($this->cedula, $this->nombres, $this->apellidos, $this->direccion, $this->telefono, $this->email, $this->municipio, $this->fechanac, $this->usuario, $this->clave, $this->cedula, $this->fechaingreso, $this->sueldo, $this->especialidad);
            $data = $this->save($sql, $datos);

            return $data;
        }

    }

?>