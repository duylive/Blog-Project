@extends('posts.master')
@section('title', 'Edit blog')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Edit blog</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('posts.update', $post->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Title blog</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="inputFileName">Image</label>
                        <input type="text"
                               class="form-control"
                               id="inputFileName"
                               name="inputFileName"
                               value="{{$post->image}}">
                        <input type="file"
                               class="form-control-file"
                               id="inputFile"
                               name="inputFile">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" value="{{ $post->description }}" required>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name=content_post id="text" cols="30" rows="10" value="{!! $post->content !!}"></textarea>
                        <script src={{ url('ckeditor/ckeditor.js') }}></script>
                        <script>
                            CKEDITOR.replace( 'content_post');


                        </script>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection


