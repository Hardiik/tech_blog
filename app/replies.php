<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class replies extends Model
{
    //
    protected $table = 'replies'; 
    protected $fillable=['post_id','user_id','body'];
    protected $hidden=[];

    public function post()
    {
        return $this->BelongsTo('App\post');
    }

    public function user()
    {
        return $this->BelongsTo('App\User');
    }
    
}
