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

                        <div class="form-group row px-3 d-flex justify-content-between">
                            <!-- Category -->
                            <div class="col-md-6">
                                <label for="category" class="col-md-4 col-form-label fw-bold">Category</label>

                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $car->category }}" required autofocus>

                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Brand -->
                            <div class="col-md-6">
                                <label for="brand" class="col-md-4 col-form-label fw-bold">Brand</label>

                                <select id="brand" class="form-control @error('brand') is-invalid @enderror" name="brand" required autofocus>
                                    <option selected disabled>Select Brand</option>
                                    @foreach($brands as $brand)
                                    <option @if($brand->id==$car->brand_id) selected @endif value={{ $brand->id }}>
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
                        </div>

                        <div class="form-group row px-3 d-flex justify-content-between">
                            <!-- Model -->
                            <div class="col-md-6">
                                <label for="model" class="col-md-4 col-form-label fw-bold">Model</label>

                                <select id="model" class="form-control @error('model') is-invalid @enderror" name="model" required autofocus>
                                    <option selected disabled>Select Model</option>
                                    @foreach($models as $model)
                                    <option @if($model->id==$car->model_id) selected @endif value={{ $model->id }}>{{ $model->name }}</option>
                                    @endforeach
                                </select>

                                @error('model')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Model Year -->
                            <div class="col-md-6">
                                <label for="model_year" class="col-md-4 col-form-label fw-bold">Model Year</label>

                                <input id="model_year" type="number" class="form-control @error('model_year') is-invalid @enderror" name="model_year" value="{{ $car->model_year }}" required autofocus>

                                @error('model_year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row px-3 d-flex justify-content-between">
                            <!-- Engine Capacity -->
                            <div class="col-md-6">
                                <label for="engine_capacity" class="col-md-6 col-form-label fw-bold">Engine Capacity (Liter)</label>

                                <input id="engine_capacity" type="number" step=".001" class="form-control @error('engine_capacity') is-invalid @enderror" name="engine_capacity" value="{{ $car->engine_capacity }}" required autofocus>

                                @error('engine_capacity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Horse Power -->
                            <div class="col-md-6 ">
                                <label for="horse_power" class="col-md-4 col-form-label fw-bold">Horse Power</label>

                                <input id="horse_power" type="number" class="form-control @error('horse_power') is-invalid @enderror" name="horse_power" value="{{ $car->horse_power }}" required autofocus>

                                @error('horse_power')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row px-3 d-flex justify-content-between">
                            <!-- Torque -->
                            <div class="col-md-6">
                                <label for="torque" class="col-md-6 col-form-label fw-bold">Torque (RPM)</label>

                                <input id="torque" type="number" class="form-control @error('torque') is-invalid @enderror" name="torque" value="{{ $car->torque }}" required autofocus>

                                @error('torque')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Odometer -->
                            <div class="col-md-6">
                                <label for="odometer" class="col-md-4 col-form-label fw-bold">Odometer (KM)</label>

                                <input id="odometer" type="number" class="form-control @error('odometer') is-invalid @enderror" name="odometer" value="{{ $car->odometer }}" required autofocus>

                                @error('odometer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row px-3 d-flex justify-content-between">
                            <!-- Price -->
                            <div class="col-md-6">
                                <label for="price" class="col-md-6 col-form-label fw-bold">Price ($)</label>

                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $car->price }}" required autofocus>

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <label for="status" class="col-md-4 col-form-label fw-bold">Status</label>

                                <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required autofocus>
                                    <option selected disabled>Select Status</option>
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
                        </div>

                        <div class="row px-3 pt-4 d-flex justify-content-center">
                            <button type="submit" class="col-md-2 btn btn-primary p-1">Register</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection