<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function services()
    {
        // Get unique categories from the services table
        $categories = Service::select('category')->distinct()->get();

        return view('services', compact('categories'));
    }
    // For /products page (all products)
    public function products()
    {
        $products = Service::all();
        return view('products', compact('products'));
    }
}