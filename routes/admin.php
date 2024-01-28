<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\ModulesController;
use App\Http\Controllers\Admin\ModulesDataController;
use App\Http\Controllers\Admin\WidgetPagesController;
use App\Http\Controllers\Admin\WidgetsController;
use App\Http\Controllers\Admin\WidgetDataController;
use App\Http\Controllers\Admin\ContactusController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::resource('permissions', PermissionsController::class);

Route::resource('roles', RolesController::class);

Route::get('/add-columns', [ModulesController::class,'add_columns'])->name('add_columns');
Route::get('/add-module-data-columns', [ModulesController::class,'add_module_data_columns'])->name('add_module_data_columns');


Route::get('/contact-us-messages', [ContactusController::class,'index'])->name('contact-us-messages');

Route::get('/contact-us-detail/{id}', [ContactusController::class,'detail'])->name('contact-us-detail');




Route::get('/widget-pages', [WidgetPagesController::class,'index'])->name('widget_pages');
Route::get('/add-widget-page', [WidgetPagesController::class,'add'])->name('widget_pages.add');
Route::post('/store-widget-page', [WidgetPagesController::class,'store'])->name('widget_pages.store');
Route::post('/update-widget-page', [WidgetPagesController::class,'update'])->name('widget_pages.update');
Route::get('/edit-widget-page/{widget_page}', [WidgetPagesController::class,'edit'])->name('widget_pages.edit');
Route::get('/delete-widget-page/{widget_page}', [WidgetPagesController::class,'destroy'])->name('widget_pages.delete');

Route::get('/widgets', [WidgetsController::class,'index'])->name('widgets');
Route::get('/add-widget', [WidgetsController::class,'add'])->name('widgets.add');
Route::post('/store-widget', [WidgetsController::class,'store'])->name('widgets.store');
Route::post('/update-widget', [WidgetsController::class,'update'])->name('widgets.update');
Route::get('/edit-widget/{widget}', [WidgetsController::class,'edit'])->name('widgets.edit');
Route::get('/delete-widget/{widget}', [WidgetsController::class,'destroy'])->name('widgets.delete');

Route::get('/widget-page/{page}', [WidgetDataController::class,'index'])->name('widgets_data');
Route::post('/store-widget-data/{id}', [WidgetDataController::class,'store'])->name('widget_data.store');
Route::post('/update-widget-page', [WidgetDataController::class,'update'])->name('widget_pages.update');
Route::get('/delete-widget-page/{widget_page}', [WidgetPagesController::class,'destroy'])->name('widget_pages.delete');



Route::get('/modules', [ModulesController::class,'index'])->name('modules');
Route::get('/add-module', [ModulesController::class,'add'])->name('modules.add');
Route::post('/store-module', [ModulesController::class,'store'])->name('modules.store');
Route::post('/update-module', [ModulesController::class,'update'])->name('modules.update');
Route::get('/edit-module/{module}', [ModulesController::class,'edit'])->name('modules.edit');
Route::get('/delete-module/{module}', [ModulesController::class,'destroy'])->name('modules.delete');


Route::get('/{module}/delete/{id}', [ModulesDataController::class,'destroy'])->name('modules.data.delete');
Route::get('/delete-file/{id}/{field}', [ModulesDataController::class,'destroyFile'])->name('modules.data.delete.file');
Route::get('/download-files/{id}/{module}', [ModulesDataController::class,'downloadFiles'])->name('modules.data.download.files');
Route::get('/data-status/{module}/{status}', [ModulesDataController::class,'update_status']);
Route::get('/module-data', [ModulesDataController::class,'fetchModulesData'])->name('modules.data.fetch');
Route::get('/{module}', [ModulesDataController::class,'index'])->name('modules.data');
Route::get('/{module}/add', [ModulesDataController::class,'add'])->name('modules.data.add');
Route::post('/{module}/store', [ModulesDataController::class,'store'])->name('modules.data.store');
Route::post('/{module}/update', [ModulesDataController::class,'update'])->name('modules.data.update');
Route::get('/{module}/edit/{id}', [ModulesDataController::class,'edit'])->name('modules.data.edit');
Route::get('/{module}/preview/{id}', [ModulesDataController::class,'preview'])->name('modules.data.preview');



Route::get('/{module}', [ModulesDataController::class,'index'])->name('modules.data');






