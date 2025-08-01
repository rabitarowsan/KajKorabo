<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Models\Service;
use App\Http\Controllers\CustomerMeetingController;
use App\Models\ContactRequest;

Route::get('/', function () {
    return view('okayy');
});

Route::get('/services', [
    ServiceController::class, 'services'])->name('services');


Route::get('/products', [
    ServiceController::class, 'products'])->name('products');

//Route::get('/products/{id}', function($id) {
//    $service = Service::findOrFail($id);
//    return view('details', ['service' => $service] );
//})->name('products.details');


Route::match(['get', 'post'], '/products/{id}', function (Request $request, $id) {
    $service = Service::findOrFail($id);

    if ($request->isMethod('POST')) {
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneNumber' => 'required|regex:/[0-9]/',
            'meetingTime' => 'required|date',
        ]);

        ContactRequest::create([
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'phone_number' => $validated['phoneNumber'],
            'meeting_time' => $validated['meetingTime'],
            'service_id' => $service->id,
        ]);

        return redirect()->route('products.details', $service->id)->
                            with('success', 'Thank you! We will contact you soon.');
    }

    return view('details', ['service' => $service]);
})->name('products.details');