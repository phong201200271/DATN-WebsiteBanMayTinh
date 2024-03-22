<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'provider';

    protected $fillable = [
        'name'
    ];

    public function inputInvoice() {
        return $this->hasMany(InputInvoice::class,'provider_id','provider_id');
    }
}
