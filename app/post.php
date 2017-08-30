<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class post extends Model
{
    protected $table = 'posts'; 
    protected $fillable=['category_id','title','body'];
    protected $hidden=[];
  

    use Sluggable;
    
        /**
         * Return the sluggable configuration array for this model.
         *
         * @return array
         */
        public function sluggable()
        {
            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];
        }
   public function user()
    {
      return $this->belongsTo('App\User');
    }
        
    public function reply()
    {
        return $this->hasMany('App\replies');
    }
}
