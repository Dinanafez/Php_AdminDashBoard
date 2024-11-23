<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copoun extends Model
{
    use HasFactory;
    protected $table='copouns';
    protected $fillable=[
        'name',
        'discount',
        'expiry_date'
    ];
}
