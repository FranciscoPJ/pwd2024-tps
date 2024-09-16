<?php
class Persona
{
    private $NroDni;
    private $Apellido;
    private $Nombre;
    private $fechaNac;
    private $Telefono;
    private $Domicilio;
    private $mensajeoperacion;

    public function __construct()
    {
        $this->NroDni = "";
        $this->Apellido = "";
        $this->Nombre = "";
        $this->fechaNac = "";
        $this->Telefono = "";
        $this->Domicilio = "";
        $this->mensajeoperacion = "";
    }

    public function setear($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio)
    {
        $this->setNroDni($NroDni);
        $this->setApellido($Apellido);
        $this->setNombre($Nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($Telefono);
        $this->setDomicilio($Domicilio);
    }

    /* get */
    public function getNroDni()
    {
        return $this->NroDni;
    }

    public function getApellido()
    {
        return $this->Apellido;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    public function getTelefono()
    {
        return $this->Telefono;
    }

    public function getDomicilio()
    {
        return $this->Domicilio;
    }

    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }
    
    /* set */
    public function setNroDni($valor)
    {
        $this->NroDni = $valor;
    }

    public function setApellido($valor)
    {
        $this->Apellido = $valor;
    }

    public function setNombre($valor)
    {
        $this->Nombre = $valor;
    }

    public function setFechaNac($valor)
    {
        $this->fechaNac = $valor;
    }

    public function setTelefono($valor)
    {
        $this->Telefono = $valor;
    }

    public function setDomicilio($valor)
    {
        $this->Domicilio = $valor;
    }
    
    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }

    /* Metodos del Objeto*/

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE NroDni = " . $this->getNroDni();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql); // aca pienso donde se va a romper el codigo de la conexion (basedatos.php)
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    $resp = true;
                }
            }
        } else {
            $this->setmensajeoperacion("Persona->listar: " . $base->getError());
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)  VALUES('" . $this->getNroDni() . 
            "','" . $this->getApellido() . 
            "','" . $this->getNombre() . 
            "','" . $this->getFechaNac() . 
            "','" . $this->getTelefono() . 
            "','" . $this->getDomicilio() . "');";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                // Eliminé la línea donde intentaba asignar elid a NroDni, ya que no corresponde en este contexto.
                $resp = true;
            } else {
                $this->setmensajeoperacion("Persona->insertar: " . $base->getError());
            }
        } else {
        $this->setmensajeoperacion("Persona->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = -1;
        $base = new BaseDatos();

        // Verificar que los campos no sean null o vacíos (trim elimina espacios en blanco)
        if (
            trim($this->getApellido()) == "null" || trim($this->getNombre()) == "null" ||
            trim($this->getFechaNac()) == "null" || trim($this->getTelefono()) == "null" ||
            trim($this->getDomicilio()) == "null"
        ) {

            // Si alguno de los campos requeridos es null o está vacío, retornamos un código de error
            $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
            // Indicar un código de error especial para este caso

        } else {

            $sql = "UPDATE persona SET Apellido='" . $this->getApellido() .
                "', Nombre='" . $this->getNombre() .
                "', fechaNac='" . $this->getFechaNac() .
                "', Telefono='" . $this->getTelefono() .
                "', Domicilio='" . $this->getDomicilio() .
                "' WHERE NroDni= '" . $this->getNroDni() . "'";

            if ($base->Iniciar()) {                
                /*
                No ponemos $base->Ejecutar($sql) en una condicion de un if porque solo retorna un boolean, tiene 2 valores, mas alla de la cant de rowCount().
                Por lo tanto, para el ej9 del Tp4 se necesita 3 valores para poder indentificar las modificaciones. No 2 valores.
                */
                $filasAfectadas = $base->Ejecutar($sql);

                if ($filasAfectadas >= 0) {
                    if ($filasAfectadas > 0) {
                        // Se modificó correctamente
                        $resp = 1;
                    } else {
                        // No se realizaron cambios                            
                        $resp = 0;
                    }
                }

            } else {
                $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
            }
        }

        return $resp;
    }


    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM persona WHERE NroDni=" . $this->getNroDni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {

            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $obj = new Persona();
                    $obj->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    array_push($arreglo, $obj);
                }

            }  else {
                //$this->setmensajeoperacion("Persona->listar: " . $base->getError());
                throw new Exception("Persona->listar: " . $base->getError());
            }  
        } else {
            //$this->setmensajeoperacion("Persona->listar: " . $base->getError());
            throw new Exception("Persona->listar: " . $base->getError());
        }

        return $arreglo;
    }

}
?>