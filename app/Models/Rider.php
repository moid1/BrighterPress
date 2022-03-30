<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    protected $guarded = [];

    public function getcitiesAttribute($value)
    {
        return @unserialize($value) !== false ? unserialize($value) : $value;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
