@extends('posts.master')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>News</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>

            @if(count($posts) == 0)
                <tr><td colspan="4">Not data</td></tr>
            @else
                @foreach($posts as $key => $post)
                    <div class="card mb-4">
                        <img class="card-img-top"  src="{{ asset('storage/images/' . $post->image) }}" alt="Card image cap" style="width: 728px">
                        <div class="card-body">
                            <h2 class="card-title">{{$post->title}}</h2>
                            <h5 class="card-title">{{$post->description}}</h5>
                            <p class="card-text">{!!Str::limit($post->content, 255)!!}</p>
                            <a href="{{route('posts.detail', $post->id)}}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            <i style='font-size:16px' class='fas'>&#xf304;</i> {{$post->created_at}} by
                            <i style="font-size:16px" class="fa">&#xf007;</i>
                            <a href="#">{{$post->user_id}}</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Số lượt xem: {{ $post->view_count }} <i style="font-size:16px" class="fa">&#xf06e;</i>
                        </div>

                    </div>
                @endforeach
            @endif
            {{ $posts->appends(request()->query()) }}
        </div>
    </div>
@endsection


