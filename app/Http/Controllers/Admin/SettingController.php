<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Setting::get()->first();
        if(!$data){
            $data=new Setting;
            $data->title = "setting title";
            $data->save();
            return view('admin.home.setting',['data'=>$data]);
        }else{

            return view('admin.home.setting',['data'=>$data]);
        }
     
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
        //
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
    public function update(Request $request)
    {
        
        if($request->type == "general"){
            
            $data = Setting::get()->first();
            $data -> title = $request -> title;
            $data -> keywords = $request -> keywords;
            $data -> description = $request -> description;
            $data -> company = $request -> company;
            $data -> address = $request -> address;
            $data -> email = $request -> email;
            $data -> fax = $request -> fax;
            $data -> phone = $request -> phone;
            $data ->save();
            return back();

        }
        else if($request->type == "smtp"){
            $data = Setting::get()->first();
            $data -> smtpserver = $request -> smtpserver;
            $data -> smtpemail = $request -> smtpemail;
            $data -> smtppassword = $request -> smtppassword;
            $data -> setport = $request -> setport;
            $data ->save();
            return back();
        }
        else if($request->type == "social"){
            $data = Setting::get()->first();
            $data -> facebook = $request -> facebook;
            $data -> instagram = $request -> instagram;
            $data -> twitter = $request -> twitter;
            $data -> youtube = $request -> youtube;
            $data ->save();
            return back();
        }
        else if($request->type == "aboutus"){
            $data = Setting::get()->first();
            $data -> aboutus = $request -> aboutus;
            $data ->save();
            return back();
        }
        else if($request->type == "contact"){
            $data = Setting::get()->first();
            $data -> contact = $request -> contact;
            $data ->save();
            return back();
        }
        else if($request->type == "references"){
            $data = Setting::get()->first();
            $data -> references = $request -> references;
            $data ->save();
            return back();
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
        //
    }
}
