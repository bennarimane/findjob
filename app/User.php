<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Model\Job;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname','phone','customRadio','admin','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 
    public function is_admin()
    {
if($this->admin)
{
    return true;
}
return false;
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
    public function cv()
    {
        return $this->hasMany('App\Cv');
    }
    public function company()
    {
        return $this->hasOne('App\Company');
    }
    public function favorite_jobs()
    {
        return $this->belongsToMany('App\Job')->withTimestamps();
    }
}
