<?php

use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminFAQController;
use App\Http\Controllers\AdminRegisUserController;
use App\Http\Controllers\AdminTeachersController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminCourseCategoryController;





Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// prevent to go back page
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

// Grouping routes that require 'auth' and 'verified' middleware    
Route::middleware(['auth', 'verified'])->group(function () {













    // ==================================================For Admin Route======================================================
    // Route for the admin dashboard, restricted to users with the 'admin' role
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->middleware('role:admin')
        ->name('admin.dashboard');
    // for delete a course
    Route::delete('/admin/dashboard/delete/{id}', [AdminController::class, 'destroy'])
    ->middleware('role:admin')->name('admin.dashboard.delete');
    // for update course
    // Route to display the edit form
    Route::get('/admin/AdminCourse/edit/{id}', [AdminCourseController::class, 'edit'])
    ->middleware('role:admin')->name('admin.AdminCourse.edit');
    // Route to update the course
    Route::put('/admin/AdminCourse/update/{id}', [AdminCourseController::class, 'update'])
    ->middleware('role:admin')->name('admin.AdminCourse.update');
    // Route for view courses form
    Route::get('/admin/dashboard/create', [AdminController::class, 'create'])->name('admin.dashboard.create');
    Route::post('/admin/dashboard/store',[AdminController::class,'store'])->name('admin.dashboard.store');
    // Route for Admin Contact View
    Route::get('/admin/AdminContact/index', [AdminContactController::class, 'index'])->name('admin.AdminContact.index');
    Route::delete('/admin/AdminContact/delete/{id}/',[AdminContactController::class, 'destroy'])->name('admin.AdminContact.delete');
    Route::delete('admin/AdminContact/truncate/{id}', [AdminContactController::class, 'truncateTable'])->name('admin.AdminContact.truncate');
    Route::post('/admin/AdminContact/truncateTable', [AdminContactController::class, 'truncateTable'])->name('admin.AdminContact.truncateTable');


    // Route for Admin Registered User
    Route::get('admin/RegisUsers', [AdminRegisUserController::class, 'index'])->name('admin.AdminRegisUsers.index');
    Route::delete('admin/RegisUsers/delete/{id}', [AdminRegisUserController::class, 'destroy'])->name('admin.RegisUsers.delete');
    
    // Route for Admin Teacher
    Route::get('admin/AdminTeacher/index',[AdminTeachersController::class,'index'])->name('admin.AdminTeacher.index');
    Route::get('admin/AdminTeacher/create',[AdminTeachersController::class,'create'])->name('admin.AdminTeacher.create');
    Route::post('admin/AdminTeacher/store',[AdminTeachersController::class,'store'])->name('admin.AdminTeacher.store');
    // Route for Admin FAQ's
    Route::get('admin/AdminFAQ/index',[AdminFAQController::class,'index'])->name('admin.AdminFAQ.index');
    Route::get('admin/AdminFAQ/create',[AdminFAQController::class, 'create'])->name('admin.AdminFAQ.create');
    ROute::post('admin/AdminFAQ/store',[AdminFAQController::class,'store'])->name('admin.AdminFAQ.store');
    // Route for Admin Course Category
    Route::get('admin/AdminCourseCategory/index',[AdminCourseCategoryController::class,'index'])->name('admin.AdminCourseCategory.index');
    Route::get('admin/AdminCourseCategory/create',[AdminCourseCategoryController::class,'create'])->name('admin.AdminCourseCategory.create');
    Route::post('admin/AdminCourseCategory/store',[AdminCourseCategoryController::class,'store'])->name('admin.AdminCourseCategory.store');
    Route::delete('admin/AdminCourseCategory/delete/{id}',[AdminCourseCategoryController::class,'destroy'])->name('admin.AdminCourseCategory.delete');
    // ==================================================For Admin Route End======================================================












    // =========================================For User Route======================================================
    // Route for the user dashboard, restricted to users with the 'user' role
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])
        ->middleware('role:user', 'noback')
        ->name('user.dashboard');
    // Route to display the About page
    Route::get('/user/about', [AboutController::class, 'about'])
        ->middleware('role:user')
        ->name('about');
    // Route to display the FAQ page
    Route::get('/user/courses', [CourseController::class, 'courses'])
        ->middleware('role:user')
        ->name('courses');
    // Route to display the contact form
    // yeh forms ko get karne ke liye hai
    Route::get('/user/contact', [ContactController::class, 'create'])->name('user.contact.create');
    Route::post('/user/contact', [ContactController::class, 'store'])->name('user.contact.store');
    // for student form route
    Route::get('/user/studentform', [FormController::class, 'create'])->name('user.form.create');
    Route::post('/user/studentform', [FormController::class, 'store'])->name('user.form.store');
    // for student specific route
    Route::get('user/form/{id}/show', [FormController::class, 'show'])->name('user.form.show');
});
// =========================================For User Route End======================================================
require __DIR__ . '/auth.php';
















// Route::group(['middleware' => ['web']], function () {
//     Route::get('/login', 'Auth\LoginController@showLoginForm');
//     Route::post('/login', 'Auth\LoginController@login');
// });

// Yeh jo dashboard ki file delete ki thi uska route location hai //
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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



