<?php
class AbmAuto{

    
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $obj = null;
        
        if(array_key_exists('Patente',$param) and array_key_exists('Marca',$param) and array_key_exists('Modelo',$param)){ //and array_key_exists('DniDuenio',$param)
            $obj = new Auto();
            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['DniDuenio']);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['Patente']) ){
            $obj = new Auto();
            $obj->setear($param['Patente'], null, null, null);
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
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }
    
    /**
     * Alta (A): Es el proceso de crear o agregar un nuevo objeto o registro a un sistema.
     * @param array $param
     */
    public function alta($param){ //agrega
        $resp = false;
        //$param['Patente'] =null;
        $elObjtAuto = $this->cargarObjeto($param);
        
        //verEstructura($elObjtAuto); /*aca voy a descomentar verEstructura($elObjtAuto)*/

        if ($elObjtAuto!=null and $elObjtAuto->insertar()){ // no hay que poner datos nulos pienso
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
            $elObjtAuto = $this->cargarObjetoConClave($param);
            if ($elObjtAuto!=null and $elObjtAuto->eliminar()){
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
    public function modificacion($param){
     
        $resp = false;
        
        if ($this->seteadosCamposClaves($param)){
           
            $elObjtAuto = $this->cargarObjeto($param);
         
            if($elObjtAuto!=null and $elObjtAuto->modificar()){
     
                $resp = true;
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
        // $where = " true ";
        $where = "";

        if ($param<>NULL){

            if  (isset($param['Patente'])){
                $where .= " Patente = '". $param['Patente'] . "'";
            }
                
            if  (isset($param['Marca'])){
                $where.=" Marca ='".$param['Marca']."'";
            }
                
            if  (isset($param['Modelo'])){
                $where.=" Modelo ='".$param['Modelo']."'";
            }
                
            if  (isset($param['DniDuenio'])){
                
                $where.=" DniDuenio ='".$param['DniDuenio']."'";
            }
                
        }
        /*$sql = "SELECT * FROM auto ";
        if ($where != "") {
            $sql .= 'WHERE ' . $where;
        }
        echo $sql; // Imprime la consulta para depuración*/ 
        
      
        $arreglo = Auto::listar($where);  
        return $arreglo;
        
    }

    //$Patente, $Marca, $Modelo, $ObjDniDuenioo

    public function solicitarDatos(){
        $colDatos = [
            'Marca' => "Ingrese una Marca de Auto: ",
            'Modelo' => "Ingrese un Modelo de Auto: ",
            'DNI' => "Ingrese DNI del Duenio: "
        ];
        return $colDatos;
    }
    

    /**
     * permite buscar un objeto
     * @param array $param param['clavePrimaria']
     * @return boolean 
     */
    public function existeAuto($param){

        $existe = false;
        $arregloAuto = $this->buscar($param); //obtiene arreglo (si es que existe o arreglo vacio (si no existe))
        if(count($arregloAuto) > 0){ //si es mayor a 0, obtiene el objeto, retorna true (malo porque ya existe en la base de datos)
            $existe = true;
        }
        // falso (bueno)
        return $existe;
    }

    public function darArray($param) {
        $listadoArray=[];
        $where = "";

        if ($param<>NULL){

            if  (isset($param['Patente'])){
                $where .= " Patente = '". $param['Patente'] . "'";
            }
                
            if  (isset($param['Marca'])){
                $where.=" Marca ='".$param['Marca']."'";
            }
                
            if  (isset($param['Modelo'])){
                $where.=" Modelo ='".$param['Modelo']."'";
            }
                
            if  (isset($param['DniDuenio'])){
                
                $where.=" DniDuenio ='".$param['DniDuenio']."'";
            }
                
        } 
      
        $arreglo = Auto::listar($where);  

        if (count($arreglo) > 0) {


            foreach ($arreglo as $objAuto) {
                $autoArray=[
                    'Patente' => $objAuto->getPatente(),
                    'Marca' => $objAuto->getMarca(),
                    'Modelo' => $objAuto->getModelo(),
                    'ObjDniDuenio' => [
                        'NroDni' => $objAuto->getObjDniDuenio()->getNroDni(),
                        'Apellido' => $objAuto->getObjDniDuenio()->getApellido(),
                        'Nombre' => $objAuto->getObjDniDuenio()->getNombre(),
                        'fechaNac' => $objAuto->getObjDniDuenio()->getFechaNac(),
                        'Telefono' => $objAuto->getObjDniDuenio()->getTelefono(),
                        'Domicilio' => $objAuto->getObjDniDuenio()->getDomicilio(),
                    ]
                ];

                array_push($listadoArray,$autoArray);
            }}
        return  $listadoArray;
    }
}

?>