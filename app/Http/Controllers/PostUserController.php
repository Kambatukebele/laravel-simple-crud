<?php

namespace App\Http\Controllers;

use App\Models\PostUser;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
    public function index()
    {
        return view('postuser');
    }

    public function POST_USER(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone_number' => 'required'
        ]);

        $post = new PostUser();
        $post->firstName =  $request->firstName;
        $post->lastName =  $request->lastName;
        $post->email =  $request->email;
        $post->phone_number =  $request->phone_number;

        $post->save($validated);

        return redirect('/');
    }
}
