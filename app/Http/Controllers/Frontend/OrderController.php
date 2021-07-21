<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    public function ord($id){
        {
            $serv=Service::find($id);
            if($serv)
            {
                return view('frontend.layouts.order',compact('serv'));
            }
            else{
                return back()->with('error','Data not found');
            }
    }
}
    public function store(Request $request){
        $this->validate($request,[
            'flat'=>'string|required',
            'area'=>'string|required',
            'landmark'=>'string|required',
            'pincode'=>'nullable|numeric',
            'date'=>'string|required',
            'pack_type'=>'string|required',
            'phone'=>'nullable|numeric',
            
        ]);
        $data=$request->all();
 
        $status=Order::create($data);
        if($status)
        {
            return view('frontend.layouts.index')->with('success','successfully created order');
        }
        else{
            return back()->with('error','something went wrong');
        }
    }
}