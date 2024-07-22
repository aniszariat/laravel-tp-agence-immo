<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyFormRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();
        return view('admin.properties.form', compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {
        $property = new Property;
        $property = Property::create($request->validated());
        return redirect()->route('admin.property.index')->with('status', 'Bien ajouté avec succès');
        // return redirect()->route('admin.property.show', $property)->with('status', 'Bien ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show(Property $property)
    {
        return view('admin.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('admin.properties.form', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, Property $property)
    {
        $property->update($request->validated());
        return redirect()->route('admin.property.index')->with('status', 'Bien modifié avec succès');
        // return redirect()->route('admin.property.show', $property)->with('status', 'Bien modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('admin.property.index')->with('status', 'Bien supprimé avec succès');
    }
}
