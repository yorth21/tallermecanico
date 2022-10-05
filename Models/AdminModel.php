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

        public function getEmpleado($cedula){
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

    }

?>