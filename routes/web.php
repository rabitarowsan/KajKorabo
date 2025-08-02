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
        // 1. Verify data received
        $data = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneNumber' => 'required|regex:/[0-9]/',
            'meetingTime' => 'required',
        ]);

        // 2. Manually create Carbon date
        try {
            $meetingTime = \Carbon\Carbon::createFromFormat('d/m/Y H:i', $request->meetingTime);
        } catch (\Exception $e) {
            dd('DATE PARSE ERROR', $e->getMessage(), 'Received:', $request->meetingTime);
        }

        // 3. Try raw DB insert
        try {
            $id = \DB::table('contact_requests')->insertGetId([
                'full_name' => $data['fullName'],
                'email' => $data['email'],
                'phone_number' => $data['phoneNumber'],
                'meeting_time' => $meetingTime,
                'service_id' => $service->id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            // If we get here, it worked!
            return redirect()
                ->route('products.details', $service->id)
                ->with('success', 'Thank you! We will contact you soon.');
                
        } catch (\Exception $e) {
            dd('DATABASE ERROR', $e->getMessage());
        }
    }

    return view('details', ['service' => $service]);
})->name('products.details');