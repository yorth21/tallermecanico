<?php

    class FacturacionModel extends Query
    {
        private $cedula;
        public function __construct()
        {
            parent::__construct();
        }

        // Consultas

        public function getPlanilla(int $id)
        {
            $sql = "SELECT p.id, p.cliente, p.fechaingreso, p.fechaentrega, p.placavehiculo,
                    p.descripciontrabajo, p.observacion, p.empleado, tp.tipotrabajo,
                    c.nombres as nomcliente, c.apellidos as apellcliente,
                    u.nombres as nomempleado, u.apellidos as apellempleado,
                    tpv.tipovehiculo
                    FROM planillaingresos p
                    JOIN tipostrabajos tp ON p.tipotrabajo = tp.id
                    JOIN clientes c ON p.cliente= c.cedula
                    JOIN usuarios u ON p.empleado= u.cedula
                    JOIN vehiculos v ON p.placavehiculo = v.placa
                    JOIN tiposvehiculos tpv ON v.tipovehiculo = tpv.id
                    WHERE p.id = $id";
            $data = $this->select($sql);
            return $data;
        }

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

        public function buscadorProductos(string $codNomProducto)
        {
            $sql = "SELECT p.codigo, p.nombre, cp.categoria, p.precioventa, p.stock FROM productos p
                    JOIN cat_producto cp ON p.categoria = cp.id
                    WHERE (p.codigo LIKE '$codNomProducto%' OR p.nombre LIKE '$codNomProducto%')
                    AND p.stock > 0 AND p.estado = 1";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function buscarProducto(string $codigo)
        {
            $sql = "SELECT p.codigo, p.nombre, cp.categoria, p.precioventa, p.stock FROM productos p
                    JOIN cat_producto cp ON p.categoria = cp.id
                    WHERE p.codigo = '$codigo'";
            $data = $this->select($sql);
            return $data;
        }

    }

?>