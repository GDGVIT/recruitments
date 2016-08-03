<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'problem_id','user_id','marks','updated_at','url'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
