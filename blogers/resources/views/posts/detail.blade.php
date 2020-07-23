@extends('posts.master')
@section('content')
    @if($post->category == null)
        <div class="col-12"><h1>News</h1></div>
    @else
        <div class="col-12"><h1>{{$post->category->name}} news</h1></div>
        @endif
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
        @if(Auth::user() == null)
            <hr>
        @elseif(Auth::user()->id == $post->user_id)
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
                            @if(Auth::user() == null)
                                <br>
                            @elseif(Auth::user()->id == $cmt->user_id )
                                <a href="{{route('comments.destroy', $cmt->id)}}" class="btn btn-danger" onclick="return confirm('You want to delete ?')">Delete</a>
                                @endif
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
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
                @else
             <a class="nav-link" href="{{ route('login') }}">{{ __('You must LOGIN to writing comments.') }}</a>
                 <a class="nav-link" href="{{ route('register') }}">{{ __('If you do not have an account please click in here to REGISTER ') }}</a>
                @endif
        </div>
    </div>
@endsection

