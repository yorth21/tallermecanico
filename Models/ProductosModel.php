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
            $sql = "SELECT p.codigo, p.nombre, cat.categoria, p.fechaingreso, p.preciocompra, p.precioventa, p.stock, p.estado
                    FROM productos As p
                    JOIN cat_producto AS cat ON cat.id = p.categoria";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function mostrarProducto(String $codigo)
        {
            $sql = "SELECT p.codigo, p.nombre, cat.categoria, p.fechaingreso, p.preciocompra, p.precioventa, p.stock, p.estado
                    FROM productos As p
                    JOIN cat_producto AS cat ON cat.id = p.categoria WHERE p.codigo = '$codigo'";
            $data = $this->select($sql);
            return $data;
        }

        public function getCategorias() {
            $sql = "SELECT * FROM cat_producto WHERE estado = 1";
            $data = $this->selectAll($sql);
            return $data;
        }
        public function buscarCodigo($codigo)
        {
            $sql = "SELECT * FROM productos WHERE codigo='$codigo'";
            $data = $this->select($sql);
            return $data;
        }

        public function eliminarProducto(String $codigo, int $estado)
        {
            $this->codigo = $codigo;
            $this->estado = $estado;

            $sql = "UPDATE productos SET estado = ? WHERE codigo = ?";
            $datos= array($this->estado,$this->codigo);
            $data = $this->save($sql, $datos);

            //Validar si se registro el producto
            if ($data == 1) {
                $data = "ok";
            } else {
                $data = "error";
            }
            return $data;
        }

        public function registrarProducto(String $codigo, String $nombre, String $categoria, String $fecha_registro, String $precio_compra, String $precio_venta, String $stock)
        {
            // datos tabla productos
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            $this->categoria = $categoria;
            $this->fecha_registro = $fecha_registro;
            $this->precio_compra = $precio_compra;
            $this->precio_venta = $precio_venta;
            $this->stock = $stock;
            
            // insertar datos tabla productos - P = Productos
            $sqlP = "INSERT INTO productos(codigo, nombre, categoria, fechaingreso, preciocompra, precioventa, stock) VALUES (?,?,?,?,?,?,?)";
            $datosP = array($this->codigo, $this->nombre,  $this->categoria,  $this->fecha_registro, $this->precio_compra, $this->precio_venta, $this->stock);
            $dataP = $this->save($sqlP, $datosP);

            //Validar si se registro el producto
            if ($dataP == 1) {
                $data = "ok";
            } else {
                $data = "error";
            }

            return $data;
        }

        public function editarProducto(String $codigo, String $nombre, String $categoria, String $precio_compra, String $precio_venta, String $stock)
        {
            // datos tabla productos
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            $this->categoria = $categoria;
            $this->precio_compra = $precio_compra;
            $this->precio_venta = $precio_venta;
            $this->stock = $stock;
            
            // actualizar datos tabla productos - P = Productos
            $sql = "UPDATE productos 
            SET nombre = ?, preciocompra = ?, precioventa = ?, stock = ?
            WHERE codigo = ?";

            $datos= array($this->nombre, $this->precio_compra, $this->precio_venta, $this->stock,  $this->codigo);
            $data = $this->save($sql, $datos);

            //Validar si se registro el producto
            if ($data == 1) {
                $data = "ok";
            } else {
                $data = "error";
            }
            return $data;
        }

    }

?>