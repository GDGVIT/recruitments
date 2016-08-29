<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProblemStatement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'domain','problem_statement','display','comments','leve;','category'
         ];



    public function user()
    {
        return $this->belongsTo('App\ProblemStatement');
    }
    public function submissions()
    {
        return $this->hasMany('All\Submission');
    }
    
}
