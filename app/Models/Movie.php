<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function genre()
    {
        return $this->hasOne(Genre::class);
    }
}
