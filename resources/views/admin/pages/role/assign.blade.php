@extends('admin.master')

@section('content')

<div class="container">

    <h1>Assign Permission For {{$role->name}}</h1>

    <?php
    $rolePermissions = $role->permissions->pluck('permission_id')->toArray();
    ?>

    <div class="row">
        <div class="col">

            @foreach ($all_permissions as $permission)

            <form action="{{route('assign.permission', $permission->id)}}" method="post">
                @csrf

                <div class="form-check">

                    <input @if (in_array($permission->id, $rolePermissions))
                    checked
                    @endif

                    type="checkbox" name="permissions[]" class="form-check-input" value="{{$permission->id}}" id="flexCheckDefault">

                    <label class="form-check-label" for="flexCheckDefault">
                        {{$permission->name}}
                    </label>
                </div>
                @endforeach


                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
