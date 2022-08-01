<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Model;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::paginate(10);
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        $models=Model::all();
        return view('cars.create', compact('brands', 'models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'category' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'model_year' => ['required', 'numeric'],
            'engine_capacity' => ['required', 'numeric'],
            'horse_power' => ['required', 'numeric'],
            'torque' => ['required', 'numeric'],
            'odometer' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'status' => 'required',
        ]);
        $creator_id=auth()->user()->id;
        
        $data=[
            'category' => $request->category,
            'brand_id' => $request->brand,
            'model_id' => $request->model,
            'model_year' => $request->model_year,
            'engine_capacity' => $request->engine_capacity,
            'horse_power' => $request->horse_power,
            'torque' => $request->torque,
            'odometer' => $request->odometer,
            'price' => $request->price,
            'status' => $request->status,
            'creator_user_id' => $creator_id,
            'last_updater_user_id' => $creator_id,
        ];

        // dd($data);
        Car::create($data);
        return redirect('cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $brands=Brand::all();
        $models=Model::all();
        return view('cars.edit', compact('car', 'brands', 'models'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
