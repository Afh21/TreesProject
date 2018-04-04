<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $guarded = [ 'id' ];

    protected $table = 'roles';



    // Relaciones

    // Roles - Users
    public function users(){
    	return $this->belongsToMany('App\User');
    }

    // Roles - Permission
    public function permissions(){
    	return $this->belongsToMany('App\Permission');
    }


}
