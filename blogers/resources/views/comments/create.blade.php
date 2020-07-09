<form method="post" action="/{{$post->id}}/comment" >
    {{ csrf_field() }}
    <div class="form-group">
        <label>Writing your comment</label>
        <textarea class="form-control" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
