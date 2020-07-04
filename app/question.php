<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['title', 'fill'];

    public function answer()
    {
        // return $this->belongsTo(answer::class);
        return $this->hasMany(answer::class);
    }
}
