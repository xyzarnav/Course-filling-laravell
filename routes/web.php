<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\YourTableController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/dsh', function () {
    return view('dashboard');
});

Route::get('/admin1', function () {
    return view('admin');
});

// Authentication Routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::any('logouter', [AuthController::class, 'logout'])->name('logouter');

// Dashboard Route
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('register-course', [CourseController::class, 'registerCourse'])->name('register.course');
// Course Routes
Route::post('dashboard', [CourseController::class, 'dashboard'])->name('dashboard');

Route::get('course-dashboard', [CourseController::class, 'dashboard'])->name('course.dashboard');
Route::get('logout-redirect', [AuthController::class, 'logoutAndRedirect'])->name('logout.redirect');

Route::get('/arjun', function () {
    return view('panel');
});



Route::get('/ad', [AuthController::class, 'index'])->name('users.index');
Route::get('/admin1', [AdminController::class, 'showUsers'])->name('view.admin');
Route::get('/cor', [CourseController::class, 'viewcor'])->name('course.view');

Route::get('/course', [CourseController::class, 'tableViewer'])->name('table.viewer');
Route::delete('/courses/{course}', [CourseController::class, 'destroy']);


Route::post('/courses/new',[CourseController::class, 'new_one']);
Route::get('/logout', function () {
    Auth::logout();
    return view('welcome2');
})->name('logout.home');


Route::delete('/course/delete/{userId}/{courseId}', [CourseController::class, 'delete'])->name('course.delete');

Route::get('course-dashboard', [CourseController::class, 'dashboard'])->name('course.dashboard');

Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');

Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::get('/courses/after-fourth', [CourseController::class, 'displayAfterFourth'])->name('courses.after4');

// web.php


Route::get('/table-viewer', [CourseController::class, 'tableViewer'])->name('table.viewer');



Admin::routes();

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('your-table', YourTableController::class);
});
