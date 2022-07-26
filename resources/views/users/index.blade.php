@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">

        <div class="card-header">
            <h2 class="fw-bold">User Management</h2>
            <p>Here you can view and manage your site users.</p>
        </div>

        <div class="card-body">

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-2 fw-bold">Role</div>
                        <div class="col-2 fw-bold">Name</div>
                        <div class="col-3 fw-bold">Email</div>
                        <div class="col-1 fw-bold">Status</div>
                        <div class="col-2 fw-bold text-center">Action</div>
                        <div class="col-1"></div>
                    </div>
                </li>

                @foreach($users as $user)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-2">Role</div>
                        <div class="col-2">{{$user->name}}</div>
                        <div class="col-3">{{$user->email}}</div>
                        <div class="col-1">
                            status
                        </div>
                        <div class="col-2">
                            <div class="d-flex justify-content-center align-items-center">

                                <a class="link-dark p-1" href="#"><i class="bi bi-eye p-1 border border-2 border-primary rounded" style="color: blue;"></i></a> <!-- to show/view sigle user profile -->

                                <a class="link-dark p-1" href="/users/{{$user->id}}/edit"><i class="bi bi-pencil p-1 border border-2 border-success rounded" style="color: green;"></i></a>

                                <form id="delete-user-{{ $user->id }}" class="hidden " action="/users/{{ $user->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="link-dark p-1" href="javascript:void(0);" onclick="document.getElementById('delete-user-{{ $user->id }}').submit();"><i class="bi bi-trash p-1 border border-2 border-danger rounded" style="color: red;"></i></a>
                                </form>

                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </li>
                @endforeach
                <div class="row">
                    <div class="col-12 justify-content-center">
                        {{$users->links('pagination::bootstrap-5')}}
                    </div>
                </div>

            </ul>

        </div>

    </div>

</div>
@endsection