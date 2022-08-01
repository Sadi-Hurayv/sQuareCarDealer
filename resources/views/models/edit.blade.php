@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8 offset-2">

            <div class="card">
                <div class="card-header">
                    <h2 class="fw-bold">Edit Model</h2>
                    <p>Here you can edit the attributes of a car model.</p>
                </div>

                <div class="card-body">
                    <form action="/models/{{ $model->id }}" method="post">
                        @csrf
                        @method('PATCH')
                        <!-- Brand -->
                        <div class="form-group row px-3">
                            <label for="brand" class="col-md-4 col-form-label fw-bold">Brand</label>

                            <select id="brand" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ old('brand') }}" required autofocus>
                                <option selected disabled>Select Brand</option>
                                @foreach($brands as $brand)
                                <option @if($brand->id==$model->brand_id) selected @endif value={{ $brand->id }}>
                                    {{ $brand->name }}
                                </option>
                                @endforeach
                            </select>

                            @error('brand')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Name -->
                        <div class="form-group row px-3">
                            <label for="name" class="col-md-4 col-form-label fw-bold">Name</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $model->name}}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group row px-3">
                            <label for="description" class="col-md-4 col-form-label fw-bold">Description</label>

                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus cols="30" rows="3">{{$model->description}}</textarea>


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
                                <option @if($model->status==1)
                                    selected
                                    @endif value=1>Active</option>
                                <option @if($model->status==2)
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
                            <button type="submit" class="col-md-2 btn btn-primary p-1">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection