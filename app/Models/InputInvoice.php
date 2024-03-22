<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InputInvoice extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'input_invoice';

    protected $fillable = [
        'input_date',
        'total_price',
        'provider_id',
        'employee_id'
    ];

    public function detailInputInvoice() {
        return $this->hasMany(DetailInputInvoice::class,'detail_input_invoice_id','detail_input_invoice_id');
    }

    public function employee() {
        return $this->belongsTo(Employee::class,'employee_id');
    }

    public function provider() {
        return $this->belongsTo(Provider::class,'provider_id');
    }
}
