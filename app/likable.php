<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait likable
{
    public function ScopeWithLikes(Builder $q){

        $q->leftJoinSub("select tweet_id,sum(liked) likes, sum(!liked) dislikes from  likes group by tweet_id",
        "likes",
        "likes.tweet_id",
        "tweets.id");
    }
    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            "user_id" => $user ? $user->id : Auth()->id()
        ], [
            "liked" => $liked
        ]);
    }
    public function dislike($user = null)
    {
        return  $this->like($user, false);
    }
    public function likes()
    {
        return $this->hasMany(like::class, "tweet_id");
    }
    public function isLikedBy(User $user,$liked=true)
    {

        return (bool) $user->likes
            ->where("tweet_id", $this->id)
            ->where("liked", $liked)
            ->count();
    }
    public function isDislikeBy(User $user)
    {
        return $this->isLikedBy($user ,false);
    }
}
