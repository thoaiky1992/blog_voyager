<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class PostController extends Controller
{
    public function getPostBySlug(Request $request , $slug){
        $post = Post::where('slug',$slug)->first();
        $categories = Category::TotalPost()->get();
        $post_random = Post::inRandomOrder()->limit(3)->get();
        return view('detail_post',compact('post','categories','post_random'));
    }
}
