@extends('posts.master')
@section('title', 'Addition new blog')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Addition new blog</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Title blog</label>
                        <input type="text" class="form-control" name="title"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="inputFileName">Image</label>
                        <input type="text"
                               class="form-control"
                               id="inputFileName"
                               name="inputFileName">
                        <input type="file"
                               class="form-control-file"
                               id="inputFile"
                               name="inputFile">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Content</label>
                        <textarea name=content_post id="text" cols="30" rows="10"></textarea>
                        <script src={{ url('ckeditor/ckeditor.js') }}></script>
                        <script>
                            CKEDITOR.replace( 'content_post');


                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <input type="text" class="form-control" name="category_id" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


