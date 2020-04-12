<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{    protected $fillable = ['user_id','entreprise','tlp','email','site','adresse','wilaya','postal','pays','type','logo','description'];
    public function user() {
    	return $this->belongsTo('App\User');
    }
    public function jobs() {
    	return $this->hasMany('App\Job');
    }
}
