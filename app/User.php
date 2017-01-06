<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Esensi\Model\Contracts\ValidatingModelInterface;
use Esensi\Model\Traits\ValidatingModelTrait;

class User extends Authenticatable
	implements ValidatingModelInterface
{
	use ValidatingModelTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'username', 'email', 'password', 'provider_id', 'provider',
        'avatar', 'gender', 'location', 'website', 'oauth_token', 'oauth_token_secret'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $rules = [
    	'email' => ['required','email','min:3','unique:users'],
    	'fullname' => ['required', 'min:3']
    ];

    public function getAvatarUrl()
    {
        if(is_null($this->avatar)) {
            return "http://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email))) . "?d=mm&s=40";
        }
        return $this->avatar;
    }

    public function getAccessToken()
    {
        return $this->oauth_token;
    }

    public function getAccessTokenSecret()
    {
        return $this->oauth_token_secret;
    }
}
