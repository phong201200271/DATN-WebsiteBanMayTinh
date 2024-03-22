<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'comment';

    protected $fillable = [
        'content',
        'comment_time',
        'comment_reply_id',
        'user_id',
        'product_id'
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function product() {
        return $this->belongsTo(Product::class,'product_id');
    }
}
