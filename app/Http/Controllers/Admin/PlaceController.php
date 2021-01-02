<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::get();
        return view("admin.home.place",['places'=>$places]);
    }
    public function add()
    {
        $categories = Category::get();
        return view("admin.home.place_add",['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $place = new Place;
        $place->category_id = $request->category_id;
        $place->title = $request->title;
        $place->keywords = $request->keywords;
        $place->description = $request->description;
        $place->image = $request->image;
        $place->slug = $request->slug;
        $place->detail = $request->detail;
        $place->point = $request->point;
        $place->user_id = $request->user_id;
        $place->country = $request->country;
        $place->entry_payment = $request->entry_payment;
        $place->status = $request->status;
        $place->save();
        return redirect(route("adminplacelist"));
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
        $categories = Category::get();
        $editplace = Place::find($id);
        return view('admin.home.place_edit',['editplace'=>$editplace,'categories'=>$categories]);
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
        $place = Place::find($id);
        $place->category_id = $request->category_id;
        $place->title = $request->title;
        $place->keywords = $request->keywords;
        $place->description = $request->description;
        $place->image = $request->image;
        $place->slug = $request->slug;
        $place->detail = $request->detail;
        $place->point = $request->point;
        $place->user_id = $request->user_id;
        $place->country = $request->country;
        $place->entry_payment = $request->entry_payment;
        $place->status = $request->status;
        $place->save();
        return redirect(route("adminplacelist"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Place::find($id)->delete();
        return back();
    }
}
