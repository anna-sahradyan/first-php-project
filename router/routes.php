<?php

use App\Services\Router;
use App\Controllers\Auth;

Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/', 'home');
Router::post("/auth/register",Auth::class,"register");
Router::enable();
?>






