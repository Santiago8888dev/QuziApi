<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [QuestionController::class, 'show']);
Route::get('/fetch', [QuestionController::class, 'fetchInsert']);
