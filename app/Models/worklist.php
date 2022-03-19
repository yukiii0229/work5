<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worklist extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'password',
        'role'
    ];
}
