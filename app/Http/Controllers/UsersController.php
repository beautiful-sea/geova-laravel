<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class UsersController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = Auth::user();
        $data = $request->all();
        //Verifica se arquivo é valido
        if($request->hasFile('img_profile') && $request->file('img_profile')->isValid()){

            if($user->img_profile){//Se usuário ja possui imagem de perfil
            $name = explode('.',$user->img_profile);
            $name = $name[0];
            }else{
              $name = $user->id.'-'.kebab_case($user->name);             
            }
          
          $extension = $request->file('img_profile')->extension();
          $nameFile = "{$name}.png"; 
          $data['img_profile'] = $nameFile;
          $upload = $request->file('img_profile')->storeAs('users/profile/',$nameFile);

          if(!$upload){
            return redirect()->back()->with('errors','Erro ao salvar imagem');
          }
      }

      $update = $user->update($data);

      if($update){
        return redirect()->back();
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
        //
    }
}
