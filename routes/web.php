<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Card;
Route::get('/', [HomeController::class, 'index'])->name('home');
// Blog page: reuse header/footer from the main app layout

Route::get('/blog', function () {
     $cards = Card::paginate(3); // получаем все записи из таблицы products
    return view('blog', compact('cards'));
})->name('blog');
