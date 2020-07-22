@extends('categories.master')
@section('content')
    @if(count($categories) == 0)
        <tr>
            <td colspan="4">Not data</td>
        </tr>
    @else
        @foreach($categories as $key => $category)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('storage/images/' . $category->image) }}" alt="" style="height: 204.27px">
                    <div class="card-body">
                        <h4 class="card-title">{{$category->name}}</h4>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">All posts in topic</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection

