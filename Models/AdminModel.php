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
                    JOIN roles r ON dr.rol=r.id
                    WHERE r.rol='empleado'";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getEmpleado(string $cedula)
        {
            $sql = "SELECT
                    u.cedula,
                    u.nombres,
                    u.apellidos,
                    u.direccion,
                    u.telefono,
                    u.email,
                    u.fechanac,
                    u.usuario,
                    u.clave,
                    u.estado,
                    e.fechaingreso,
                    e.sueldo,
                    esp.especialidad,
                    r.rol,
                    m.idmunicipio,
                    m.municipio,
                    d.iddepto,
                    d.departamento
                    FROM usuarios u
                    JOIN empleados e ON u.cedula=e.cedula
                    JOIN especialidades esp ON e.especialidad=esp.id
                    JOIN detallesrol dr ON u.cedula=dr.cedula
                    JOIN roles r ON dr.rol=r.id
                    JOIN municipios m USING(idmunicipio)
                    JOIN departamentos d USING(iddepto)
                    WHERE u.cedula = '$cedula'";
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
            $data = $this->select($sql);
            return $data;
        }

        public function buscarUsuario($usuario)
        {
            $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
            $data = $this->select($sql);
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

            // datos tabla detallesrol
            $this->rol = 2; // 2 = empleado

            // Iniciar transacion
            $this->startTransaction();

            // insertar datos tabla usuarios - U = usuarios
            $sqlU = "INSERT INTO usuarios(cedula, nombres, apellidos, direccion, telefono, email, idmunicipio, fechanac, usuario, clave) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $datosU = array($this->cedula, $this->nombres, $this->apellidos, $this->direccion, $this->telefono, $this->email, $this->municipio, $this->fechanac, $this->usuario, $this->clave);
            $dataU = $this->save($sqlU, $datosU);
            if ($dataU == 1) {
                 // insertar datos tabla empleados - E = empleados
                $sqlE = "INSERT INTO empleados(cedula, fechaingreso, sueldo, especialidad) VALUES (?,?,?,?)";
                $datosE = array($this->cedula, $this->fechaingreso, $this->sueldo, $this->especialidad);
                $dataE = $this->save($sqlE, $datosE);
                if ($dataE == 1) {
                    // insertar datos tabla destallesrol - DR = detallesrol
                    $sqlDR = "INSERT INTO detallesrol(cedula, rol) VALUES (?,?)";
                    $datosDR = array($this->cedula, $this->rol);
                    $dataDR = $this->save($sqlDR, $datosDR);
                    if ($dataDR == 1) {
                        $res = $this->submitTransaction(true);
                    } else{
                        $res = $this->submitTransaction(false);
                    }
                } else {
                    $res = $this->submitTransaction(false);
                }
            } else {
                $res = $this->submitTransaction(false);
            }

            // validar si se hizo commit o rollback
            if ($res == true) {
                $data = "ok";
            } else {
                $data = "error";
            }

            return $data;
        }

        public function estadoEmpleado(string $cedula, int $estado)
        {
            $this->cedula = $cedula;
            $this->estado = $estado;

            $sql = "UPDATE usuarios SET estado = ? WHERE cedula = ?";
            $datos = array($this->estado, $this->cedula);
            $data = $this->save($sql, $datos);

            // validar si se cumplio la peticion
            if ($data == 1) {
                $data = "ok";
            } else {
                $data = "error";
            }

            return $data;
        }

        public function editarEmpleado(string $cedula, string $nombres, string $apellidos, string $direccion, string $telefono, string $email, string $municipio, string $fechanac, string $usuario, string $clave)
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

            // Actualizar empleado
            $sql = "UPDATE usuarios SET nombres = ?, apellidos = ?, direccion = ?, telefono = ?, email = ?, idmunicipio = ?, fechanac = ?, clave = ? WHERE cedula = ?";
            $datos = array($this->nombres, $this->apellidos, $this->direccion, $this->telefono, $this->email, $this->municipio, $this->fechanac, $this->clave, $this->cedula);
            $data = $this->save($sql, $datos);

            // validar si se actualizo la informacion del usuario
            if ($data == 1) {
                $data = "ok";
            } else {
                $data = "error";
            }

            return $data;
        }

    }

?>