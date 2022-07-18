@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/role" method="post">
        @csrf

        <div class="row">
            <div class="card col-8 offset-2 card px-4 py-2 my-4">

                <div class="card-header row">
                    <h2 class="fw-bold">Add New Role</h2>
                </div>

                <div class="card-body">
                    <!-- Name -->
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label fw-bold">Name</label>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label fw-bold">Description</label>

                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus cols="30" rows="5"></textarea>
                        

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-md-4 col-form-label fw-bold">Status</label>

                        <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" autocomplete="status" autofocus cols="30" rows="5">
                            <option selected disabled>Select Status</option>
                            <option value=1>Active</option>
                            <option value=2>Deactive</option>
                        </select>

                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button type="submit" class="col-md-2 btn btn-primary p-1">Add New Role</button>
                    </div>
                </div>

            </div>
        </div>

    </form>

</div>
@endsection

<!-- An extraordinary, colorful 'DJ_Wolf'. The wolf is using some instrument to play recorded music in some strange way!!! -->