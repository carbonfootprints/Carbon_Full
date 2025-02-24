<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoundaryController;
use App\Http\Controllers\DirectController;
use App\Http\Controllers\IndirectController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
})->name('authlogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');  







Route::middleware(['auth'])->group(function () {
    Route::get('/admin/default', function () {
        return view('admin.default');
    })->name('default');

    Route::get('/admin/production',[ProductionController::class, 'index'])->name('admin.production');
    Route::get('/admin/boundary',[BoundaryController::class, 'index'])->name('admin.boundary');
    Route::get('/admin/direct',[DirectController::class,'index'])->name('admin.direct');
    Route::get('/admin/indirect',[IndirectController::class,'index'])->name('admin.indirect');
    Route::get('/admin/organisation',[OrganisationController::class,'index'])->name('admin.organisation');
    Route::get('/admin/visit',[VisitController::class,'index'])->name('admin.visit');

    
});