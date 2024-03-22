<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'attribute';

    protected $fillable = [
        'type_attribute',
        'name',
        'description'
    ];

    public function productAttribute() {
        return $this->hasMany(ProductAttribute::class,'attribute_id','attribute_id');
    }
}
