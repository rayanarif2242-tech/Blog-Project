<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Alert;

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
    public function post_details($id)
    {
        $post =Post::find($id);       
        return view('home.post_details',compact('post'));
    }
     public function create_post()
    {
        
        return view('home.create_post');
    }
      public function user_post(Request $request)
    {

        $user=Auth()->user();
        $userid=$user->id;
        $username=$user->name;
        $usertype=$user->usertype;



          $post = new Post;       
          $post->title= $request->title;
          $post->description= $request->description;
          $post->user_id= $userid;
          $post->name=$username;
          $post->usertype=$usertype;
           $post->post_staus='pending';

           


          $image=$request->image;
          if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();
                 $request->image->move('postimage',$imagename);
                 $post->image=$imagename;
            }

                 $post->save();
                 Alert::success('congrats','You have Added the data Successfully');
                 return redirect()->back();
    }

                
               public function my_post()
                {
                    $user=Auth::user();
                    $userid=$user->id;
                    $data= Post::where('user_id','=',$userid)->get();
                    return view('home.my_post',compact('data'));
                }





}