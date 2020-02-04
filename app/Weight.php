<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    //
    protected $fillable = ['weight'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
