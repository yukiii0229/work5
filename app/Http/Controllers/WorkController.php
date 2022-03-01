<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\brake;
use App\Models\work;

class WorkController extends Controller
{
   public function index()
    {
        return view('work');
    }
}
