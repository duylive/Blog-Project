@extends('users.master')
@section('title', 'Edit user infomation')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Edit infomation</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" >
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}" >
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="gender" value="{{ $user->gender }}" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" >
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{ $user->phone }}" >
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $user->address }}" >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" value="{{ $user->password }}" >
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" name="role" value="{{ $user->role }}" >
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

