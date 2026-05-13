<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Post;

use Illuminate\Support\Str;

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
    $post->uuid = (string) Str::uuid();
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
public function delete_post($uuid)
{
    $post = Post::where('uuid', $uuid)->firstOrFail();
    $post->delete();

    return redirect()->back()->with('message', 'Post Deleted successfully');
}
public function edit_page($uuid)
{
    $post = Post::where('uuid', $uuid)->first();

    return view('admin.edit_page', compact('post'));
}
public function update_post(Request $request, $uuid)
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

    return redirect()->back()->with('message', 'Post Updated successfully');
}
      public function accept_post($uuid)
{
    $data = Post::where('uuid', $uuid)->firstOrFail();
    $data->post_staus = 'active';
    $data->save();

    return redirect()->back()->with('message', 'Post Status Change to Active');
}
        public function reject_post($uuid)
{
    $data = Post::where('uuid', $uuid)->firstOrFail();
    $data->post_staus = 'rejected';
    $data->save();

    return redirect()->back()->with('message', 'Post Status Change to Rejected');
}

}
