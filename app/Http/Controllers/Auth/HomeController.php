<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        if (!Auth::id()) {
            return redirect('/');
        }

        $usertype = Auth::user()->usertype;

        if ($usertype == 'user') {
            $post = Post::all();
            return view('home.homepage', compact('post'));
        }

        if ($usertype == 'admin') {
            return view('admin.index');
        }

        return redirect()->back();
    }

    public function homepage()
    {
        $post = Post::all();
        return view('home.homepage', compact('post'));
    }
}