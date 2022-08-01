<?php

namespace App\Http\Controllers;

use App\Models\Model;
use App\Models\Brand;
use Illuminate\Http\Request;

class ModelsController extends Controller
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
        $models=Model::paginate(5);
        return view('models.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        return view('models.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'description' => '',
            'brand' => 'required',
            'status' => 'required',
        ]);

        $data=[
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'brand_id' => $request->brand,
        ];

        Model::create($data);
        return redirect('models');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model  $model
     * @return \Illuminate\Http\Response
     */
    public function show(Model $model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model  $model
     * @return \Illuminate\Http\Response
     */
    public function edit(Model $model)
    {
        $brands=Brand::all();
        return view('models.edit', compact('model', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Model  $model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model $model)
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => '',
            'status' => 'required',
        ]);
        Model::where('id', $model->id)->update($data);
        return redirect('models');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model $model)
    {
        Model::where('id', $model->id)->delete();
        return redirect('models');
    }
}
