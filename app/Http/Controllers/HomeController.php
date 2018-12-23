<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Auth;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user  = Auth::user();
        $posts = $user->post()
        ->leftJoin('comments','comments.posts_id','=','posts.id')
        ->leftJoin('user_like_post as ulp','ulp.posts_id','=','posts.id')
        ->select('posts.*','ulp.users_id')
        ->selectRaw('count(comments.id) as count_comments')
        ->selectRaw('count(ulp.users_id) as count_likes')
        ->groupBy('posts.id')
        ->orderBy('posts.created_at','desc')
        ->get();
        
        return view('home',compact("user","posts"));
    }
}
