<?php

namespace PW\Class;

use PW\Interface\I;
use PW\Interface\I2;

class A implements I, I2 
{

	private $name="A";
	public $A;
    
	function __construct($A)
	{
		$this->A = $A;
        print("je suis le A ou un de ses heritages\n");
	}
    #[R310Attribute]
	public function hello()
	{
		return "hello A ";
	}
    #[R310Attribute]
	public function world(){
		return "world A\n";
	}
    #[R310Attribute]
	public function getName(){
		return $this->name;
	}

	public function __toString()  {
		return $this->A;
	}
	#exercice ajout d'un attribut
	#[R310Attribute]
	public function r310(){
		throw new Exception("les cochon d'inde ont fait tout péter !", 2);
		
	}
    #[R310Attribute]
	public function countTo10(){
		for ($i=0; $i < 11 ; $i++) { 
			yield $i;
		}
	}
    #[R310Attribute]
	public function displayCountTo10(){
		$gen = $this->countTo10();
		

		foreach ($gen as $value) {
			echo $value;
		}
		
	}
	

}
