<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductAttribute extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'product_attribute';

    protected $fillable = [
        'detail_product_id',
        'attribute_id'
    ];

    public function detailProduct() {
        return $this->belongsTo(DetailProduct::class,'detail_product_id');
    }

    public function attribute() {
        return $this->belongsTo(Attribute::class,'attribute_id');
    }
}
