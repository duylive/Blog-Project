@extends('users.master')
@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name of users</th>
            <th scope="col">Avatar</th>
            <th scope="col">Birthday</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Role</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($users) == 0)
            <tr><td colspan="4">Not data</td></tr>
        @else
            @foreach($users as $key => $user)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $user->name }}</td>
                    <td>
                        <img src="{{ asset('storage/images/' . $user->image) }}" alt="" style="width: 150px">
                    </td>
                    <td>{{ $user->birthday }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->role }}</td>
                    <td><a href="{{ route('users.detail', $user->id) }}" class="btn btn-primary">Detail Infomation</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

