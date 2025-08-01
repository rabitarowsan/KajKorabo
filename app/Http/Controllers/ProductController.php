<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function details($id)
    {
        $product = Service::findOrFail($id);
        return view('products.show', compact('product'));
    }
}