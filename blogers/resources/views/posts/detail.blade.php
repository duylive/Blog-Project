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
            <i style="font-size:18px" class="fa">&#xf017;</i> {{$post->created_at}} by
            <i style='font-size:16px' class='fas'>&#xf304;</i>
            <a href="#">{{$post->user->name}}</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Số lượt xem: {{ $post->view_count }} <i style="font-size:16px" class="fa">&#xf06e;</i>
        </div>
        @if(Auth::user())
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" >Edit</a>
        <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger" onclick="return confirm('You want to delete ?')">Delete</a>
        @endif
        <div class="card-footer text-muted">
            <h3>Comments:</h3>
                @foreach($post->comments as $cmt)
                    <div class="card mb-4" >
                        <div class="card-body">
                            <i style='font-size:16px' class='fas'>&#xf304;</i>
                            <a href="#">{{$cmt->user->name}}</a> :
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i style="font-size:18px" class="fa">&#xf017;</i>
                            {{$cmt->created_at}}
                            <hr>
                            <p class="card-title">{{$cmt->content}}</p>
                        </div>
                    </div>
                @endforeach
            @if(Auth::user())
            <form method="post" action="/{{$post->id}}/comment" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="comment">Leave a your idea:</label>
                <textarea class="form-control" name="content_cmt" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary" id="btn-cmt">Submit</button>
        </form>
                @endif
        </div>
    </div>
@endsection

