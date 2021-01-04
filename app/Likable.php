<?php

namespace App;

trait Likable
{
    public function scopeWithLikes($query)
    {
        // select * from tweets
        // left join (
        //     select tweet_id, sum(liked) likes, sum(!liked) dislike from likes group by tweet_id
        // ) likes on likes.tweet_id = tweets.id
    
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
        ], [
            'liked' => $liked
        ]);
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return $this->likes->where('tweet_id', $this->id)->where('liked', true)->count();
    }

    public function isDislikedBy(User $user)
    {
        return $this->likes->where('tweet_id', $this->id)->where('liked', false)->count();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}