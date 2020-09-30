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


// Handle the API request for /galler
Route::get("/user", function(){
  $results = DB::select('select * from user_data where user_id = :user_id', ['user_id' => 1]);
  $results = base64_encode(json_encode($results));
  return $results;

});

// Handle the API request for /galler
Route::get("/gallery", function(){
  $results = DB::select('select * from photos where user_id = :user_id', ['user_id' => 1]);
  $results = base64_encode(json_encode($results));
  file_put_contents(__DIR__ . "/../resources/demo_files/response.json", $results);
  return $results;

});
