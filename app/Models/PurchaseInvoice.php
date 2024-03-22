<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseInvoice extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'purchase_invoice';

    protected $fillable = [
        'purchase_date',
        'total_price',
        'status',
        'user_id',
        'employee_id'
    ];

    public function detailPurchaseInvoice() {
        return $this->hasMany(DetailPurchaseInvoice::class,'purchase_invoice_id','purchase_invoice_id');
    }

    public function employee() {
        return $this->belongsTo(Employee::class,'employee_id');
    }

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
}
