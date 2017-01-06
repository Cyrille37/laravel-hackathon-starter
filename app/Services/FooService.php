<?php

namespace App\Services ;


class FooService {

	public function __construct()
	{
		error_log( __METHOD__ );
	}
	
	public function save( Foo $foo )
	{
		$foo->saveOrFail();
		
	}
}
