<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.index');
    }

    public function registerSubmit(Request $request){
        $this ->validate($request,[
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'min:4|required|confirmed',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        if($check){
            return redirect()->route('index')->with('success','Successfully Registered');
        }
        else{
            return back()->with('error','Please Check Your Credentials');
        }
    }
        
       private function create(array $data){
            return User::create([
                'full_name'=>$data['full_name'],
                'email'=>$data['email'],
                'password'=>Hash::make($data['password']),
            ]);
       }

}

