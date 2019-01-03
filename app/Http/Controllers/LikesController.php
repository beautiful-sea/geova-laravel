<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LikesController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$type,$idPost)
    {   
        $user = \Auth::user();

        $post = \App\Post::find($idPost);

        $role = [
            'users_id'  =>  $user->id,
            'posts_id'  =>  $idPost
        ];

        //Verifica se já existe like do usuário no post
        //Array_filter para remover os espaços vazios do array
        $verify =  array_filter((array)DB::table('user_like_post')
            ->where('users_id', $role['users_id'])->where('posts_id', $role['posts_id'])->get());

        if(empty($verify)){
            // //Instanciando novo like
            $like = new \App\LikePost([
                'users_id'  =>  $user->id,
                'posts_id'  =>  $idPost
            ]);

            //criando o like
            $post->likes()->save($like);
        }else{
            //remove like
            $delete = DB::table('user_like_post')->where('users_id', $role['users_id'])->where('posts_id', $role['posts_id'])->delete();
        }

        if($type == "all"){
            $post = new PostsController();
            return $post->allICanSee();
        }else{
            return $user->post()->get();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \App\Post::find($id);

        return $post->likes()->get();
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
    public function destroy($id)
    {
        //
    }
}
