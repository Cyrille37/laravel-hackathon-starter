<?php

namespace App;

use Esensi\Model\Contracts\ValidatingModelInterface;
use Esensi\Model\Traits\ValidatingModelTrait;
use Illuminate\Database\Eloquent\Model as Model;

class Foo extends Model implements ValidatingModelInterface {
	
	use ValidatingModelTrait;

	protected $rules = [
		'email' => ['required'],
	];
}
