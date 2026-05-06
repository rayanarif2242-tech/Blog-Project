<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Post;


class AdminController extends Controller
{
    public function index()
    {
    if (Auth::id()) {

            $usertype = Auth::user()->usertype;

           
            if ($usertype == 'user') {
                return view('dashboard');
            }

            if ($usertype == 'admin') {
                return view('admin.index');
            }

            return redirect()->back();
        }

        return redirect()->route('login');
    }
    public function post_page()
{
    return view('admin.post_page');
}
  public function add_post(Request $request)
{

$user=Auth()->user();
$userid= $user->id;
$name= $user->name;
$usertype= $user->usertype;
  $post=new Post;
  $post->title= $request->title;
   $post->description= $request->description;
     $post->post_staus= 'active';

$post->user_id= $userid;
$post->name= $name;
$post->usertype= $usertype;

 $image= $request->image;

if($image)
    {
 $imagename=time().'.'.$image->getClientOriginalExtension();
 $request->image->move('postimage',$imagename);
 $post->image= $imagename;
    }




   $post->save();
   return redirect()->back()->with('message','Post Added Successfully');
}
public function show_post()

{
    $post =Post::all();
    return view('admin.show_post',compact('post'));    
}
public function delete_post($id)
{
    $post= Post::find($id);
    $post->delete();
    return redirect()->back()->with('message','Post Deleted successfully');
}

}