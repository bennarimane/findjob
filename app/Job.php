<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    
    public function company() {
    	return $this->hasOne("App\Company");
    }
    public function cv() {
    	return $this->hasMany("App\Cv");
    }
    public function favorite_to_users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
  
}
