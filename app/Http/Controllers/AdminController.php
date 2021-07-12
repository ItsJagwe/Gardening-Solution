<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {
        $role=Auth::user()->role;
        if($role=='admin'){
            return view('backend.layouts.index');
        }
        else{
            return view('error');
        }
    }
    public function customer()
    {
        $role=Auth::user()->role;
        if($role=='customer'){
            return view('frontend.layouts.index');
        }
        else{
            return view('error');
        }
    }
}
