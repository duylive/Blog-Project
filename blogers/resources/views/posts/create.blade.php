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
                        <textarea type="text" class="form-control" name="title"  placeholder="Enter name" required></textarea>
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
                        <textarea type="text" class="form-control" name="description" required></textarea>
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
                        <label for="exampleInputEmail1">Category:</label>
                        <select id="exampleInputEmail1" name="category_id">
                            <option value="1">Sport</option>
                            <option value="2">Music</option>
                            <option value="3">Travel</option>
                            <option value="4">Economy</option>
                            <option value="5">Knowledge</option>
                        </select>
                        <!--   <input type="text" class="form-control" name="category_id" > -->
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
@endsection


