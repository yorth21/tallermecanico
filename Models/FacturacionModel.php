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

        public function registrarFactura(string $numfactura, string $fecha, string $cajero, string $planilla, string $totalapagar, string $descuentos, string $observacion, string $formadepago, array $codigoProd, array $cantidadProd)
        {
            // datos tabla usuarios
            $this->numfactura = $numfactura;
            $this->fecha = $fecha;
            $this->cajero = $cajero;
            $this->planilla = $planilla;
            $this->totalapagar = $totalapagar;
            $this->descuentos = $descuentos;
            $this->observacion = $observacion;
            $this->formadepago = $formadepago;

            // si observaion esta vacio registra como null
            if (empty($this->observacion)) {
                $this->observacion = null;
            }

            // Arrays con datos de los productos facturados
            $this->codigoProd = $codigoProd;
            $this->cantidadProd = $cantidadProd;

            // Iniciar transacion
            $this->startTransaction(); // begin

            $sqlF = "INSERT INTO facturas(numfactura, fecha, cajero, planilla, totalapagar, descuentos, observacion, formadepago) VALUES (?,?,?,?,?,?,?,?)";
            $datosF = array($this->numfactura, $this->fecha, $this->cajero, $this->planilla, $this->totalapagar, $this->descuentos, $this->observacion, $this->formadepago);
            $dataF = $this->save($sqlF, $datosF);
            if ($dataF == 1) {
                $sqlP = "UPDATE planillaingresos SET fechaentrega=? WHERE id=?";
                $datosP = array($this->fecha, $this->planilla);
                $dataP = $this->save($sqlP, $datosP);
                if ($dataP == 1) {
                    // validar si se agregaron productos a la factura
                    if (!empty($this->codigoProd)) {
                        // Ciclo para recorrer el array de los productos
                        $b = 1; // bandera = 1 si todos los insert se cumplen
                        for ($i=0; $i < count($this->codigoProd); $i++) {
                            $sqlProd = "INSERT INTO facturacionproductos(codigoproducto, numfactura, cantidad) VALUES (?,?,?)";
                            $datosProd = array($this->codigoProd[$i], $this->numfactura, $this->cantidadProd[$i]);
                            $dataProd = $this->save($sqlProd, $datosProd);
                            if ($dataProd == 1) { // no se inserto el producto
                                $sqlP = "UPDATE productos SET stock=stock-? WHERE codigo=?";
                                $datosP = array($this->cantidadProd[$i], $this->codigoProd[$i]);
                                $dataP = $this->save($sqlP, $datosP);
                                if ($dataP == 0) {
                                    $b = 0;
                                    break;
                                }
                            } else {
                                $b = 0;
                                break;
                            }
                        }
                        if ($b == 1) {
                            $res = $this->submitTransaction(true);
                        } else {
                            $res = $this->submitTransaction(false);
                        }
                    } else {
                        $res = $this->submitTransaction(true);
                    }
                } else {
                    $res = $this->submitTransaction(false);
                }
            } else {
                $res = $this->submitTransaction(false);
            }

            if ($res == true) {
                $data = "ok";
            } else {
                $data = "error";
            }

            return $data;
        }

    }

?>