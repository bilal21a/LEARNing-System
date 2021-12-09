<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id','id', 'mon_start','mon_end','tue_start','tue_end','wed_start','wed_end','thu_start','thu_end','fri_start','fri_end','sat_start','sat_end','sun_start','sun_end'
 ];

    public function HrsTime()
    {
        return $this->belongsTo('App\Models\HrsTime');
    }
}
