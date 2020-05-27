<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class exploreController extends Controller
{
    public function __invoke()
    {
        return view("explore.index", ['users' => User::paginate(10)]);
    }
}
