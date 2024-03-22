<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'product';

    protected $fillable = [
        'name',
        'type_product',
        'category_id',
        'brand_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function comment() {
        return $this->hasMany(Comment::class,'product_id','product_id');
    }

    public function detailProduct() {
        return $this->hasMany(DetailProduct::class,'product_id','product_id');
    }
}
