<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comment;
use \App\Post;
use \App\User;
use \Auth;
use Illuminate\Support\Facades\DB;


class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$postId)
    {
        $post = Post::find($postId);

        $user = \Auth::user();

        $post->comments()->create([
            'text'=>$request->text,
            'users_id'=>$user->id
        ]);

        return json_encode(Post::find($postId));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::with(['user'])->where('posts_id','=',$id)
        ->join('users','users.id','=','comments.users_id')
        ->select('comments.*','users.name','users.img_profile')
        ->get();
        return json_encode($comment);
        // return Post::find($id)::with(['user','comments'])->where('id','=',$id)->get();
    }

    public function like($commentId,$postId){
        
        $user = \Auth::user();

        $comment = Comment::find($commentId);

        $role = [
            'users_id'  =>  $user->id,
            'comments_id'  =>  $commentId
        ];

        //Verifica se já existe like do usuário no post
        //Array_filter para remover os espaços vazios do array
        $verify =  array_filter((array)DB::table('user_like_comment')
            ->where('users_id', $role['users_id'])->where('comments_id', $role['comments_id'])->get());

        if(empty($verify)){
            // //Instanciando novo like
            $like = new \App\LikeComment([
                'users_id'  =>  $user->id,
                'comments_id'  =>  $commentId
            ]);

            //criando o like
            $comment->likes()->save($like);
        }else{
            //remove like
            $delete = DB::table('user_like_comment')->where('users_id', $role['users_id'])->where('comments_id', $role['comments_id'])->delete();
        }

        return Post::find($postId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($postId,$commentId)
    {
        Comment::destroy($commentId);

        return Post::find($postId);

    }
}
