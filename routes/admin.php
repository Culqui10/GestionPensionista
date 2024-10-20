<?php

use App\Http\Controllers\Admin\Payment_MethodsController;
use Illuminate\Support\Facades\Route;

Route::resource('/payment_method',  Payment_MethodsController::class)->names('admin.payment_methods');
?>