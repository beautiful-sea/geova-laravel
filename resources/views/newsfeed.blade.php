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
{{-- Modal Comentários--}}
<modal background="0" id="commentPost">
    <div  slot="modal-content">
        <div class="modal-body" id="commentspost">
            <commentspost  slot="commentsposts" action="" :user_auth="{{auth()->user()}}">
            </commentspost>       
        </div>
    </div>  
</modal>

{{-- Modal de edição do post --}}
<modal background="0" id="editPost">
    <div  slot="modal-content">
        <div class="modal-body">
            <editpost token="{{csrf_token()}}">
            </editpost>            
        </div>
    </div>
</modal>

{{-- Menu fixo da esquerda --}}
<leftsidebar></leftsidebar>

{{-- Menu do topo do site --}}
<header-component :user="{{json_encode(auth()->user())}}" >
	Início
</header-component >

{{-- Feed de notícias --}}
<feed type='all'>

    {{-- Bloco do meio do Feed de Notícias --}}
    <blockmainfeed slot="blockmainfeed">
        <form-post action_status="{{route('posts.store')}}" action_media="" action_blog="" method="post" token="{{csrf_token()}}" slot="form-post" editable="0">
            <img src="{{asset('storage/users/'.auth()->user()->img_profile)}}"  style="width: 36px;height: 36px!important" alt="author" slot="img_profile">
        </form-post>

        <post slot="post" :user="{{auth()->user()}}" type="all">
 
        </post>
    </blockmainfeed>
    
    {{-- Bloco da esquerda do Feed de Notícias --}}
    <blockleftfeed slot="blockleftfeed"></blockleftfeed>

    {{-- Bloco da direita do Feed de Notícias --}}
    <blockrightfeed slot="blockrightfeed"></blockrightfeed>
</feed>


@endsection