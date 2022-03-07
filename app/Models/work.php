<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Work extends Model
{
    use HasFactory;

    protected $fillable=["user_id","work_in","date"];
    protected $dates=["work_in"];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    // public function rest(){
    //     return $this->hasMany("App\Models\brake");
    // }
}