<?php
abstract class AbstractA {
	public $commonA = 20;
	
	public abstract function sum($num1, $num2);
	
	public function commonMethod() {
		echo "공통 메서드";
	}
}

class A extends AbstractA {
	public function sum($num1, $num2) {
		echo $this -> commonA;
		
	}
}