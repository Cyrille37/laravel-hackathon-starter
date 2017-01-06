<?php

namespace App\Http\Controllers;

use Watson\Validating\ValidationException;
use App\Foo ;

class PageController extends Controller {
	
	/**
	 * Return the homepage view
	 * 
	 * @return mixed
	 */
	public function home() {
		return view ( 'welcome' );
	}

	/**
	 * Return the api dashboard view listing available apis
	 * 
	 * @return mixed
	 */
	public function api() {
		return view ( 'apidashboard' );
	}

	/**
	 * Return the contact page view
	 * 
	 * @return mixed
	 */
	public function contact() {
		return view ( 'contact' );
	}

	/**

	 * @param \App\FooService $fooService
	 * @return string
	 */
	public function foo01(\App\FooService $fooService) {

		$foo = new Foo();
		try {
			$fooService->save($foo);
		}
		catch ( ValidationException $ex )
		{
			return view( 'foo' )
				->withErrors( $foo->getErrors() );
		}
		return view ( 'foo' );
	}

}
