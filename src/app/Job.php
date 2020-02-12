<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];

    const JOB_TYPES = ['INQUIRY', 'NORMAL'];

    public function getTypeAttribute($value)
    {
        return strtoupper($value);
    }
}
