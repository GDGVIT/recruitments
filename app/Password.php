<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'activation_code',
        'status'

         ];


    public function User()
    {
        return $this->belongsTo('App\User');
    }


}
