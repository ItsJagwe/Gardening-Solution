<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ServicesController extends Controller
{
    public function show(){
        $services = Service::where(['status'=>'active'])->orderBy('id','DESC')->limit('10')->get();
        return view('frontend.layouts.services',compact(['services']));
    }
}
