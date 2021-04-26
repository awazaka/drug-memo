<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['status', 'date', 'time_id'];
    
    // historyに紐づくtime
    public function time()
    {
        return $this->belongsTo(Time::class);
    }
}
