<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class profilesController extends Controller
{
    public function show(User $user)
    {
        return view("profiles.show", [
            "user" => $user,
            "tweets" => $user->tweets()->paginate(1)

        ]);
    }
    public function edit(User $user)
    {

        // $this->authorize("edit",$user);
        return view("profiles.edit", compact("user"));
    }
    public function update(User $user)
    {
        $attr = Request()->validate([
            "name" => ['required', "string", "max:255"],
            "username" => ["required", "string", "max:255", Rule::unique("users")->ignore($user)],
            "avatar" => ["file"],
            "email" => ['required', "email", "max:255", Rule::unique("users")->ignore($user)],
            "password" => ['required', "string", "min:8", "max:255", "confirmed"],

        ]);
        $attr['avatar'] = Request("avatar")->store("avatars");
        $user->update($attr);
        return redirect(($user->path()));
    }
}
