<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Slider;
use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $testimonials = Testimonial::get();
        $agents = Agent::get();
        $properties = Property::with('galleries')->get();
        
        return view('home', compact('sliders', 'testimonials', 'agents', 'properties'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function property()
    {
        $properties = Property::with('galleries')->get();

        return view('property', compact('properties'));
    }

    public function detail(Property $property)
    {
        return view('detail', compact('property'));
    }
}
