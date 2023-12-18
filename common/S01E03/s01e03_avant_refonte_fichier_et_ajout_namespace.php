<?php

interface I{
	public function hello();
}


interface I2{
	public function world();
}

class A implements I, I2 
{

	private $name="A";
	public static $sname;
    
	function __construct()
	{
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

	public static function getNameSelf(){
		return self::$sname;
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
			$liste=[
				$value=> $value,
			];		
		}
		return $liste;
	}
	

}


class B extends A
{
	private $name="B";


	public function hello(){
		return "hello B ";
	}


}


class C 
{
	private $name="C";

	public function hello()
	{
		return "hello C ";
	}

	public function world(){
		return "world C\n";
	}
}


/**
 * 
 */
class promotion
{
	
	function __construct(private string $first, private string $second){}
}







new A();
$a = new A();
echo ($a->hello());

A::$sname = "truc";
echo(A::getNameSelf());

$arrow = function($input) { return "hello ".$input ;};
echo ($arrow("chondinde"));

$promo = new promotion("truc","marrant");



