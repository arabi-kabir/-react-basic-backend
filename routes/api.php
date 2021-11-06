<?php

use App\Http\Controllers\ChartDataController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get ('/chart-data', [ChartDataController::class, 'onAllSelect']);
Route::get ('/client-review', [ClientReviewController::class, 'onAllSelect']);
Route::post('/contact-send', [ContactController::class, 'onContactSend']);

Route::get ('/course-home', [CourseController::class, 'onSelectFour']);
Route::get ('/course-all', [CourseController::class, 'onSelectAll']);
Route::post('/course-details', [CourseController::class, 'onSelectDetails']);
