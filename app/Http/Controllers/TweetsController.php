<?php

namespace App\Http\Controllers;

use App\Tweet;

use App\User;

class TweetsController extends Controller
{

    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => ['required', 'max:255'],
            'image' => ['file'] 
            ]);

        
        if (request('image'))
        {
            $attributes['image'] = request('image')->store('attached_images');
            Tweet::create([
                'user_id' => auth()->id(),
                'body' => $attributes['body'],
                'image' => $attributes['image']
            ]);
        }  
        else
        {
            Tweet::create([
                'user_id' => auth()->id(),
                'body' => $attributes['body'],
                'image' => null
            ]); 
        }

        return redirect()->route('home')->with('success', 'Tweet successfully posted!');
    }
}
