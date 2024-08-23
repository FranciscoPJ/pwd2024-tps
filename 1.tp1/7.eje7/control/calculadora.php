<?php

class calculadora{
    private $numero1;
    private $numero2;

	public function __construct() {

		$this->numero1 = null;
		$this->numero2 = null;
	}

	public function getNumero1() {
		return $this->numero1;
	}

	public function setNumero1($value) {
		$this->numero1 = $value;
	}

	public function getNumero2() {
		return $this->numero2;
	}

	public function setNumero2($value) {
		$this->numero2 = $value;
	}

	public function suma($num1, $num2){
		return $num1 + $num2;
	}
    
	public function resta($num1, $num2){
		return $num1 - $num2;
	}

	public function multiplicacion($num1, $num2){
		return $num1 * $num2;
	}
}
?>