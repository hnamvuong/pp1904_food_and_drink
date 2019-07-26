<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'id',
        'name',
        'slug',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    } 
}
