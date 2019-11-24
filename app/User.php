<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Permission;

class User extends Model
{

	use Notifiable;

    protected $table = "users";

	protected $fillable = [
		'ut_nome', 'ut_tipo_doc', 'ut_numero','ut_contacto','ut_morada','email','password'
	];


	protected $hidden = [
		'password', 'remember_token',
	];

	public function terras(){
	    return $this->hasMany('App\Terra');
    }

    /**
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*public function roles()
    {
    	return $this->belongsToMany('App\Role');
    }

    /*public function hasPermission(Permission $permission)
    {
    	return $this->hasAnyRole($permission->roles);
    }

    public function hasAnyRole($roles){

    	if(is_array($roles) || is_object($roles)){
    		/*foreach ($roles as $role) {
    			//var_dump($role->nome);
                //dd($role->nome);
                if ($this->roles->contains('nome', $role->nome))
                {
    			 return true;
                }

    		}
            return false;

            return !! $roles->intersect($this->roles)->count();
    	}

    	return $this->roles->contains('nome', $roles);
    }*/

}
