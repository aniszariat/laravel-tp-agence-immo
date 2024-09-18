<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use App\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{


    public function __construct(private Weather $weather) {}

    // public function index(Weather $weather)
    public function index()
    {
        // dd($this->weather);
        // dd(app(Weather::class)->isSunny());
        // $properties = Property::orderBy('created_at', 'desc')->where('sold', false)->limit(4)->get();
        // *using scope
        $properties = Property::recent()->available(false)->limit(4)->get();
        // dd($properties->first()->created_at);
        // $user = User::first();
        // $user->password = '0000';
        // dd($user, $user->password);
        return view('home', compact('properties'));
    }
}
