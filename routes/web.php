<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kanji.index', [
        'kanji' => config('kanji'),
    ]);
});
