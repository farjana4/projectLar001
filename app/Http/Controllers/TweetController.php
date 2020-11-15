<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TweetController extends Controller
{
    public function showForm(){
        //return redirect()->route('post.tweets.create');
        return view('tweet');
    }

    public function formProcess(Request $request){
        //$body = $request->input('body');
        $body = $request->body;

        //using query builder
        /*$db = DB::table('tweets')->insert([
           'body' => $body,
           'user_id' => 1
        ]);*/

        //using ORM/Model (query Eloquent ORM)
        $db = Tweet::create([
            'body' => $body,
            'user_id' => 1
        ]);

    }

    public function showListAll(){
        //$data = DB::table('tweets')->get();
        $tweets = Tweet::all();
        //$tweets = Tweet::find(2);
        //dd($tweets);
        return view('tweet_list', compact('tweets'));
    }
}
