<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Photo;
class AdminController extends Controller
{
    public function show(){
        if (auth()->guest()){
            abort(403);
        }

    if (auth()->user()->email !== 'bebra@gmail.com'){
        return redirect('/');
    }
    $users = User::latest();
    if(request('search')){
        $users->where('name', 'like', '%' . request('search') . '%');
    }
    return view('admin.welcome',[
    'users' => $users->get()
    ]);
}
    public function find($id){
    if (auth()->guest()){
        abort(403);
    }
        
    if (auth()->user()->email !== 'bebra@gmail.com'){
        return redirect('/');
    }
    if (auth()->guest()){
        return redirect('/login');
    }
    return view('admin.user',[
        'user' => User::find($id),
        'photos' => User::find($id)->photo
    ]);
}
}
