<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RolesController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Create Role.
     * 
     * @return 'roles.create'
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store Role.
     * post-data(name, description) from a form from roles.create 
     * 
     * @return 
     */
    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'description' => '',
        ]);

        role()->create([
            'caption' => $data['caption'],
            'description' => $data['description'],
        ]); //Entry the data to the database

        return redirect('home');
    }
}
