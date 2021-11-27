<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    
    public function posts(){
        $categories = Category::all();
        $posts = Post::all();
        return view('content.posts',compact('posts','categories'));
    }

    
    public function contact(){
        
        return view('contact');
    }

    public function home(){
        $categories = Category::all();
        return view('home', compact('categories'));
    }


    public function viewpost(Post $post){
        // $post = DB::table('posts')->find($id);
        $categories = Category::all();
        return view('content.postcontent',compact('post','categories'));
    }


    public function addpost(Request $request)
    {
        $categories = Category::all();
        return view('content.addpost',compact('categories'));
    }


    public function store(Request $request)
    {
        $post = new post;
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->body = $request->body;
        $post->image = $request->file('image')->getClientOriginalName();
        $post->save();
        $request->image->move(public_path('postimg'),$post->image);
        return redirect('/dashboard');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $posts = Post::find($id);
        return view('content/postedit',compact('posts','categories'));
    }

    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $posts->title = $request->title;
        $posts->category_id = $request->category_id;
        $posts->body = $request->body;
        $posts->save();
        return redirect('dashboard');
    }

    public function destroy($id)
    {
        $posts =Post::where('id',$id)->first();

        if ($posts != null) {
            $posts->delete();
            return redirect('/dashboard');
        }
    }

    public function addcategory(Request $request)
    {
        return view('content.addcategory');
    }
    public function categorystore(Request $request)
    {
        $categories = new Category();
        $categories->name = $request->name;
        $categories->discription = $request->discription;
        $categories->save();
        return redirect('/dashboard');
    }


    public function category($name)
    {
        $categories = Category::all();
        $cat = DB::table('categories')->where('name', $name)->value('id');
        $posts = DB::table('posts')->where('category_id' , $cat)->get();
        return view('content.category',compact('posts','categories'));
    }

    public function admin()
    {
        $users = DB::table('users')->count();
        $postes = DB::table('posts')->count();
        $posts = Post::all();
        return view('content.dashboard',compact('posts','users','postes'));
    }

    public function changerole(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        
        if($request['role_admin'])
        {
            $user->roles()->attach(Role::where('name','Admin')->first());
        }
        if($request['role_editor'])
        {
            $user->roles()->attach(Role::where('name','Editor')->first());
        }

        return redirect()->back();
    }

    public function userRole()
    {
        $users = User::all();
        return view('content.userRoles', compact('users'));
    }

}
