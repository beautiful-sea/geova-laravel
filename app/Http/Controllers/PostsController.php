<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;
use \App\Post;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
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
    public function store(Request $request)
    {   
        $data = $request->all();

        $validation = $request->validate([
            'text'  =>  'required'
        ]);

        unset($data['type']);

        $user = Auth::user();  

        $user->post()->create($request->all());

        return redirect()->back();          


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::find($id);
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

    public function myPosts()
    {  
        $user = Auth::user();
        
        $posts = $user->post()->get();

        return json_encode($posts);
    }

    public function all()
    {  

        $user = Auth::user();

        //Traz id das pessoas que o usuário segue
        $followers = $user->follower()->get();

        $posts = array();

        foreach ($followers as $follower) {
            $user_followed = User::find($follower->users_id_followed);

            $user_followed_posts = $user_followed->post;

            foreach ($user_followed_posts as $post) {
                $posts = array_prepend($posts,$post);
            }
        }

        foreach ($user->post as $post) {
            $posts = array_prepend($posts,$post);
        }

        $posts = array_values(array_sort($posts, function ($value) {
            return $value['created_at'];
        }));

        return array_reverse($posts);

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

        $validation = $request->validate([
            'text'  =>  'required'
        ]);

        $data = $request->all();

        $update = Post::find($id)->update($data);

        if($update){
            return redirect()->back();
        }else{
            return redirect()->back()->with(['error'=> 'Erro ao editar post']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->back();
    }
}
