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

    $data = config('db.data');
    $pastificioLink = config('db.pastificioLink');
    $collezioneChefLink = config('db.collezioneChefLink');
    $prodottiLink = config('db.prodottiLink');
    $infoAzienda = config('db.infoAzienda');
    $corta = [];
    $lunga = [];
    $cortissima = [];
    foreach ($data as $key => $pasta){
        $pasta['id'] = $key;
        if ($pasta['tipo'] == 'corta'){
            $corta[] = $pasta;
        } elseif ($pasta['tipo'] == 'lunga'){
            $lunga[] = $pasta;
        } elseif ($pasta['tipo'] == 'cortissima'){
            $cortissima[] = $pasta;
        }
    }
    return view('home', [
        'corte' => $corta,
        'lunghe' => $lunga,
        'cortissime' => $cortissima,
        'pastificioLink' => $pastificioLink,
        'collezioneChefLink' => $collezioneChefLink,
        'prodottiLink' => $prodottiLink,
        'infoAzienda' => $infoAzienda
    ]);
})->name('homepage');

Route::get('/prodotti/{id}', function ($id) {
    $data = config('db.data');
    $pasta = $data[$id];
    $next = ($id == (count($data) - 1) ) ? 0 : $id + 1;
    $prev = ($id == 0) ? (count($data) - 1) : $id - 1;
    $pastificioLink = config('db.pastificioLink');
    $collezioneChefLink = config('db.collezioneChefLink');
    $prodottiLink = config('db.prodottiLink');
    $infoAzienda = config('db.infoAzienda');
    return view('prodotti',[
        'pastificioLink' => $pastificioLink,
        'collezioneChefLink' => $collezioneChefLink,
        'prodottiLink' => $prodottiLink,
        'infoAzienda' => $infoAzienda,
        'pasta' => $pasta,
        'next' => $next,
        'prev' => $prev
    ]);

})->where('id', '[0-9]+')->name('prodotti');

Route::get('/ultime-notizie', function () {
    $pastificioLink = config('db.pastificioLink');
    $collezioneChefLink = config('db.collezioneChefLink');
    $prodottiLink = config('db.prodottiLink');
    $infoAzienda = config('db.infoAzienda');
    return view('news',[
        'pastificioLink' => $pastificioLink,
        'collezioneChefLink' => $collezioneChefLink,
        'prodottiLink' => $prodottiLink,
        'infoAzienda' => $infoAzienda
    ]);

})->name('news');