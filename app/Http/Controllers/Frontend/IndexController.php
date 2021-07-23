<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


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
            return redirect()->route('login')->with('success','Successfully Registered');
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

       public function user()
       {
           $user=Auth::user();
   
               return view('frontend.layouts.user',compact('user'));
   
       }

       public function update(Request $request,$id)
    {
    
        $user=User::where('id',$id)->update(['full_name'=>$request->full_name,'phone'=>$request->phone,'address'=>$request->address]);
        if($user)
        {
            return back()->with('sucess','updated successfully');
        }
        else{
            return back()->with('error','something went wrong');
        }
    }

    public function cpass(Request $request, $id)
    {
        $this->validate($request,[
            'oldpassword'=>'nullable|min:4',
            'newpassword'=>'nullable|min:4',
        ]);

        $hashpassword=Auth::user()->password;

        if(Hash::check($request->oldpassword,$hashpassword))
        {
            if(!Hash::check($request->newpassword,$hashpassword))
            {
                User::where('id',$id)->update(['password'=>Hash::make($request->newpassword)]);

                return redirect()->route('index')->with('success','Successfully Registered');
            }
            else{
                return back()->with('error','new password can not be same with old password');
            }
        }
        else{
            return back()->with('error','old password does not match');
        }
    }

    public function chpass()
    {
        $user=Auth::user();

            return view('frontend.layouts.uppass',compact('user'));

    }

    public function summ()
    {

            return view('frontend.layouts.summary');

    }

}