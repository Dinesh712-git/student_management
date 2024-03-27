<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'middleware' => ['auth', 'verified'],
    'namespace' => 'App\Http\Controllers', 
], function ($router) {
  
    Route::get('/dashboard', 'ViewController@ViewDashboard')->name('dashboard');

    Route::get('/add-stuent', 'ViewController@AddStudent')->name('add-stuent');
    Route::post('/create-student', 'StudentController@CreateStudent')->name('create-student');
    Route::post('/update-student/{id?}', 'StudentController@UpdateStudent')->name('update-student');

    



    //tble button
    Route::get('/view-student/{id?}', 'ViewController@ViewStudent')->name('view-student');
    Route::get('/edit-student/{id?}', 'ViewController@EditStudent')->name('edit-student');
    Route::get('/delete-student/{id?}', 'ViewController@DeleteStudent')->name('delete-student');



});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';