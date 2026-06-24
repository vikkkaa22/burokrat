<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Faq;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('is_active', true)->get();
        $events= Event::where('is_active', true)->get();
        $products = Product::where('is_active', true)->get();
        return view('welcome', compact('faqs','events','products'));

    }
}
