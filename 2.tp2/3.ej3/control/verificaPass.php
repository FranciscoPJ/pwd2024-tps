<?php

class Sistema{
    private $colUsarios;

	public function __constructor() {

		$this->colUsarios = null;
	}

	public function getColUsarios() {
		return $this->colUsarios;
	}

	public function setColUsarios($value) {
		$this->colUsarios = $value;
	}

    public function verificarUsuario($nombreUsuario, $password){
        $colUsarios = $this->getColUsarios();
        $encontrado = false;
        foreach ($colUsarios as $user) {
            if ($user['usuario'] === $nombreUsuario && $user['clave'] === $password) {
                $encontrado = true;
                break;
            }
        }
        return $encontrado;
    }

}