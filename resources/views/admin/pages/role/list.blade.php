@extends('admin.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Role List</h1>
            <a class="btn btn-success mt-0 mb-3" href="{{route('role.create')}}">Create New Role</a>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($roles as $key => $role)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>
                        <td>{{$role->status}}</td>
                        <td>
                            <a href="{{route('role.assign', $role->id)}}" class="btn btn-primary">Role Assign</a>
                            <a href="" class="btn btn-success">View</a>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                   @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection