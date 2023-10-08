<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::resource('dashboard/categories', CategoryController::class)->middleware(['auth']);
