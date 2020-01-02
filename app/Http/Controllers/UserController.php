<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Profile Page";
        $data = User::all();
        return view('users/home', [
            "judul" => $title,
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Profile Page";
        $data = User::where('id', '=', $id)->first();

        return view('users/home', [
            "judul" => $title,
            "data" => $data
        ]);
    }

    public function indexManage()
    {
        $title = "Manage User Page";
        $data = DB::table('users')->paginate(10);
        return view('users/manage', [
            "judul" => $title,
            "data" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Profile Update Page";
        $data = DB::table('users')->where('id', '=',$id)->first();
        return  view('users/update',[
            "judul" => $title,
            "data" => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        DB::table('users')->where('id','=',$req->id)->update([
            "name"=> $req->name,
            "email"=> $req->email,
            "address"=> $req->address,
            "password"=> Hash::make($req['password']),
            "birthday"=> $req->birthday,
            "role"=> $req->role,
            "picture" => $req->picture
        ]);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
