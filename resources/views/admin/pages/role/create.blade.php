@extends('admin.master')

@section('content')

<h1>Create Role</h1>

<form action="{{route('role.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Enter Role Name:</label>
        <input required type="text" class="form-control" id="" placeholder="Enter role name" name="name">
    </div>

    <div class="form-group">
        <label for="">Enter Role Description:</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="">Select Role Status:</label>
        <select name="status" id="">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection