@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h2 class="fw-bold">Car Management</h2>
                <p>Here you can manage the cars.</p>
            </div>
            <div class="">
                <a class="btn btn-primary link-dark p-1" href="/cars/create"><i class="bi bi-patch-plus px-2" style="font-size: 2rem; color: white;"></i></a>
            </div>
        </div>

        <div class="card-body">

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-2 fw-bold">Car</div>
                        <div class="col-3 fw-bold">Description</div>
                        <div class="col-2 fw-bold">Category</div>
                        <div class="col-1 fw-bold">Status</div>
                        <div class="col-2 fw-bold text-center">Action</div>
                        <div class="col-1"></div>
                    </div>
                </li>

                @foreach($cars as $car)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-2 d-flex align-items-center">{{ $car->brand->name }} {{ $car->model->name }} {{ $car->model_year }}</div>
                        <div class="col-3">
                            {{ $car->brand->name }} {{ $car->model->name }} {{ $car->model_year }} <br>
                            Engine Capacity: {{$car->engine_capacity}} L <br>
                            Horse Power: {{$car->horse_power}} hp <br>
                            Torque: {{$car->torque}} rpm <br>
                            Odometer: {{$car->odometer}} km <br>
                            Price: {{$car->price}} $

                        </div>
                        <div class="col-2 d-flex align-items-center">{{$car->category}}</div>
                        <div class="col-1 d-flex align-items-center">
                            @if($car->status==1)
                            Active
                            @else
                            Deactive
                            @endif
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">

                                <a class="link-dark p-1" href="#"><i class="bi bi-shield-lock p-1 border border-2 border-primary rounded" style="color: blue;"></i></a>

                                <a class="link-dark p-1" href="/cars/{{$car->id}}/edit"><i class="bi bi-pencil p-1 border border-2 border-success rounded" style="color: green;"></i></a>

                                <form id="delete-car-{{ $car->id }}" class="hidden " action="/cars/{{ $car->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="link-dark p-1" href="javascript:void(0);" onclick="document.getElementById('delete-car-{{ $car->id }}').submit();"><i class="bi bi-trash p-1 border border-2 border-danger rounded" style="color: red;"></i></a>
                                </form>

                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </li>
                @endforeach
                <div class="row">
                    <div class="col-12 justify-content-center">
                        {{$cars->links('pagination::bootstrap-5')}}
                    </div>
                </div>

            </ul>

        </div>

    </div>

</div>
@endsection