<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sherkat extends Model
{
    public function kalas()
    {
        return $this->hasMany(Kala::class);
    }
}
