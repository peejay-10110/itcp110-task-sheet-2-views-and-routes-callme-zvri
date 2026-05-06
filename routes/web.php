<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/',                    [PortfolioController::class, 'index'])       ->name('home');
Route::get('/about',               [PortfolioController::class, 'about'])       ->name('about');
Route::get('/education',           [PortfolioController::class, 'education'])   ->name('education');
Route::get('/skills',              [PortfolioController::class, 'skills'])      ->name('skills');
Route::get('/projects/schoolife',  [PortfolioController::class, 'schoolife'])   ->name('projects.schoolife');
Route::get('/projects',            [PortfolioController::class, 'projects'])    ->name('projects.archive'); // renamed to match navbar
Route::get('/experience',          [PortfolioController::class, 'experience'])  ->name('experience');
Route::get('/hobbies',             [PortfolioController::class, 'hobbies'])     ->name('hobbies');
Route::get('/services',            [PortfolioController::class, 'services'])    ->name('services');
Route::get('/contact',             [PortfolioController::class, 'contact'])     ->name('contact');
Route::post('/contact',            [PortfolioController::class, 'sendMessage']) ->name('contact.send');