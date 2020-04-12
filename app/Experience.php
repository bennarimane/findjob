<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    
    protected $fillable = ['intitule', 'lieu','debut', 'fin','description'];
    public function cv() {
    	return $this->hasOne("App\Cv");
    }
}
