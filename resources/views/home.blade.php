@extends('layouts.app')

@section('content')
{{-- Mostrar enquanto a Página não carrega --}}
<div id="ms-preload" class="ms-preload">
    <div id="status">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>

{{-- Modal de edição do post --}}
<modal body="1" header="0" footer="0" background="0" id="editPost" :action="'post/'+$store.state.item.id" method="put" >
    <div  slot="modal-body">
       <post :post="$store.state.item" editable="1">
            <img src="{{asset('storage/users/'.$user->img_profile)}}" width="100%" alt="Foto de perfil">
       </post>
   </div>
</modal>

{{-- Modal de upload foto de PERFIL --}}
<modal  background="1" id="update-profile-photo"  dialog_class="modal-dialog window-popup update-header-photo"  >
        <uploadimage method="post" name="img_profile" action="/user/uploadImg/profile" slot="modal-content">
            Atualizar foto de Perfil
        </uploadimage>
</modal>
{{-- Modal de upload foto de CAPA --}}
<modal  background="1" id="update-header-photo" dialog_class="modal-dialog window-popup update-header-photo"  >
        <uploadimage method="post" name="img_header" action="/user/uploadImg/header" slot="modal-content">
            Atualizar foto de Capa
        </uploadimage>
</modal>

{{-- Menu fixo da esquerda --}}
<leftsidebar></leftsidebar>

{{-- Menu do topo do site --}}
<header-component :user="{{json_encode($user)}}" ></header-component >

{{-- Submenu com foto da capa e perfil --}}
<topheaderprofile :user="{{auth()->user()}}">
    @if($user->img_profile)
    <img src="{{asset('storage/users/'.$user->img_profile)}}" width="100%" alt="Foto de perfil">
    @else
    <img src="img/last-photo9-large.jpg" alt="Foto de perfil">
    @endif
</topheaderprofile>

{{-- Feed de notícias --}}
<feed :user="{{json_encode($user)}}">

    {{-- Bloco do meio do Feed de Notícias --}}
    <blockmainfeed slot="blockmainfeed">

        @if($posts)
        @foreach($posts as $post)
        <post slot="post" :post="{{$post}}" :user="{{json_encode($user)}}" :url="'post/delete/'+{{$post->id}}">
            @if($user->img_profile)
            <img src="{{asset('storage/users/'.$user->img_profile)}} " alt="Foto de perfil">
            @else
            <img src="img/avatar1.jpg" alt="Foto de perfil">
            @endif
        </post>
        @endforeach   
        @else
        <img src="img/last-photo9-large.jpg" alt="Foto de perfil">
        @endif     
    </blockmainfeed>
    
    {{-- Bloco da esquerda do Feed de Notícias --}}
    <blockleftfeed slot="blockleftfeed"></blockleftfeed>

    {{-- Bloco da direita do Feed de Notícias --}}
    <blockrightfeed slot="blockrightfeed"></blockrightfeed>
</feed>
@endsection


        <!-- <form-post action_status="{{route('posts.store')}}" action_media="" action_blog="" method="post" token="{{csrf_token()}}" slot="form-post" editable="0">
            <img src="{{asset('storage/users/'.$user->img_profile)}}"  style="width: 36px;height: 36px!important" alt="author" slot="img_profile">
        </form-post> -->