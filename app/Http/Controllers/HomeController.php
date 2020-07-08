<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Subscribe;
use App\Http\Requests\RequestSubscribe;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post_random = Post::inRandomOrder()->limit(3)->get();
        $posts = Post::orderBy('id','DESC')->take(9)->get();
        $categories = Category::TotalPost()->get();
        return view('home',compact('post_random','posts','categories'));
    }
    public function createSubscribe(RequestSubscribe $request){
        Subscribe::create($request->all());
        return response()->json(['status' => '200' , 'message' => 'Đăng kí theo dõi thành công !!']);

    }
}
