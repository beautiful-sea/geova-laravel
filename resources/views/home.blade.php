@extends('layouts.app')

@section('content')
<div id="ms-preload" class="ms-preload">
    <div id="status">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<modal body="1" :action="'post/'+$store.state.item.id" method="put" background="0">
    <div  slot="modal-body">
     <post :post="$store.state.item" editable="1">
     </post>
 </div>
</modal>
<leftsidebar></leftsidebar>
<header-component :user="{{json_encode($user)}}" ></header-component >
<topheaderprofile></topheaderprofile>
<feed :user="{{json_encode($user)}}">
    <form-post action_status="{{route('posts.store')}}" action_media="" action_blog="" method="post" token="{{csrf_token()}}" slot="form-post" editable="0">

    </form-post>

    @foreach($posts as $post)
    <post slot="post" :post="{{$post}}" :user="{{json_encode($user)}}" :url="'post/delete/'+ {{$post->id}}">
        <img src="{{url('/users/profile/'.auth()->user()->img_profile)}} " alt="Foto de perfil">
    </post>
    @endforeach
</feed>
@endsection

