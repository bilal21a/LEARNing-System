<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrsTime extends Model
{
    use HasFactory;

    public function schedule()
    {
        return $this->hasOne('App\Models\Schedule');
    }
}
