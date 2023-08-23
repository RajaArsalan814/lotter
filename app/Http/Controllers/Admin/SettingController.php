<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->except(['logo','_token','id'],$request->all());

       if($request->hasFile('logo'))
       {
           $img = Str::random(20).$request->file('logo')->getClientOriginalName();
           $input['logo'] = $img;
           $request->logo->move(public_path("documents/setting/"), $img);
       }

       if($request->hasFile('home_page_header_image'))
       {
           $img = Str::random(20).$request->file('home_page_header_image')->getClientOriginalName();
           $input['home_page_header_image'] = $img;
           $request->home_page_header_image->move(public_path("documents/setting/"), $img);
       }

       if($request->hasFile('home_page_background_image'))
       {
           $img = Str::random(20).$request->file('home_page_background_image')->getClientOriginalName();
           $input['home_page_background_image'] = $img;
           $request->home_page_background_image->move(public_path("documents/setting/"), $img);
       }

       if($request->hasFile('home_page_body_image'))
       {
           $img = Str::random(20).$request->file('home_page_body_image')->getClientOriginalName();
           $input['home_page_body_image'] = $img;
           $request->home_page_body_image->move(public_path("documents/setting/"), $img);
       }

       if($request->hasFile('footer_logo'))
       {
           $img = Str::random(20).$request->file('footer_logo')->getClientOriginalName();
           $input['footer_logo'] = $img;
           $request->footer_logo->move(public_path("documents/setting/"), $img);
       }

       $add =  Setting::updateOrCreate(['id'=>$request->id],$input);
       if($add)
       {
           return redirect()->back()->with(array('message'=>'Success','type'=>'success'));
       }else{
           return redirect()->back()->with(array('message'=>'Error!  Something went wrong please try again','type'=>'error'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
