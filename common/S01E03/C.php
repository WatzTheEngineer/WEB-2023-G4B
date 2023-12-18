<?php

namespace PW\Trait;

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
spl_autoload_register();