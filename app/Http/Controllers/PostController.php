<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class PostController extends Controller
{
    public function getPostBySlug(Request $request , $slug){
        $post = Post::where('slug',$slug)->TotalComments()->first();
        $categories = Category::TotalPost()->get();
        $post_random = Post::inRandomOrder()->limit(3)->get();
        return view('detail_post',compact('post','categories','post_random'));
    }
    public function getPostByCategory(Request $request,$slug){
        $post_random = Post::inRandomOrder()->limit(3)->get();
        $categories = Category::TotalPost()->get();
        $category   = Category::where('slug',$slug)->first();
        $posts      = Post::where('category_id',$category->id)->paginate(9);
        $count_post = Post::where('category_id',$category->id)->count();
        return view('theloai',compact(['posts','count_post','categories','post_random']));
    }
    public function search(Request $request){
        $categories = Category::TotalPost()->get();
        $post_random = Post::inRandomOrder()->limit(3)->get();
        $posts = Post::where('title', 'LIKE', "%$request->p%")->TotalComments()->paginate(9);
        return view('search',compact(['posts','count_post','categories','post_random']));
    }
}
