<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auths;
use App\Http\Requests\Post;
use App\Models\Category;
use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login_view()
    {   
       /* User::create([
            'name'  => 'Abdoul',
            'email' => 'abdoul51@gmail.com',
            'password' => Hash::make('Abdoul51')
        ]);*/
        return view('Admin.login');
    }
    public function login(Auths $request)
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials))
        {
            session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return  view('Admin.login');
    }
    public function dashboard()
    {
       $posts = ModelsPost::all();
       $categories = Category::all();

       return view('Admin.dashboard',compact('posts','categories'));
    }

}
