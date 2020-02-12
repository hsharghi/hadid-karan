<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machinery extends Model
{
    protected $guarded = [];

    const MACHINERY_TYPES = ['CNC', 'MANUAL', 'MC'];

    public function getTypeAttribute($value)
    {
        return strtoupper($value);
    }
}
