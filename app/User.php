<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable, ShinobiTrait;

    protected $guarded = [ 'id', 'state' ];

    protected $hidden  = [ 'password', 'remember_token' ];

    protected $table = 'users';


    // Relaciones

    // Users - Roles
    public function roles(){
    	return $this->belongsToMany('App\Role');
    }

    



}
