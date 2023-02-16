<?php

use Umangp\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Umangp\Inspire\Controllers\InspirationController;

Route::get('inspire', [InspirationController::class,'justDoit']);
