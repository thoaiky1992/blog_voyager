<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function createComment(Request $request){
        Comment::create($request->all());
        return redirect()->route('detail_post', ['slug' => $request->slug]);
    }
}
