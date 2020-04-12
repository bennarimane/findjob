<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competance extends Model
{
    protected $fillable = ['description'];
    public function cv() {
    	return $this->hasOne("App\Cv");
    }
}
