<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use HasFactory,SoftDeletes;

    protected $table = 'admin';

    protected $guarded = 'admin';

    protected $fillable = [
        'email',
        'password'
    ];
}
