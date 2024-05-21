<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

Route::get('/landing', function () {
    return view('landing', ['heroes' => []]);
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});


    Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');

    Route::get('/heroes/pdf', [HeroController::class, 'pdf']);

    Route::get('/heroes/csv-all', [HeroController::class, 'generateCSV']);
    Route::post('/heroes/import-csv', [HeroController::class, 'importCsv'])->name('heroes.import.csv');

    Route::get('/scanner', function () {
        return view('scanner');
            })->name('scanner');

    Route::get('/import-sql', [HeroController::class, 'importSql'])->name('heroes.import.sql');
    Route::post('/import-sql', [HeroController::class, 'importSql'])->name('heroes.import.sql');

    Route::get('/database', [HeroController::class, 'showDatabase'])->name('heroes.show.database');

