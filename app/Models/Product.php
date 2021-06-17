<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [ //$fillable la mang chua cac truong co the thay doi du lieu khi create hoac update
        'name', 
        'price', 
        'detail'
    ];
}
