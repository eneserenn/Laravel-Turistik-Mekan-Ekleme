<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        
        DB::table('categories')->insert([
            'title'=> $request->title,
            'parent_id'=> $request->parent_id,
            'keywords'=> $request->keywords,
            'description'=> $request->description,
            'slug'=> $request->slug,
            'status'=> $request->status,
        ]);
        return redirect(route("admincategorylist"));
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
        $categories= DB::table('categories')->get()->where('parent_id',0);
        $edit_category=Category::find($id);
        return view('admin.home.category_edit',['edit_category'=> $edit_category,'parents'=>$categories]);
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
        $edit_category = Category::find($id);
 
      
        $edit_category->title = $request->title;
        $edit_category->parent_id = $request->parent_id;
        $edit_category->keywords = $request->keywords;
        $edit_category->description = $request->description;
        if ($request->image != null) {
            $edit_category->image = Storage::putFile('images', $request->image);
        }
        $edit_category->slug = $request->slug;
        $edit_category->status = $request->status;
        $edit_category->save();

        return redirect(route("admincategorylist"));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("categories")->where("id",$id)->delete();
        return back();
    }
    public function list(){
        $categories = DB::select('select * from categories');
        return view('admin.home.category',['categories'=>$categories]);
    }
    public function add(){
        $parents = DB::table('categories')->get()->where('parent_id',0);
        return view('admin.home.category_add',['parents'=>$parents]);
    }

}
