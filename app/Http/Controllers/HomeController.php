<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{


    public function __construct(private Weather $weather)
    {
    }

    // public function index(Weather $weather)
    public function index()
    {
        // dd($this->weather);
        // dd(app(Weather::class)->isSunny());
        $properties = Property::orderBy('created_at', 'desc')->paginate(3);
        // dd($properties);
        return view('home', compact('properties'));
    }
}
