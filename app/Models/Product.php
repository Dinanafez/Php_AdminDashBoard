<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'name',
        'description',
        'price',
        'category_id',
        'image_url',
        'quantity'
    ];
    public function category(){
        return $this->belongsTo(Category::class) ;
    }
    

}
