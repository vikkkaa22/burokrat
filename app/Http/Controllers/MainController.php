<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Room;
use Illuminate\Http\Request;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;
class MainController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('is_active', true)->get();
        $events= Event::where('is_active', true)->get();
        $products = Product::where('is_active', true)->get();
        $rooms = Room::where('is_active', true)->get();
        $settings = GeneralSetting::first(); 
        //dd($settings->more_configs['working_time']);
        return view('welcome', compact('faqs','events','products','settings','rooms'));

    }
}
