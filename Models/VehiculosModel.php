<?php

    class VehiculosModel extends Query
    {
        private string $cedula;
        public function __construct()
        {
            parent::__construct();
        }

        // Consultas
        public function getVehiculos()
        {
            $sql = "SELECT
                    v.placa,
                    v.modelo,
                    v.color,
                    v.marca,
                    v.observacion,
                    v.estado,
                    v.propietario,
                    tpv.tipovehiculo
                    FROM vehiculos v JOIN tiposvehiculos tpv ON v.tipovehiculo=tpv.id";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getVehiculo(string $placa)
        {
            $sql = "SELECT
                    v.placa,
                    v.modelo,
                    v.color,
                    v.marca,
                    v.observacion,
                    v.estado,
                    v.propietario,
                    tpv.tipovehiculo
                    FROM vehiculos v JOIN tiposvehiculos tpv ON v.tipovehiculo=tpv.id
                    WHERE v.placa='$placa'";
            $data = $this->select($sql);
            return $data;
        }

        public function getTiposVehiculos()
        {
            $sql = "SELECT * FROM tiposvehiculos";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function buscarClientes(string $cedula)
        {
            $sql = "SELECT * FROM clientes WHERE cedula like '$cedula%' LIMIT 10";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function registrarVehiculo(string $propietario, string $placa, string $modelo, string $marca, string $color, string $tipovehiculo, string $observaciones)
        {
            // datos de la tabla usuarios
            $this->propietario = $propietario;
            $this->placa = $placa;
            $this->modelo = $modelo;
            $this->marca = $marca;
            $this->color = $color;
            $this->tipovehiculo = $tipovehiculo;
            $this->observaciones = $observaciones;

            // si observaion esta vacio registra como null
            if (empty($this->observaciones)) {
                $this->observaciones = null;
            }

            // insertar datos en la tabla vehiculos
            $sql = "INSERT INTO vehiculos(placa, modelo, color, marca, observacion, propietario, tipovehiculo) VALUES (?,?,?,?,?,?,?)";
            $datos = array($this->placa, $this->modelo, $this->color, $this->marca, $this->observaciones, $this->propietario, $this->tipovehiculo);
            $data = $this->save($sql, $datos);
            if ($data == true) {
                $data = "ok";
            } else {
                $data = "error";
            }

            return $data;
        }

    }

?>