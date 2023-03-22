<?php

namespace App\Http\Controllers;

use App\Models\PostUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from post_user');

        return view('list', ['users' => $users]);
    }

    public function DELETE_POST($id)
    {
        $delete = DB::table('post_user')->delete($id);

        return redirect('/');
    }


    public function EDIT_POST($id)
    {
        $data = DB::table('post_user')
            ->select('id', 'firstName', 'lastName', 'email', 'phone_number')
            ->where('id', $id)
            ->get();

        return view('updatepost', ['data' => $data]);
    }

    public function UPDATE_POST(Request $request, $id)
    {


        $data = DB::table('post_user')
            ->where('id', $id)
            ->update(['firstName' => $request->firstName, 'lastName' => $request->lastName, 'email' => $request->email, 'phone_number' => $request->phone_number]);

        return redirect('/');
    }
}
