<?php
namespace App\Http\Controllers;

class PostsController extends Controller
{
   public  $data =[
    ["id"=>1, "title"=>"post 1","desc"=>"descrption"],
    ["id"=>2, "title"=>"post 2","desc"=>"descrption 2"],
    ["id"=>3, "title"=>"post 3","desc"=>"descrption 3"],
    ["id"=>4, "title"=>"post 4","desc"=>"descrption 4"]
    ];

    function users (){
        return view("homepage",["users"=>$this->data]);
    }

    function viewpost($id){
        foreach ($this->data as $post)
        {
            if ($post["id"]==$id){
                return view("viewpost",["post"=>$post]);
            }
        }
     return NULL; 
    }

    function add(){
        return view("addpage");
    }
    
    function update($id){
        foreach ($this->data as $post)
        {
            if ($post["id"]==$id){
                return view("updatepage",["post"=>$post]);
            }
        }
     return NULL; 
}

}