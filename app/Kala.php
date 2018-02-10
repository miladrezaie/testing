<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kala extends Model
{
    protected $fillable=['name','mony'];

    public function sherkatha()
    {
        return $this->belongsTo(Sherkat::class);
    }
}
