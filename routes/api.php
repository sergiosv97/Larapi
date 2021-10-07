<?php

use Illuminate\Http\Request;
use App\Post;
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
Route::get('/testing', function () {
    return ['message'=> 'hello'];
}); 


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//1. get all (GET) /api/posts
//2. create a post (POST) /api/posts
//3. get a single (GET) /api/posts/{id}
//4.update a single (PUT/PATCH) /api/posts{id}
//5. delete (DELETE) /api/posts/{id}

Route::resource('posts','PostController');


//to create a resource (posts) in laravel
//1. create the database and migrations
//php artisan make:model Post --migration
//2.create a model
//2.5 create a service? Eloquent ORM
//3. create a controller to go get info from the database
//4. return that info