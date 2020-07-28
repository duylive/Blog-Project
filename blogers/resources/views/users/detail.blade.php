@extends('users.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="{{ asset('storage/images/' . $user->image) }}" alt="" style="width: 250px">
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <h4>
                                {{$user->name}}</h4>
                            <small>{{$user->address}}</small>
                            <p>
                                <i class="glyphicon glyphicon-envelope"></i>{{$user->email}}
                                <br/>
                                <i class="glyphicon glyphicon-globe"></i>{{$user->address}}
                                <br/>
                                <i class="glyphicon glyphicon-gift"></i>{{$user->birthday}}
                            </p>

                            <!-- Split button -->
                            <div class="btn-group">
                                @if(Auth::user() == null)
                                    <hr>
                                @elseif(Auth::user()->id == $user->id)
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger"
                                       onclick="return confirm('You want to delete ?')">Delete</a>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

