<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function dash()
    {
        return view('backend.layouts.master');
    }
  
}
