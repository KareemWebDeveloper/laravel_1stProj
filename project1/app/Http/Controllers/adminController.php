<?php

namespace App\Http\Controllers;

use App\Models\admin;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function showdata()
    {
        $admins = admin::get();
        return view('admin', compact('admins'));
    }
    function gotoCreate()
    {
        return view('create');
    }
    function add(Request $request){
        $admins = admin::create([
            'name' => $request->fname,
            'email'=> $request->mail,
            'password'=> $request->pass,
        ]);
        return redirect()->route("admin.index");
    }
    function deleteUser($id){
        admin::find($id)->delete();
        return redirect()->route("admin.index");
    }
    function goToUpdate($id){
        $admins = admin::find($id);
        return view('update', compact('admins'));
    }
    function storeData($id , Request $request){
        $updatedAdmin = admin::find($id);
        $updatedAdmin->update([
            'name'=> $request->fname,
            'email'=> $request->mail,
            'password'=> $request->pass,
        ]);
        return redirect()->route("admin.index");
    }
}
