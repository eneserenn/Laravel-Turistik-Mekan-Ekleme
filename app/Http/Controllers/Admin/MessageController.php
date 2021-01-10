<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function messages()
    {
        $messages = Message::get();
        return view('admin.home.message', compact('messages'));
    }
    public function messagedelete($id)
    {
        Message::find($id)->delete();
        return redirect()->route('messages')->with('info','başarıyla silindi');
    }
    public function messageedit($id)
    {
        $message = Message::find($id);
        $message -> status = "true";
        $message->save();
        return view('home.message_detail',compact('message'));

    }
    public function adminnote(Request $request)
    {
        $message = Message::find($request->id);
        $message -> adminnote = $request->adminnote;
        $message->save();
        return redirect()->route('adminmessageedit',['id'=>$request->id])->with('success',"Admin notu eklendi"); 

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
