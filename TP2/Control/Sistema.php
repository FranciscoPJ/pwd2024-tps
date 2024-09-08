<?php

class Sistema{
    
    private $colUsuarios;

	public function __construct() {

		$this->colUsuarios = [
            ["usuario" => "admin", "clave" => "admin123"],
            ["usuario" => "usuario1", "clave" => "user1234"],
            ["usuario" => "invitado", "clave" => "invited2024"],
        ];

	}

	public function getColUsuarios() {
		return $this->colUsuarios;
	}

	public function setColUsuarios($value) {
		$this->colUsuarios = $value;
	}

    public function verificarUsuario($colDatos){
        $colUsuarios = $this->getColUsuarios();
        $encontrado = false;
        $i = 0;

        while($i < count($colUsuarios) && !$encontrado){
            
            if($colUsuarios[$i]['usuario'] == $colDatos['usuario'] && $colUsuarios[$i]['clave'] == $colDatos['clave']){
                $encontrado = true;
            }
            $i++;

        }

        return $encontrado;
    }

}
?>