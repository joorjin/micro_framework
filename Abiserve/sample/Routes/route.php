<?php

use App\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\ErrorHandler\Debug;
Debug::enable();


Route::get('/',[TestController::index()]);
