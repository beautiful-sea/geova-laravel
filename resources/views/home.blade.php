@extends('layouts.app')

@section('content')
<leftsidebar>
    
</leftsidebar>
<header-component :user="{{json_encode($user)}}" >
    
</header-component >
<feed>
    <form-post action_status="{{route('posts.store')}}" action_media="" action_blog="" method="post" token="{{csrf_token()}}" slot="form-post">
        
    </form-post>
    @foreach($posts as $post)
    <post slot="post">
        <p slot="text">{{$post->text}}</p>
        <small slot="created_at">{{date("d/m/Y H:m",strtotime($post->created_at))}}</small>
    </post>
    @endforeach
</feed>
@endsection
