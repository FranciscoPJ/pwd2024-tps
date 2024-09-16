<?php
class Auto
{
    private $Patente;
    private $Marca;
    private $Modelo;
    private $ObjDniDuenio; //foreign key de persona
    private $mensajeoperacion;


    public function __construct()
    {
        $this->Patente = "";
        $this->Marca = "";
        $this->Modelo = "";
        $this->ObjDniDuenio = new Persona(); // Inicializamos como objetos
        $this->mensajeoperacion = "";
    }

    public function setear($Patente, $Marca, $Modelo, $ObjDniDuenio)
    {
        $this->setPatente($Patente);
        $this->setMarca($Marca);
        $this->setModelo($Modelo);
        $this->setObjDniDuenio($ObjDniDuenio); // Objeto
    }


    /* get */
    public function getPatente()
    {
        return $this->Patente;
    }

    public function getMarca()
    {
        return $this->Marca;
    }

    public function getModelo()
    {
        return $this->Modelo;
    }

    public function getObjDniDuenio() // Objeto
    {
        return $this->ObjDniDuenio;
    }

    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }
    
    /* set */
    public function setPatente($valor)
    {
        $this->Patente = $valor;
    }

    public function setMarca($valor)
    {
        $this->Marca = $valor;
    }

    public function setModelo($valor)
    {
        $this->Modelo = $valor;
    }

    public function setObjDniDuenio($valor) // Objeto
    {
        $this->ObjDniDuenio = $valor;
    }
    
    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }

/* Metodos del Objeto*/

public function cargar() // Buscar orm
{
    $resp = false;
    $base = new BaseDatos();
    // Consulta para obtener el auto por la patente
    $sql = "SELECT * FROM auto WHERE Patente = '" . $this->getPatente() . "'";
    
    if ($base->Iniciar()) {
        $res = $base->Ejecutar($sql);
        
        if ($res > -1) {
            if ($res > 0) {
                $row = $base->Registro();
                
                // Se crea un objeto Persona y carga los datos de la persona duenia
                $duenio = new Persona();
                $duenio->setNroDni($row['DniDuenio']); // Se asigna el DNI del duenio
                
                if ($duenio->cargar()) { // Carga los datos del dueño
                    // Setea los datos del auto junto con el objeto Persona
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $duenio);
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Auto->cargar: No se pudo cargar el dueño.");
                }
            }
        }
    } else {
        $this->setmensajeoperacion("Auto->cargar: " . $base->getError());
    }
    
    return $resp;
}

public function insertar()
{
    $resp = false;
    $base = new BaseDatos();
    $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio)  VALUES('" . $this->getPatente() .  
        "','" . $this->getMarca() . 
        "','" . $this->getModelo() . 
        "','" . $this->getObjDniDuenio()[0]->getNroDni() . "');"; 
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            // Eliminé la línea donde intentaba asignar elid a NroDni, ya que no corresponde en este contexto.
            $resp = true;
        } else {
            $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
        }
    } else {
    $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
    }
    return $resp;
}

public function modificar()
{
    $resp = false;
    $base = new BaseDatos();
    $sql = "UPDATE auto SET Marca='" . $this->getMarca() .  
    "', Modelo='" . $this->getModelo() . 
    "', DniDuenio='" . $this->getObjDniDuenio()->getNroDni() . 
    "' WHERE Patente= '".$this->getPatente()."'";
    

    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            $resp = true;
        } else {
            $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
        }
    } else {
        $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
    }
    return $resp;
}

public function eliminar()
{
    $resp = false;
    $base = new BaseDatos();
    $sql = "DELETE FROM auto WHERE Patente=" . $this->getPatente();
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            return true;
        } else {
            $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
        }
    } else {
        $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
    }
    return $resp;
}


//retorna un array
public static function listar($parametro = "")
{
    $arreglo = array();
    $base = new BaseDatos();
    $sql = "SELECT * FROM auto ";
    
    if ($parametro != "") {
        $sql .= 'WHERE ' . $parametro;
    }
    $res = $base->Ejecutar($sql);
    
    if ($res > -1) {
        
        if ($res > 0) {

            while ($row = $base->Registro()) {
                // objeto Auto
                $auto = new Auto();
                
                // objeto Persona
                $duenioDni = new Persona();
                $duenioDni->setNroDni($row['DniDuenio']); // Se asigna el DNI del duenio
                
                // Carga los datos del duenio desde la tabla Persona
                if ($duenioDni->cargar()) {
                    // Se setea los datos del auto junto con el duenio
                    $auto->setear($row['Patente'], $row['Marca'], $row['Modelo'], $duenioDni);
                    array_push($arreglo, $auto);
                } else {
                    // Si no se pudo cargar el dueño, puedes registrar un error
                    $auto->setmensajeoperacion("Auto->listar: No se pudo cargar el dueño del auto con patente " . $row['Patente']);
                }
            }

        }  
    } else {
        //$this->setmensajeoperacion("Auto->listar: " . $base->getError());
        throw new Exception("Auto->listar: " . $base->getError());
    }

    return $arreglo;
}

}
?>