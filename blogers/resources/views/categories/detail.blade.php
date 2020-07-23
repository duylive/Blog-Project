@extends('categories.master')
@section('content')
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                @if(count($category -> posts)  == 0)
                    <tr>
                        <td colspan="4">Not posts in topic</td>
                    </tr>
                @else
                    @foreach($category -> posts as $post)
                        <div class="card mb-4">
                            <img class="card-img-top" src="{{ asset('storage/images/' . $post->image) }}"
                                 alt="Card image cap"
                                 style="width: 728px">
                            <div class="card-body">
                                <h2 class="card-title">{{$post->title}}</h2>
                                <h5 class="card-title">{{$post->description}}</h5>
                                <p class="card-text">{!!Str::limit($post->content, 255)!!}</p>
                                <a href="{{route('posts.detail', $post->id)}}" class="btn btn-primary">Read More
                                    &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                <i style='font-size:16px' class='fas'>&#xf304;</i> {{$post->created_at}} by
                                <i style="font-size:16px" class="fa">&#xf007;</i>
                                <a href="#">{{$post->user->name}}</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Số lượt xem: {{ $post->view_count }} <i style="font-size:16px" class="fa">&#xf06e;</i>
                            </div>

                        </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
@endsection
