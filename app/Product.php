<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'productName',
        'categoryName',
        'brandName',
        'description',
        'price',
        'oldPrice',
        'colorName',
        'size',
        'status',
        'quantity',
        'tag',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
    ];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
