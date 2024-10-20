<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\LogRequests;

// Group all routes with 'web' and 'LogRequest' middleware
Route::middleware(['web', LogRequests::class])->group(function () {

    // Route to store age in session
    Route::post('/store-age', function (Request $request) {
        $age = $request->input('age');
        session(['age' => $age]); // Store age in session
    });

    // Route to display the username input form
    Route::view('/', 'accReq');

    // Route to handle form submission via POST
    Route::post('/index', function (Request $request) {
        $name = $request->input('username') ?? 'Guest';  // Retrieve username
        session(['user_name' => $name]);  // Store username in session
        return redirect('/index');  // Redirect to welcome page
    });

    // Group routes requiring CheckAge middleware
    Route::middleware(CheckAge::class)->group(function () {

        // Route to handle GET requests to /welcome with CheckAge middleware
        Route::get('/index', function () {
            $name = session('user_name') ?? 'Guest';  // Retrieve name from session
            return view('index', compact('name'));  // Pass the name to the welcome view
        });

        // Route for access denied page
        Route::get('/access-denied', function () {
            return view('access-denied'); // When age is not valid
        });

        // New route with CheckAge middleware enforcing age of 21 and above
        Route::get('/homepage', function () {
            return view('index'); // Your view for the restricted area
        })->middleware(CheckAge::class.':21'); // Apply CheckAge with age parameter of 21// Apply CheckAge with age of 21 and above
    });

});



Route::get('/activity1', function () {
    return view('activity1');
});

Route::get('/activity2', function () {
    return view('activity2');
});

Route::get('/activity3', function () {
    return view('activity3');
});

Route::get('/activity4', function () {
    return view('activity4');
});


