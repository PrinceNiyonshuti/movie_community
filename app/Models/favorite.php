<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    public function movie()
    {
        return $this->hasMany(Movie::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
