<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailPurchaseInvoice extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'detail_purchase_invoice';

    protected $fillable = [
        'product_price',
        'quantity',
        'purchase_invoice_id',
        'detail_product_id',
    ];

    public function detailProduct() {
        return $this->belongsTo(DetailProduct::class,'detail_product_id');
    }

    public function purchaseInvoice() {
        return $this->belongsTo(PurchaseInvoice::class,'purchase_invoice_id');
    }
}
