<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $articles = [
            [
                'title' => "mon premier article",
                'content' => 'Si vous avez déjà un dépôt Git local configuré pour votre projet et que vous souhaitez le pousser vers un dépôt distant (repository) sur GitHub, vous pouvez suivre ces étape'
            ],
            [
                'title' => "mon deuxième article",
                'content' => 'Si vous avez déjà un dépôt Git local configuré pour votre projet et que vous souhaitez le pousser vers un dépôt distant (repository) sur GitHub, vous pouvez suivre ces étape'
            ],
            [
                'title' => "mon troisième article",
                'content' => 'Si vous avez déjà un dépôt Git local configuré pour votre projet et que vous souhaitez le pousser vers un dépôt distant (repository) sur GitHub, vous pouvez suivre ces étape'
            ]
        ];


    return view('home',[
        'articles' => $articles
    ]);
});
