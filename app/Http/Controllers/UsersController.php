<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

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


      $update = $user->update($data);

      if($update){
        return redirect()->back();
      }else{
        return redirect()->back()->with('errors',"Erro ao atualizar dados");
      }
  }

  public function uploadImage(Request $request,$image){
        $user = Auth::user();
        $data = $request->all();
        $img = "img_{$image}";
        //Verifica se arquivo é valido
        if($request->hasFile("img_{$image}") && $request->file("img_{$image}")->isValid()){

            if($user->$img){//Se usuário ja possui imagem de perfil
            $name = explode('.',$user->$img);
            $name = $name[0];
            }else{
              $name = $user->id."-{$image}-".kebab_case($user->name);             
            }
          $file = $request->file("img_{$image}");
          $filename = "{$name}.png"; 
          $data["img_{$image}"] = $filename;
          if($file){
            Storage::disk('local')->put("users/{$filename}",File::get($file));
            $update = $user->update($data);
          }else{
             return redirect()->back()->with('errors','Erro ao salvar imagem');
          }

      }
      return redirect()->back();
  }

  public function getImage($filename){
    $file = Storage::disk('local')->get("users/{$filename}");
    return 'new Response($file,200)';
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
