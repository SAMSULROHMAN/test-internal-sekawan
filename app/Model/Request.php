<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Request extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
