<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_user extends Model
{
 

        protected $fillable = [
            'user_id', 'job_id',
        ];
        public function job(){
    
    
            return $this->belongsTo(Job::class);
        }

    
}
