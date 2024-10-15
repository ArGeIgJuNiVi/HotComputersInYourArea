<?php

use Illuminate\Support\Facades\Route;

Route::get("/the/meaning/of/life/the/universe/and/everythin{_}", function () {
    return "42";
});

Route::get("/", function () {
    return "Ignas";
});

Route::get("/login", function () {
    return "Arhanas";
});

Route::get("/register", function () {
    return "Arhanas";
});

Route::get("/account", function () {
    return "Arhanas";
});

Route::get("/products/list", function () {
    return "Ignas";
});

Route::get("/products/edit", function () {
    return "Niconas";
});

Route::get("/kart", function () {
    return "Gerardas";
});

Route::get("/checkout", function () {
    return "Gerardas";
});

Route::get("/receipt", function () {
    return "Gerardas";
});

Route::get("/error", function () {
    return "Ignas";
});

//apis
Route::get("/api/get-product", function () {
    return "Niconas";
});

Route::get("/api/add-product", function () {
    return "Niconas";
});

Route::get("/api/modify-product", function () {
    return "Niconas";
});

Route::get("/api/remove-product", function () {
    return "Niconas";
});

Route::get("/api/get_account", function () {
    return "Justinas";
});

Route::get("/api/add_account", function () {
    return "Justinas";
});

Route::get("/api/modify_account", function () {
    return "Justinas";
});

Route::get("/api/remove_account", function () {
    return "Justinas";
});

Route::get("/api/add-kart-item", function () {
    return "Viktoras";
});

Route::get("/api/remove-kart-item", function () {
    return "Viktoras";
});

Route::get("/api/get-kart-items", function () {
    return "Viktoras";
});
