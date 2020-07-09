@if(count($comments) == 0)
    <tr><td colspan="4">Not comment</td></tr>
@else
    @foreach($comments as $key => $comment)
        <div class="card mb-4">
            <div class="card-body">
                <p class="card-title">{{$comment->content}}</p>
                <hr>
                <i style='font-size:16px' class='fas'>&#xf304;</i> {{$comment->created_at}} by
                <i style="font-size:16px" class="fa">&#xf007;</i>
                <a href="#">{{$comment->user->name}}</a>
            </div>
        </div>
    @endforeach
@endif
