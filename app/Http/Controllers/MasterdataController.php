<?php

namespace App\Http\Controllers;

use App\Models\User_level;
use Illuminate\Http\Request;

class MasterdataController extends Controller
{

    public function index_user()
    {
        $data = User_level::all();
        return view('masterdata.user.index', compact('data'));
    }

    public function save_user(Request $request)
    {
        $request->validate([
            'user_level' => 'required'
        ]);

        User_level::create($request->all());
        return redirect('/user')->with('success', 'Data berhasil ditambahkan.');
    }

}
