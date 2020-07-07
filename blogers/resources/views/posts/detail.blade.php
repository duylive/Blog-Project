@extends('posts.master')
@section('content')
    <div class="card mb-4">
        <img class="card-img-top"  src="{{ asset('storage/images/' . $post->image) }}" alt="Card image cap" style="width: 728px">
        <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <h5 class="card-title">{{$post->description}}</h5>
            <p class="card-text">{!!$post->content!!}</p>
        </div>
        <div class="card-footer text-muted">
            Số lượt xem: {{ $post->view_count }}
            {{$post->created_at}} by
            <a href="#">{{$post->user->name}}</a>
        </div>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" >Edit</a>
        <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger" onclick="return confirm('You want to delete ?')">Delete</a>
    </div>
@endsection

