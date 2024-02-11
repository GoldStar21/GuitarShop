<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    use HasFactory;

    protected $table = 'guitars_table';

    protected $fillable = [

        'brand', 
        'model',
        'type',
        'color',
        'description',
        'price', 
        'stock', 
        'image_path'
    ];
}
