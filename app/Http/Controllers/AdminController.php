<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {
        $role=Auth::user()->role;
        if($role=='admin'){
            $orders=Order::orderBy('id','DESC')->get();
            return view('backend.orders.index',compact('orders'));
        }
        else{
            return view('error');
        }

    }
    public function destroy($id)
    {
        $data=Order::find($id);
        $data->delete();
        return redirect()->route('detail.index')->with('success delete','successfully deleted order');
    }
}
