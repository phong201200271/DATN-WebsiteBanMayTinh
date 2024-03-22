<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPrice extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'product_price';

    protected $fillable = [
        'price',
        'start_date',
        'end_date',
        'type',
        'discount',
        'detail_product_id'
    ];

    public function detailProduct() {
        return $this->belongsTo(DetailProduct::class,'detail_product_id');
    }
}
