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

    // Corrected: Unique URLs for each direct form
    Route::get('/admin/direct/form-one',[DirectController::class,'directFormOne'])->name('admin.directFormOne');

    Route::get('/admin/direct/form-two',[DirectController::class,'directFormTwo'])->name('admin.directFormTwo');

    Route::get('/admin/direct/form-three',[DirectController::class,'directFormThree'])->name('admin.directFormThree');

   Route::get('/admin/indirect/first-form-one', [IndirectController::class, 'indirectFirstFormOne'])->name('admin.indirectFirstFormOne');

    Route::get('/admin/indirect/first-form-two', [IndirectController::class, 'indirectFirstFormTwo'])->name('admin.indirectFirstFormTwo');

    Route::get('/admin/indirect/second-form-one', [IndirectController::class, 'indirectSecondFormOne'])->name('admin.indirectSecondFormOne');

    Route::get('/admin/indirect/second-form-two', [IndirectController::class, 'indirectSecondFormTwo'])->name('admin.indirectSecondFormTwo');
    
    Route::get('/admin/indirect/second-form-three', [IndirectController::class, 'indirectSecondFormThree'])->name('admin.indirectSecondFormThree');

});
