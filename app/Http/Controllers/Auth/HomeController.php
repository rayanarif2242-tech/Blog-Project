<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Alert;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostInReviewMail;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
{
    $post = Post::where('post_staus','=','active')->get();

    if (!Auth::id())
    {
        return view('home.homepage', compact('post'));
    }

    $usertype = Auth::user()->usertype;

    if ($usertype == 'user')
    {
        return view('home.homepage', compact('post'));
    }
    elseif ($usertype == 'admin')
    {
        return view('admin.index');
    }
    else
    {
        return redirect()->back();
    }
}


    public function homepage()
    {
        $post = Post::where('post_staus','=','active')->get();
        return view('home.homepage', compact('post'));
    }
    public function post_details($uuid)
{
    $post = Post::where('uuid', $uuid)->firstOrFail();
    return view('home.post_details', compact('post'));
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

               $post->uuid = (string) Str::uuid();



          $image=$request->image;
          if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();
                 $request->image->move('postimage',$imagename);
                 $post->image=$imagename;
            }

                 $post->save();
                 Mail::to($user->email)->send(new PostInReviewMail($post));

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
                     
               public function my_post_del($uuid)
{
    $data = Post::where('uuid', $uuid)->firstOrFail();
    $data->delete();

    return redirect()->back()->with('message', 'Post deleted successfully');
}
                public function post_update_page($uuid)
{
    $data = Post::where('uuid', $uuid)->firstOrFail();
    return view('home.post_page', compact('data'));
}
                 public function update_post_data(Request $request, $uuid)
{
    $data = Post::where('uuid', $uuid)->firstOrFail();

    $data->title = $request->title;
    $data->description = $request->description;

    $image = $request->image;

    if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('postimage', $imagename);
        $data->image = $imagename;
    }

    $data->save();

    return redirect()->back()->with('message', 'Post Updated Successfully');
}



}