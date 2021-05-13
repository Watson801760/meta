<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("arreglos", function () {
    $estudiantes = ["Ana", "Maria", "Jorge"];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";
});
Route::get('paises', function () {
    $paises = [
        "COLOMBIA" => [
            "capital" => "Bogotà",
            "moneda" => "Peso",
            "poblacion" => 50.34
        ],
        "PERU" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 60.34
        ],
        "PARAGUAY" => [
            "capital" => "Asunci",
            "moneda" => "Guarani",
            "poblacion" => 70.34
        ]

    ];
     return view("paises")->with("naciones", $paises);

});
