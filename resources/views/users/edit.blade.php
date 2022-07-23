@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8 offset-2">

            <div class="card">
                <div class="card-header">
                    <h2 class="fw-bold">Edit Role</h2>
                    <p>Here you can edit the attributes of a role.</p>
                </div>

                <div class="card-body">
                    <form action="/role/{{ $role->id }}" method="post">
                        @csrf
                        @method('PATCH')
                        <!-- Name -->
                        <div class="form-group row px-3">
                            <label for="name" class="col-md-4 col-form-label fw-bold">Name</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $role->name}}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group row px-3">
                            <label for="description" class="col-md-4 col-form-label fw-bold">Description</label>

                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus cols="30" rows="3">{{$role->description}}</textarea>


                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group row px-3">
                            <label for="status" class="col-md-4 col-form-label fw-bold">Status</label>

                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                                <option disabled>Select Status</option>
                                <option @if($role->status==1)
                                    selected
                                    @endif value=1>Active</option>
                                <option @if($role->status==2)
                                    selected
                                    @endif value=2>Deactive</option>
                            </select>

                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row px-3 pt-4">
                            <button type="submit" class="col-md-2 btn btn-primary p-1">Save Role</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection