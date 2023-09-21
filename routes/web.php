<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Categories\Categories;
use App\Http\Livewire\JobRequests\JobRequests;
use App\Http\Livewire\JobRequests\Step1;
use App\Http\Livewire\JobRequests\Step2;
use App\Http\Livewire\JobRequests\Step3;
use App\Http\Livewire\JobRequests\Step4;
use App\Http\Livewire\JobRequests\Step5;
use App\Http\Livewire\JobRequests\Step6;
use App\Http\Livewire\JobRequests\Steps;

use App\Http\Controllers\HomeController;
use App\Models\JobRequest;
use App\Http\Livewire\UserForm1;
use App\Http\Livewire\UserForm2;


// Rutas públicas (sin autenticación requerida)

Route::get('/',         [HomeController::class, 'home'])->name('home');
Route::get('/about',    [HomeController::class, 'about'])->name('about');
Route::get('/contact',  [HomeController::class, 'contact'])->name('contact');
Route::get('/blog',     [HomeController::class, 'blog'])->name('blog');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/policy',   [HomeController::class, 'policy'])->name('policy');
Route::get('/terms',    [HomeController::class, 'terms'])->name('terms');

//Rutas para solicitudes de trabajo. Estas rutas permiten la visualización de las vistas que capturan de la necesidad del usuario

Route::get('job-requests/', JobRequests::class)->name('job-requests'); //Componente principal
Route::get('job-requests/step1',  Step1::class)->name('step1');
Route::get('job-requests/step2',  Step2::class)->name('step2');
Route::get('job-requests/step3',  Step3::class)->name('step3');
Route::get('job-requests/step4',  Step4::class)->name('step4');
Route::get('job-requests/step5',  Step5::class)->name('step5');
Route::get('job-requests/step6',  Step6::class)->name('step6');
Route::get('job-requests/steps',  Steps::class)->name('steps');



Route::get('/user-form-1', UserForm1::class)->name('user-form-1');
Route::get('/user-form-2', UserForm2::class)->name('user-form-2');





// Rutas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    // Rutas para el dashboard
    Route::get('/dashboard', function () {
        return view('home.home');
    })->name('dashboard');

});
