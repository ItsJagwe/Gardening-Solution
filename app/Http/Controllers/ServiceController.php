<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::orderBy('id','DESC')->get();
        return view('backend.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'string|required',
            'photo' => 'required',
            'price' => 'required',
            'status' => 'nullable|in:active,inactive',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->input('title'));
        $slug_count=Service::where('slug',$slug)->count();
        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug']=$slug;

        $status=Service::create($data);
        if($status)
        {
            return redirect()->route('service.index')->with('success','successfully created Service');
        }
        else{
            return back()->with('error','something went wrong');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=Service::find($id);
        if($services)
        {
            return view('backend.service.edit',compact('services'));
        }
        else{
            return back()->with('error','Data not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $service=Service::find($id);
        if($service)
        {
        $this->validate($request,[
            'title' => 'string|required',
            'photo' => 'required',
            'price' => 'required',
            'status' => 'nullable|in:active,inactive',
        ]);
        $data=$request->all();

        $status=$service->fill($data)->save();
        if($status)
        {
            return redirect()->route('service.index')->with('success','successfully Updated Service');
        }
        else{
            return back()->with('error','something went wrong');
        }
    }
    else{
        return back()->with('error','Data not found');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Service::find($id);
        $data->delete();
        return redirect()->route('service.index')->with('success delete','successfully deleted service');
    }
}
