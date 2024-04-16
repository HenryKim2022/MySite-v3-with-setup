<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// // Add other routes as needed
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

// // // // CONFIG
use App\Http\Controllers\ConfigurationController;
Route::get('/doc', [ConfigurationController::class, 'showDocPage'])->name('doc');
Route::get('/configure', [ConfigurationController::class, 'showConfigurationPage'])->name('configure');     // FORM VIEWER
Route::post('/configure', [ConfigurationController::class, 'saveConfiguration'])->name('configure.save');   // CONFIG FORM SAVER
if (env('APP_INSTALL', false)) {    // Not False
    Route::redirect('/', '/configure');    
} else {
    Route::get('/configure', function () {
        return redirect('/');
    });
    
    Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
}

