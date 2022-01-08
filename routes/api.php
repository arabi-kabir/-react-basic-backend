<?php

use App\Http\Controllers\ChartDataController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeEtcController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['cors'])->group(function () {
    Route::get ('/chart-data', [ChartDataController::class, 'onAllSelect']);
    Route::get ('/client-review', [ClientReviewController::class, 'onAllSelect']);
    Route::post('/contact-send', [ContactController::class, 'onContactSend']);
    Route::get ('/course-home', [CourseController::class, 'onSelectFour']);
    Route::get ('/course-all', [CourseController::class, 'onSelectAll']);
    Route::get('/course-details/{courseId}', [CourseController::class, 'onSelectDetails']);
    Route::get ('/footer', [FooterController::class, 'onSelect']);
    Route::get ('/information', [InformationController::class, 'onSelect']);
    Route::get ('/service', [ServiceController::class, 'onSelect']);
    Route::get ('/projects', [ProjectController::class, 'onSelectAll']);
    Route::get ('/projects-3', [ProjectController::class, 'onSelect3']);
    Route::get ('/projects-details/{projectId}', [ProjectController::class, 'onSelectDetail']);
    Route::get ('/video-home', [HomeEtcController::class, 'onSelect']);
    Route::get ('/total-project-client', [HomeEtcController::class, 'onSelectToTalProjectClient']);
    Route::get ('/tech-description', [HomeEtcController::class, 'onSelectTechDescription']);
    Route::get ('/home-top-title', [HomeEtcController::class, 'onSelectTopTitle']);
});





