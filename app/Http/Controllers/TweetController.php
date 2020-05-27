<?php

namespace App\Http\Controllers;

use App\tweet;
use Illuminate\Http\Request;
use App\Http\Requests\TweetRequest;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
     
        return view("tweets.index", [
            "tweets" => Auth()->user()->timeline()
        ]);
    }
    public function store(TweetRequest $request)
    {
        tweet::create(['body' => $request->body]);

        return redirect()->route("home");
    }
}
