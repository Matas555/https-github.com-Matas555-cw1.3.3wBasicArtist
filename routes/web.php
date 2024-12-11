<?php

use App\Models\Artist;
use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artists', [ArtistController::class, 'index'])
    ->name('artists.index');
 
Route::get('/artists/create', [ArtistController::class, 'create'])
    ->name('artists.create');

Route::post('/artists', [ArtistController::class, 'store'])
    ->name('artists.store');

Route::get('/artists/{id}', [ArtistController::class, 'show'])
    ->name('artists.show');

Route::get('/artists/{album}', function ($album) {
    return view('artists', ['artists'=>$album]);
});
Route::delete('artists/{id}', [ArtistController::class, 'destroy'])
    ->name('artists.destroy');

Route::get('/albums', [AlbumController::class, 'index']);

Route::get('/albums/{id}', [AlbumController::class, 'show']);

Route::get('/albums/{song}', function ($song) {
    return view('albums', ['albums'=>$song]);
});
