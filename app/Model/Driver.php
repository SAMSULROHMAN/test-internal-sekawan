<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Request;

class Driver extends Model
{
    protected $guarded = [];

    public function request()
    {
        return $this->hasMany(Request::class);
    }
}

