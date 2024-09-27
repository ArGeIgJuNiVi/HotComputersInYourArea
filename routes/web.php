<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/the/meaning/of/life/the/universe/and/everythin{_}", function () {
    return "42";
});
