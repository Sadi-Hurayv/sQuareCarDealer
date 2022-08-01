@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8 offset-2">

            <div class="card">
                <div class="card-header">
                    <h2 class="fw-bold">Edit Car</h2>
                    <p>Here you can edit the attributes of a car.</p>
                </div>

                <div class="card-body">
                    <form action="/cars/{{ $car->id }}" method="post">
                        @csrf
                        @method('PATCH')
                        <!-- Brand -->
                        <div class="form-group row px-3">
                            <label for="brand" class="col-md-4 col-form-label fw-bold">Brand</label>

                            <select id="brand" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ old('brand') }}" required autocomplete="brand" autofocus cols="30" rows="5">
                                <option selected disabled>Select Brand</option>
                                @foreach($brands as $brand)
                                <option @if ($car->brand_id == $brand->id)
                                    selected
                                    @endif
                                    value={{ $brand->id }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>

                            @error('brand')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Model -->
                        <div class="form-group row px-3">
                            <label for="model" class="col-md-4 col-form-label fw-bold">Model</label>

                            <select id="model" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="model" autofocus cols="30" rows="5">
                                <option selected disabled>Select Model</option>
                                @foreach($models as $model)
                                <option @if ($car->model_id == $model->id)
                                    selected
                                    @endif
                                value={{ $model->id }}>{{ $model->name }}</option>
                                @endforeach
                            </select>

                            @error('model')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group row px-3">
                            <label for="description" class="col-md-4 col-form-label fw-bold">Description</label>

                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus cols="30" rows="3">{{$car->description}}</textarea>


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
                                <option @if($car->status==1)
                                    selected
                                    @endif value=1>Active</option>
                                <option @if($car->status==2)
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