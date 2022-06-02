<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostLikeController extends Controller
{
   

    public function store(Post $post, Request $request){
        if($post->likedBy($request->user())){
            return response(null, 489);
        }
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);
        return back();
    }
}
