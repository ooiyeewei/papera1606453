<?php

namespace App;

use App\Candidate;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = [
        'name',
    ];

    public function candidates() 
    {
        return $this->hasMany(Candidate::class);
    }
}
