<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
  
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        if ($user === null) { return redirect()->route('home.index');}

        $posts = Post::where('user_id',$id)->orderBy('created_at','desc')->get();


        return Inertia::render('User'.)
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }
}
