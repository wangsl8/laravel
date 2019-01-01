<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

 class PostController extends Controller
 {
    //
        public function index()
         {
             $posts=Post::all();
             return \Response::json([
                 'status'=>'success',
                 'status_code'=>200,
                 'data'=>$posts->toArray()
             ]);
          }

     public function show($id)
     {
         $post = Post::find($id);

         if(!$post){
             return \Response::json([
                 'status'=>'failed',
                 'status_code'=>404,
                 'message'=>'not find'
             ]);
         }
         return \Response::json([
             'status'=>'success',
             'status_code'=>200,
             'data'=>$post
         ]);
     }


 }

