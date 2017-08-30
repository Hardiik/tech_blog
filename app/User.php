<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; 
    
    public function post()
    {
        return $this->hasMany('App\post');
    }

    public function replies()
    {
        return $this->hasMany('App\replies');
    }
    
  
}
