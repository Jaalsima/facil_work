<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobRequestController;
use App\Http\Controllers\JobReviewController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
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

// Rutas públicas (sin autenticación requerida)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

// Rutas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    // Rutas para el dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas para solicitudes de trabajo
    Route::resource('job_requests', JobRequestController::class);

    // Rutas para reseñas de trabajos
    Route::get('/job_requests/{job_request}/review', [JobReviewController::class, 'create'])->name('job_reviews.create');
    Route::post('/job_requests/{job_request}/review', [JobReviewController::class, 'store'])->name('job_reviews.store');

    // Rutas para mensajes
    Route::get('/job_requests/{job_request}/message', [MessageController::class, 'create'])->name('messages.create');
    Route::post('/job_requests/{job_request}/message', [MessageController::class, 'store'])->name('messages.store');
    Route::get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show');
    Route::get('/messages/{message}/read', [MessageController::class, 'markAsRead'])->name('messages.markAsRead');

    // Rutas para pagos
    Route::get('/job_requests/{job_request}/payment', [PaymentController::class, 'create'])->name('payments.create');
    Route::post('/job_requests/{job_request}/payment', [PaymentController::class, 'store'])->name('payments.store');
    Route::get('/payments/{payment}', [PaymentController::class, 'show'])->name('payments.show');
    Route::get('/payments/{payment}/process', [PaymentController::class, 'processPayment'])->name('payments.processPayment');
    Route::get('/payments/{payment}/confirm', [PaymentController::class, 'confirmPayment'])->name('payments.confirmPayment');

    // Rutas para cotizaciones
    Route::resource('quotations', QuotationController::class);

    // Rutas para habilidades
    Route::resource('skills', SkillController::class);

    // Rutas para usuarios
    Route::resource('users', UserController::class);

    // Rutas para visitas
    Route::get('/job_requests/{job_request}/visit', [VisitController::class, 'create'])->name('visits.create');
    Route::post('/job_requests/{job_request}/visit', [VisitController::class, 'store'])->name('visits.store');
    Route::get('/visits/{visit}', [VisitController::class, 'show'])->name('visits.show');
    Route::get('/visits/{visit}/confirm', [VisitController::class, 'confirmVisit'])->name('visits.confirmVisit');
    Route::get('/visits/{visit}/complete', [VisitController::class, 'completeVisit'])->name('visits.completeVisit');



    Route::get('/visits/slug:{visit}');
});
