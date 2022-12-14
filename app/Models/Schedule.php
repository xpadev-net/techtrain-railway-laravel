<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $dates = ['start_time','end_time'];
    public function reservation()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
