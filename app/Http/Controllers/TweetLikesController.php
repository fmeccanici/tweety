<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetLikesController extends Controller
{
    public function store(Tweet $tweet)
    {
        $user = current_user();

        if ($tweet->isLikedBy($user))
        {
            $tweet->unlike($user);
        } else
        {
            $tweet->like($user);
        }

        return back();
    }

    public function destroy(Tweet $tweet)
    {
        $user = current_user();

        if ($tweet->isDislikedBy($user))
        {
            $tweet->unlike($user);
        } else
        {
            $tweet->dislike($user);
        }

        return back();
    }
}
