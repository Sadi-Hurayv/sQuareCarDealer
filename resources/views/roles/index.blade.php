@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2 fw-bold">Name</div>
        <div class="col-6 fw-bold">Description</div>
        <div class="col-1 fw-bold">Status</div>
        <div class="col-1 fw-bold">Action</div>
        <div class="col-1"></div>
    </div>

    @foreach($roles as $role)
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2">{{$role->name}}</div>
        <div class="col-6">{{$role->description}}</div>
        <div class="col-1">
            @if($role->status==1)
                Active
            @else
                Deactive
            @endif
        </div>
        <div class="col-1">
            <div class="d-flex">
                <a class="link-dark p-1" href="#"><i class="bi bi-shield-lock p-1 border border-2 border-primary rounded" style="color: blue;"></i></a>
                <a class="link-dark p-1" href="/role/{{$role->id}}/edit"><i class="bi bi-pencil p-1 border border-2 border-success rounded" style="color: green;"></i></a>
                <a class="link-dark p-1" href="#"><i class="bi bi-trash p-1 border border-2 border-danger rounded" style="color: red;"></i></a>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 justify-content-center">
            {{$roles->links('pagination::bootstrap-5')}}
        </div>
    </div>

</div>
@endsection