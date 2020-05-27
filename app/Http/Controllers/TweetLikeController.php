<?php

namespace App\Http\Controllers;

use App\tweet;
use Illuminate\Http\Request;

class TweetLikeController extends Controller
{
    public function store(tweet $tweet){
        $tweet->like(current_user());
        return back();
    }
    public function destroy(tweet $tweet){
        $tweet->disLike(current_user());
        return back();
    }
}
