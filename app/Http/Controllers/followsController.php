<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class followsController extends Controller
{
    public function store(User $user){
     
     Auth()->user()->toggleFollow($user);
        return back();
    }
}
