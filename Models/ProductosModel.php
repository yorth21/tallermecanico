<?php

    class ProductosModel extends Query
    {
        private $cedula;
        public function __construct()
        {
            parent::__construct();
        }

        // Consultas

        //Lista de prodcutos
        public function getProductos()
        {
            $sql = "SELECT p.codigo, p.nombre, cat.categoria, p.fechaingreso, p.preciocompra, p.precioventa, p.stock
                    FROM productos As p
                    JOIN cat_producto AS cat ON cat.id = p.categoria";
            $data = $this->selectAll($sql);
            return $data;
        }
        public function eliminarProducto($codigo)
        {

        }
        public function mostrarProducto($codigo)
        {
            $sql = "SELECT p.codigo, p.nombre, cat.categoria, p.fechaingreso, p.preciocompra, p.precioventa, p.stock
                    FROM productos As p
                    JOIN cat_producto AS cat ON cat.id = p.categoria WHERE p.codigo = '$codigo'";
            $data = $this->select($sql);
            return $data;
        }
    }

?>