<?php
namespace PW\Class;

use PW\Class\A;

class B extends A
{
	private $name="B";
	

	public function hello(){
		return "hello B ";
	}

	public static function helloMethod() {
		return "hello";
	}

}
