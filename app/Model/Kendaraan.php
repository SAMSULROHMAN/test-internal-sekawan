<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Request;

class Kendaraan extends Model
{
    protected $table = 'kendaraan';
    protected $guarded = [];

    public function request()
    {
        return $this->hasMany(Request::class);
    }
}
