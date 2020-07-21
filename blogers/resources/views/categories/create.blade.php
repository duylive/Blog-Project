@extends('categories.master')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Addition new category</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Category</label>
                        <textarea type="text" class="form-control" name="name"  placeholder="Enter name" required></textarea>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
