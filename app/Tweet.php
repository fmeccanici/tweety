<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;

    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getImageAttribute($value)
    {
        if (isset($value))
        {
            return asset("storage/{$value}");
        }
    }
}
