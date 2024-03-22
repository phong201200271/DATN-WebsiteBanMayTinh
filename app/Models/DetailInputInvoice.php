<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailInputInvoice extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'detail_input_invoice';

    protected $fillable = [
        'product_price',
        'quantity',
        'detail_product_id',
        'input_invoice_id'
    ];

    public function detailProduct() {
        return $this->belongsTo(DetailProduct::class,'detail_product_id');
    }

    public function inputInvoice() {
        return $this->belongsTo(InputInvoice::class,'input_invoice_id');
    }
}
