@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8 offset-2">

            <div class="card">
                <div class="card-header">
                    <h2 class="fw-bold">Register Brand</h2>
                    <p>Here you can register a new brand.</p>
                </div>

                <div class="card-body">
                    <form action="/brands" method="post">
                        @csrf
                        <!-- Name -->
                        <div class="form-group row px-3">
                            <label for="name" class="col-md-4 col-form-label fw-bold">Name</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group row px-3">
                            <label for="description" class="col-md-4 col-form-label fw-bold">Description</label>

                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus cols="30" rows="3"></textarea>


                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group row px-3">
                            <label for="status" class="col-md-4 col-form-label fw-bold">Status</label>

                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus cols="30" rows="5">
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

                        <div class="row px-3 pt-4">
                            <button type="submit" class="col-md-2 btn btn-primary p-1">Register</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
