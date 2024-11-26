<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Appointment extends Model
{
    use HasFactory,SoftDelets;
    protected $fillable = [
        'first_name',
        'last_name',
        'appointment_date',
        'appointment_time',
        'phone',
        'message',
    ];
}
