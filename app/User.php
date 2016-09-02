<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','regno','why_gdg','experience','linkedin','github','behance','selected','marks','contact'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function submissions()
    {
        return $this->hasMany('App\Submission');
    }
    public function problemStatements()
    {
        return $this->hasMany('App\ProblemStatement');
    }
    public function password()
    {
        return $this->belongsTo('App\Password');
    }
}
