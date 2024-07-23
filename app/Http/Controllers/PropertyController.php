<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchFormRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(SearchFormRequest $request)
    {
        $q = Property::query();
        if ($request->has('price') && $request->validated('price')) {
            $q = $q->where("price", '<=', $request->input('price'));
        }
        if ($request->has('surface') && $request->validated('surface')) {
            $q = $q->where("surface", '>=', $request->input('surface'));
        }
        if ($request->has('rooms') && $request->validated('rooms')) {
            $q = $q->where("rooms", '>=', $request->input('rooms'));
        }
        if ($request->has('text') && $request->validated('text')) {
            $q = $q->where("title", 'like', "%{$request->input('text')}%")->orWhere("description", 'like', "%{$request->input('text')}%");
        }

        // $properties = $q->orderBy('created_at', 'desc')->paginate(25);
        $properties = $q->paginate(25);
        $input = $request->validated();

        return view('properties.index', compact('properties', 'input'));
    }
    public function show(string $slug, Property $property)
    {
        if (!$property->exists()) {
            return redirect()->route('property.index')->whith('success', 'bien non exixstant');
        }
        $propertySlug = $property->getSlug();
        if ($slug !== $propertySlug) {
            return to_route('property.show', [$propertySlug, $property]);
        }
        return view('properties.show', compact('property'));
    }
}
