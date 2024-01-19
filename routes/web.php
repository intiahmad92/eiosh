<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FilerController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CaseStudiesController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\CourseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('login', [LoginController::class,'login']);

Route::post('ajax_upload_file',[FilerController::class, 'upload'])->name('filer.image-upload');
Route::post('ajax_remove_file',[FilerController::class, 'fileDestroy'])->name('filer.image-remove');

Route::get('blog',[BlogsController::class, 'index'])->name('blogs.list');
Route::get('blog/{slug}',[BlogsController::class, 'detail'])->name('blogs.detail');

Route::get('courses',[CourseController::class, 'index'])->name('Courses.list');
Route::get('course/{slug}',[CourseController::class, 'detail'])->name('Courses.detail');

Route::get('services/{service}',[ServicesController::class, 'index'])->name('services.list');
Route::get('service/{slug}',[ServicesController::class, 'detail'])->name('services.detail');
Route::get('case-studies',[CaseStudiesController::class, 'index'])->name('case-studies.list');
Route::get('case-studies/{slug}',[CaseStudiesController::class, 'detail'])->name('case-studies.detail');

Route::post('contact-us',[ContactusController::class, 'store'])->name('contact.post');


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/analysis/{slug}', function ($slug) {
        $analysis = App\Models\ModulesData::where('slug',$slug)->first();
        return view('video_detail',compact('analysis'));
    })->name('video_detail');
});


Route::get('/{slug}', function ($slug) {
    $cms = App\Models\ModulesData::where('slug',$slug)->first();
    return view('cms',compact('cms'));
});
