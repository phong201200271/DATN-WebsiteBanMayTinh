<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailProduct extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'detail_product';

    protected $fillable = [
        'name',
        'thumbnail',
        'description',
        'status',
        'product_id'
    ];

    public function product() {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function productAttribute() {
        return $this->hasMany(ProductAttribute::class,'detail_product_id','detail_product_id');
    }

    public function productPrice() {
        return $this->hasMany(ProductPrice::class,'detail_product_id','detail_product_id');
    }

    public function detailInputInvoice() {
        return $this->hasMany(DetailInputInvoice::class,'detail_product_id','detail_product_id');
    }

    public function detailPurchaseInvoice() {
        return $this->hasMany(DetailPurchaseInvoice::class,'detail_product_id','detail_product_id');
    }
}
