<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brake extends Model
{
    
        use HasFactory;
        protected $fillable=["brake_id","brake_in","work_id"];
        protected $dates=["brake_in"];
        public function user(){
            return $this->belongTo("App\Models\work");
        }
    
}
