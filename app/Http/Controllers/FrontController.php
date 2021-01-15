<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Place;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
        $place = Place::find($request->id);
        $setting = Setting::first();
        return view('home.place_detail',compact('place','setting'));
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
    public function  sharedplaces(){
        $setting = Setting::first();
        $places = Place::where('user_id',Auth::user()->id)->get();
        return view('home.user_place_show',compact('places','setting'));
     
    }
    public function  deleteplaceuser($id){
       Place::find($id)->delete();
        return back();
     
    }
    public function  addplaceuser(){
        $setting = Setting::first();
        $categories = Category::get();
        return view('home.addplaceuser',compact('setting','categories'));
     
    }
    public function  createplaceuser(Request $request){
        $place = new Place;
        $place->category_id = $request->category_id;
        $place->title = $request->title;
        $place->keywords = $request->keywords;
        $place->description = $request->description;
        if ($request->image != null) {
            $place->image = Storage::putFile('images', $request->image);
        }
        $place->slug = $request->slug;
        $place->detail = $request->detail;
        $place->point = $request->point;
        $place->user_id = $request->user_id;
        $place->country = $request->country;
        $place->entry_payment = $request->entry_payment;
        $place->status = 'false';
        $place->save();
        return redirect(route("sharedplaces"));
     
    }
    public function  editplaceuser($id){
        $setting = Setting::first();
        $categories = Category::get();
        $editplace=Place::find($id);
        return view('home.edituserplace',compact('setting','categories','editplace'));
     
    }
    public function  changeplaceuser(Request $request){
        $place = Place::find($request->id);
        $place->category_id = $request->category_id;
        $place->title = $request->title;
        $place->keywords = $request->keywords;
        $place->description = $request->description;
        if ($request->image != null) {
            $place->image = Storage::putFile('images', $request->image);
        }
        $place->slug = $request->slug;
        $place->detail = $request->detail;
        $place->point = $request->point;
        $place->user_id = $request->user_id;
        $place->country = $request->country;
        $place->entry_payment = $request->entry_payment;
        $place->status = $request->status;
        $place->save();
        return redirect(route("sharedplaces"));
     
    }
   public function faq(){
       $setting = Setting::first();
       $faqs = Faq::where('status','true')->orderBy('position','asc')->get();
       return view('home.faq_page',compact('faqs','setting'));
   }
}
