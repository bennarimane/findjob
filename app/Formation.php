<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = ['titre','diplome','domaine','etablissement', 'lieu','debut', 'fin','description','type'];
    public function cv() {
    	return $this->hasOne("App\Cv");
    }
}
