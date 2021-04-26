<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Drug;
use App\User;
use App\Time;

class Drug extends Model
{
    
    protected $fillable = ['name', 'user_id'];
    
    // drugに紐づくuser
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // drugに紐づくtime
    public function times()
    {
        return $this->hasMany(Time::class);
    }
}
