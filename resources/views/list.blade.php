@extends('layout')

@section('content')

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>

    @endif

    <h1>Users</h1>

    <div class="pb-3">
        <a class="btn btn-success" href="{{route('create')}}">Add user</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Age</th>
            <th>Actions</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('edit',['id' => $user->id])}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('delete',['id' => $user->id])}}">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection