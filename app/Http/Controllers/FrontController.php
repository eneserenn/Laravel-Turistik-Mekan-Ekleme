<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Message;
use App\Models\Place;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $randomplaces = Place::inRandomOrder()
            ->limit(8) // here is yours limit
            ->get();
            $randomplacestwo = Place::inRandomOrder()
            ->limit(5) // here is yours limit
            ->get();
        $setting =  Setting::first();
        $slider = Place::limit(4)->inRandomOrder()->get();

        return view('home.index', compact('setting', 'slider','randomplaces','randomplacestwo'));
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
    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.aboutus', compact('setting'));
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references', compact('setting'));
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', compact('setting'));
    }
    public function faq()
    {
        $setting = Setting::first();
        return view('home.faq', compact('setting'));
    }
    public function sendMessage(Request $request)
    {
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $message->save();
        Session::flash('message', 'This is a message');
        return redirect()->route('contact')->with('success', 'Mesajınız başarıyla gönderildi');
    }
    public function discover(Request $request)
    {
        $discover = Place::find($request->id);
        echo $discover->title;
    }
    public function categoryelems($id, $slug)
    {
        $setting = Setting::first();
        $category = Category::find($id);
        $categoryelems = Place::where('category_id', $id)->get();
        return view('home.category_elems', compact('categoryelems', 'setting', 'category'));
    }
    public function place_detail($id,$slug){
        $setting = Setting::first();
         $place = Place::find($id);
         return view('home.place_detail',compact('place','setting'));
    }
    public function getproduct(Request $request){
        $data = Place::where('title',$request->search)->first();
        return redirect()->route('placedetail',['id'=>$data->id,'slug'=>$data->slug]);
     
    }
    public function usercomments(){
        $setting = Setting::first();
        $id = Auth::user()->id;
        $comms = Review::where('user_id',$id)->get();
        return view('home.user_comments',compact('comms','setting'));
     
    }
    public function  deletecommentuser($id){
        $deleted = Review::find($id)->delete();
        return back();
     
    }
   
}
