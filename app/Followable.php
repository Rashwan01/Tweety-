<?php 
namespace App;
trait Followable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }
    public function follows()
    {
      return $this->belongsToMany(user::class, "follows", "user_id", "following_user_id");
    }
    public function following(User $user){
            return $this->follows->contains($user);
    }
    public function toggleFollow(User $user){
        if ($this->following($user)) {
         return $this->unfollow($user);
        } 
        return $this->follow($user);
      
    }
}
