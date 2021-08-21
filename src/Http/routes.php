<?php

use Weiwait\Distpicker\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('distpicker', Controllers\DistpickerController::class.'@index');