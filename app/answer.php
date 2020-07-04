<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $fillable = ['id', 'question_id', 'answer_fill'];

    public function question()
    {
        // return $this->hasMany(question::class);
        return $this->belongsTo(question::class);
    }
}
