<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students', [StudentController::class, 'index']);

Route::get('/dashboard', [StudentController::class, 'dashboard'])
    ->name('dashboard');

Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');

Route::get('/students/create', [StudentController::class, 'create'])
    ->name('students.create');

Route::post('/students', [StudentController::class, 'store'])
    ->name('students.store');

Route::get('/students/{student}', [StudentController::class, 'show'])
    ->name('students.show');

Route::get('/students/{student}/edit', [StudentController::class, 'edit'])
    ->name('students.edit');

Route::put('/students/{student}', [StudentController::class, 'update'])
    ->name('students.update');

Route::delete('/students/{student}', [StudentController::class, 'destroy'])
    ->name('students.destroy');



Route::get('/debug', function () {
    $message = 'Laravel debugging successful!';
    return $message;
});
