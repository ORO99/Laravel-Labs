<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{   
        function users (){
            $posts = Post::paginate(4);
            return view("homepage",compact('posts'));
        }
    
        function viewpost($id){
            // $posts = Post::get();
            // foreach ($posts as $post)
            // {
            //     if ($post["id"]==$id){
            //         return view("viewpost",["post"=>$post]);
            //     }
            // }
            $post = Post::findorfail($id);
            return view("viewpost", compact('post'));
        }
    
        function add(){
            return view("addpage");
        }
        
        function update($id){
        //     foreach ($this->data as $post)
        //     {
        //         if ($post["id"]==$id){
        //             return view("updatepage",["post"=>$post]);
        //         }
        //     }
        //  return NULL; 
            $post = Post::findorfail($id);
            return view("updatepage", compact('post'));
        }

        function store(Request $request){
            //Validation
            $request->validate([
                'id' => 'Unique:App\Models\Post|Integer|required',
                'title' => 'required|min:3',
                'desc' => 'required|min:10'
            ]);

            Post::create([
                'id' => $request->id,
                'title' => $request->title,
                'desc' => $request->desc
            ]);
            return redirect( route('homepage.index'));
        }

        function edit(Request $request, $id){
             //Validation
             $request->validate([
                'id' => 'required|Integer|Unique:posts,id,'.$id,
                'title' => 'required|min:3',
                'desc' => 'required|min:10'
            ]);
            
            Post::findOrFail($id)->update([
                'id' => $request->id,
                'title' => $request->title,
                'desc' => $request->desc
            ]);
            return redirect( route('homepage.index'));
        }

        function delete($id){
            Post::findOrFail($id)->delete();
            return back();
        }
}
