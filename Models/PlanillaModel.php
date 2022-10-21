<?php

    class PlanillaModel extends Query
    {
        private $cedula;
        public function __construct()
        {
            parent::__construct();
        }

        // Consultas

        public function getPlanillas(int $estado)
        {
            $sql = "SELECT p.id, p.cliente, p.fechaingreso, p.fechaentrega, p.placavehiculo,
            p.descripciontrabajo, p.observacion, p.empleado, tp.tipotrabajo, c.nombres, c.apellidos, u.nombres as nomempleado
            FROM planillaingresos p
            JOIN tipostrabajos tp ON p.tipotrabajo = tp.id
            JOIN clientes c ON p.cliente= c.cedula
            JOIN usuarios u ON p.empleado= u.cedula
            WHERE p.estado = $estado
            ORDER BY p.fechaingreso DESC";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getPlanilla($id)
        {
            $sql = "SELECT p.id, p.cliente, p.fechaingreso, p.fechaentrega, p.placavehiculo,
                    p.descripciontrabajo, p.observacion, p.empleado, tp.tipotrabajo, c.nombres, c.apellidos,
                    u.nombres as nomempleado, u.apellidos as apellempleado
                    FROM planillaingresos p
                    JOIN tipostrabajos tp ON p.tipotrabajo = tp.id
                    JOIN usuarios u ON p.empleado = u.cedula
                    JOIN clientes c ON p.cliente= c.cedula
                    WHERE p.id = '$id'";

            $data = $this->select($sql);
            return $data;
        }

        public function getTiposTrabajos()
        {
            $sql = "SELECT * FROM tipostrabajos WHERE estado = 1";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function registrarPlanilla(string $cliente, string $fecha_ingreso, string $placa, string $descripTrabajo, string $observaciones, string $empleado, string $tipotrabajo)
        {
            $this->cliente = $cliente;
            $this->fecha_ingreso = $fecha_ingreso;
            $this->placa = $placa;
            $this->descripTrabajo = $descripTrabajo;
            $this->empleado = $empleado;
            $this->tipotrabajo = $tipotrabajo;
            $this->observaciones = $observaciones;

            // validar el campo observaciones si esta vacio
            if (empty($this->observaciones)) {
                $this->observaciones = null;
            }

            // insertar datos en la tabla planilla
            $sql = "INSERT INTO planillaingresos(cliente, fechaingreso, placavehiculo, descripciontrabajo, observacion, empleado, tipotrabajo) VALUES (?,?,?,?,?,?,?)";
            $datos = array($this->cliente, $this->fecha_ingreso, $this->placa, $this->descripTrabajo, $this->observaciones, $this->empleado, $this->tipotrabajo);
            $data = $this->save($sql, $datos);

            if ($data == 1) {
                $data = "ok";
            } else {
                $data = "error";
            }

            return $data;
        }

        public function buscarVehiculo(string $placa)
        {
            $sql = "SELECT v.placa, tpv.tipovehiculo, c.nombres, c.apellidos, v.propietario FROM vehiculos v
                    JOIN tiposvehiculos tpv ON v.tipovehiculo=tpv.id
                    JOIN clientes c ON v.propietario=c.cedula
                    WHERE v.placa LIKE '$placa%' LIMIT 10";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getTipoEmpleados(string $tipoVehiculo)
        {
            $sql = "SELECT e.cedula, u.nombres, u.apellidos FROM empleados e
                    JOIN usuarios u USING(cedula)
                    JOIN especialidades esp ON e.especialidad = esp.id
                    JOIN tiposvehiculos tpv ON esp.tiposvehiculo = tpv.id
                    WHERE tpv.tipovehiculo = '$tipoVehiculo'";
            $data = $this->selectAll($sql);
            return $data;
        }

    }

?>