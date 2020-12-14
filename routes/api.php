<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teste', function (Request $request) {

//    dd($request->headers->all());
//    dd($request->headers->get('Autorization'));

    $response = new \Illuminate\Http\Response(json_encode(['msg'=>'Minha primeira resposat de API']));
    $response->header('Content-Type', 'application/json');

    return $response;
});

//Products Route
Route::get('/products', function (){
    return \App\Models\Product::all();
});

