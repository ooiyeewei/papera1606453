<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'name',
    ];

    public function party() 
    {
        return $this->belongsTo(Party::class);
    }
}
