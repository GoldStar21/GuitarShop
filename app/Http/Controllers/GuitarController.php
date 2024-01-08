<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('webshop.create');

      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Validate input

        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'color' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image_path' => 'nullable|file',
            
        ]);



        Guitar::create($request->all());

   
    }

    /**
     * Display the specified resource.
     */
    public function show(Guitar $guitar)
    {
        $webshop = Guitar::all();
        return view('webshop.create',['webshop'=> $webshop]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guitar $guitar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guitar $guitar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guitar $guitar)
    {
        //
    }
}
