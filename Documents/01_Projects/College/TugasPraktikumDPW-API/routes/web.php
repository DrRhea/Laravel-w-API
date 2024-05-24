<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/doa', function () {
    $response = Http::withOptions([
        'verify' => base_path('storage/cacert.pem')
    ])->get('https://doa-doa-api-ahmadramadhan.fly.dev/api');
    $data = json_decode($response->body(), true);

    return view('doa.index', ['doas' => $data]);
});

Route::get('/jakpost', function () {
    $response = Http::withOptions([
        'verify' => base_path('storage/cacert.pem')
    ])->get('https://jakpost.vercel.app/api/category/business');
    $data = json_decode($response->body(), true);

    return view('jakpost.index', ['posts' => $data['posts']]);
});

Route::get('/pahlawan', function () {
    $response = Http::withOptions([
        'verify' => base_path('storage/cacert.pem')
    ])->get('https://indonesia-public-static-api.vercel.app/api/heroes');
    $data = json_decode($response->body(), true);

    return view('pahlawan.index', ['pahlawan' => $data]);
});

Route::get('/sekolah', function () {
    $response = Http::withOptions([
        'verify' => base_path('storage/cacert.pem')
    ])->get('https://api-sekolah-indonesia.vercel.app/sekolah');
    $data = json_decode($response->body(), true);

    return view('sekolah.index', ['sekolah' => $data['dataSekolah']]);
});

Route::get('/libur', function () {
    $response = Http::withOptions([
        'verify' => base_path('storage/cacert.pem')
    ])->get('https://dayoffapi.vercel.app/api');
    $data = json_decode($response->body(), true);

    return view('libur.index', ['libur' => $data]);
});



