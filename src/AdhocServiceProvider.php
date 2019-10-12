<?php

namespace Adhocc;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AdhocServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }
}
