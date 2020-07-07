@extends('users.master')
@section('title', 'Addition new user')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Addition new user</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="inputFileName">Avatar</label>
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
                        <label>Birthday</label>
                        <input type="date" class="form-control" name="birthday" required>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="gender" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" name="role" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


