<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
