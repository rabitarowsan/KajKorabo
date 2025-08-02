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
    public function products(Request $request)
    {
        $slug = $request->query('category');

         $categoryMap = [
        'mobile-app-development' => 'Mobile App Development',
        'digital-marketing-seo' => 'Digital Marketing & SEO',
        'ai-data-services' => 'AI & Data Services',
        'software-automation' => 'Software & Automation',
        'cybersecurity' => 'Cybersecurity',
        'ui-ux-design' => 'UI/UX & Design',
        'multimedia-visuals' => 'Multimedia & Visuals',
        'web-development' => 'Web Development',
        'business-enterprise-solutions' => 'Business & Enterprise Solutions',
        'e-commerce-solutions' => 'E-Commerce Solutions',
        'cloud-devops' => 'Cloud & DevOps'
         ];
     
         if ($slug && isset($categoryMap[$slug])) {
             $category = $categoryMap[$slug];
             $products = Service::where('category', $category)->get();
         } else {
             $category = null;
             $products = Service::all();
         }

        return view('products', [
            'products' => $products,
            'filteredCategory' => $category
        ]);
    }


    
    public function show($id)
    {
        $service = Service::with('images')->findOrFail($id);
        return view('details', compact('service'));
    }
}