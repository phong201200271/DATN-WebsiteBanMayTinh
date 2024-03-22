<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'employee';

    protected $fillable = [
        'name'
    ];

    public function purchaseInvoice() {
        return $this->hasMany(PurchaseInvoice::class,'employee_id','employee_id');
    }

    public function inputInvoice() {
        return $this->hasMany(InputInvoice::class,'employee_id','employee_id');
    }
}
