<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = ['time', 'drug_id'];

    // timeに紐づくdrug
    public function drug()
    {
        return $this->belongsTo(Drug::class);
    }

    // timeに紐づくhistory
    public function histories()
    {
        return $this->hasMany(History::class);
    }
}
