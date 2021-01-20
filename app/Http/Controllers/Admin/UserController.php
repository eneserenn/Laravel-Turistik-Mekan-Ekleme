<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datalist = User::all();
         return view('admin.home.user',compact('datalist'));
    }
    public function user_roles($id)
    {
         $user = User::find($id);
         $roles = Role::all();
         return view('admin.home.user_role_add',compact('user','roles'));
    }
    public function add_user_role(Request $request)
    {
         DB::table('role_user')->insert([
            'role_id' => $request->role_id,
            'user_id' => $request->user_id
         ]);
         return back();
    }
    public function delete_user_role($user_id,$role_id)
    {
         DB::table('role_user')->where('user_id',$user_id)->where('role_id',$role_id)->delete();
         return back();
    }
    public function edit_user($id)
    {
        $user = User::find($id);
        return view('admin.home.edit_user',compact('user'));
    }
    public function update_user(Request $request)
    {
        $updatable_user = User::find($request->user_id);
        $updatable_user->name = $request->name;
        $updatable_user->address = $request->address;
        $updatable_user->email = $request->email;
        $updatable_user->phone = $request->phone;
        if($request->image != null) {
        $updatable_user->profile_photo_path = Storage::putFile('profile-photos',$request->image);
    }
        $updatable_user->save();
        return redirect(route('userlist'));
    }
    public function delete_user($id)
    {    User::find($id)->delete();
         DB::table('role_user')->where('user_id',$id)->delete();
         return back();
    }
    public function show_user($id)
    {      $user = User::find($id);
        $roles = Role::all();
        return view('admin.home.show_user',compact('user','roles'));
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
