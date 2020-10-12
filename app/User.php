<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\verifyEmail;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable=['password','firstName','email','lastName','token'];
   
    public function user_role_obj(){
        return $this->belongsTo('App\UserRole','user_role');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function verified()
	{
			return $this->token === null;
	}
	
	public function sendVerificationEmail()
	{
		$this->notify(new verifyEmail($this));
	}
	
}
