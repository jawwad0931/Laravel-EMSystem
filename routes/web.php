<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Grouping routes that require 'auth' and 'verified' middleware
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Route for the admin dashboard, restricted to users with the 'admin' role
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->middleware('role:admin')
        ->name('admin.dashboard');

    // Route for the user dashboard, restricted to users with the 'user' role
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])
        ->middleware('role:user')
        ->name('user.dashboard');

        Route::get('/user/about', [AboutController::class, 'about'])
        ->middleware('role:user')
        ->name('about'); 
        
        Route::get('/user/courses', [CourseController::class, 'courses'])
        ->middleware('role:user')
        ->name('courses');


        // Route to display the contact form
        // yeh forms ko get karne ke liye hai
        Route::get('/user/contact', [ContactController::class, 'create'])->name('user.contact.create');
        Route::post('/user/contact', [ContactController::class, 'store'])->name('user.contact.store');


        // for student form route
        Route::get('/user/studentform',[FormController::class,'create'])->name('user.form.create');
        Route::post('/user/studentform',[FormController::class,'store'])->name('user.form.store');

});


        





// Yeh jo dashboard ki file delete ki thi uska route location hai //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';


// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
//         ->middleware('role:admin')
//         ->name('admin.dashboard');

//     Route::get('/user/dashboard', [UserController::class, 'dashboard'])
//         ->middleware('role:user')
//         ->name('user.dashboard');
//         // Define a route for fetching all FAQs
//       // Define a route for fetching all FAQs specific to authenticated users with role 'user'
//       Route::middleware(['auth', 'verified'])->group(function () {
//         Route::get('/user/faqs', [FaqsController::class, 'index'])
//             ->middleware('role:user') // Applies role:user middleware
//             ->name('user.faqs'); // Ensure the name matches the route used in links or redirections
//         });

// });


// ---------------------------------------------------yeh role ka middleware hai---------------------
// Route::middleware(['auth','role:admin'])->group(function () {
//     Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
// });
// Route::middleware(['auth','role:user'])->group(function(){
//     Route::get('user/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');
// });
// ---------------------------------------------------yeh role ka middleware hai---------------------



