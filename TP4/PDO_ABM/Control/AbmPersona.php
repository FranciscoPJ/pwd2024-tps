<?php
class AbmPersona{
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param){
        $obj = null;

        if(array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and array_key_exists('Nombre',$param) and array_key_exists('fechaNac',$param) and array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param)){
            $obj = new Persona();
            $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['NroDni']) ){
            $obj = new Persona();
            $obj->setear($param['NroDni'], null, null, null, null, null);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['NroDni']))
            $resp = true;
        return $resp;
    }
    
    /**
     * Alta (A): Es el proceso de crear o agregar un nuevo objeto o registro a un sistema.
     * @param array $param
     */
    public function alta($param){ //agrega
        $resp = false;
        //$param['NroDni'] =null;
        $elObjtPersona = $this->cargarObjeto($param);
        /*aca voy a descomentar verEstructura($elObjtPersona)*/
        //verEstructura($elObjtPersona);
        if ($elObjtPersona!=null and $elObjtPersona->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * Baja (B): Se refiere a eliminar un objeto o registro existente.
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){ //elimina
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtPersona = $this->cargarObjetoConClave($param);
            if ($elObjtPersona!=null and $elObjtPersona->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * Modificación (M): Es la actualización de la información de un objeto o registro existente.
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param) {
        $resp = -1; // Valor predeterminado para "fallo en la modificación"
    
        if ($this->seteadosCamposClaves($param)) {
            $elObjtPersona = $this->cargarObjeto($param);
            
            //verEstructura($elObjtPersona);// aca obtiene el objeto------------

            if ($elObjtPersona !== null) {

                $resultadoModificacion = $elObjtPersona->modificar();

                if ($resultadoModificacion === 1) { 
                    $resp = 1; // Modificación exitosa
                } else {
                    if ($resultadoModificacion === 0) {
                        $resp = 0; // No se realizaron cambios
                    }
                } 
            } 

        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = "";
        //echo "<div>hola entramos en al buscar()</div>";
        //$param<>NULL 
        if ($param<>NULL){

            if  (isset($param['NroDni'])){            
                $where.=" NroDni ='".$param['NroDni'] . "'";
            }
                
            if  (isset($param['Apellido'])){
                $where.=" Apellido ='".$param['Apellido']."'";
            }
                
            if  (isset($param['Nombre'])){
                $where.= " Nombre ='" .$param['Nombre'] . "'";
            }
                
            if  (isset($param['fechaNac'])){
                $where.=" fechaNac ='". $param['fechaNac'] ."'";
            }
                
            if  (isset($param['Telefono'])){
                $where.=" Telefono ='" .$param['Telefono'] . "'";
            }
                
            if  (isset($param['Domicilio'])){
                $where.=" Domicilio ='" .$param['Domicilio'] ."'";
            }
        }
        $arreglo = Persona::listar($where);  
        return $arreglo;
        
    }

    /**
     * permite buscar un objeto
     * @param array $param param['clavePrimaria']
     * @return boolean 
     */
    public function existePersona($param){

        $existe = false;
        $arregloPersona = $this->buscar($param); //obtiene arreglo (si es que existe o arreglo vacio (si no existe))
        if(count($arregloPersona) > 0){ //si es mayor a 0, obtiene el objeto, retorna true (malo porque ya existe en la base de datos)            
            $existe = true;
        }
        // falso (bueno)
        return $existe;
    }

    /*public function buscarPersona($array){
        $objeto = $this->cargarObjeto($array)

    }*/

    
}
//$NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio


?>