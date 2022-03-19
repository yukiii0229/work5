<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rest extends Model
{
    use HasFactory;
    protected $fillable=["id","rest_in","work_id","rest_out","rest_time"];
    protected $dates=["rest_in"];
    public function user(){
        return $this->belongTo("App\Models\work");
    }
}
