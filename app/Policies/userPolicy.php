<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class userPolicy
{
    use HandlesAuthorization;

    public function edit(User $current_user, User $user){
        return $current_user->is($user);
    }
}
