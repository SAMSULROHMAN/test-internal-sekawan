<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Driver;
use App\Model\Kendaraan;

class Request extends Model
{
    protected $guarded = [];

    public function drivers()
    {
        return $this->belongsTo(Driver::class);
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
