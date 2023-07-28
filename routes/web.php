<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Контроллер юзера
use Illuminate\Http\Request;


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
    // return view('welcome');
    return view('home');
});

Route::view('/contacts', 'contact', [
    'telephon' => '+7 (800) 322 45 12',
    'email' => 'manager@site-laravel.com'
]);

// Нет такого походу контроллека? Не работает
// Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'index']);

// 302 временно доступен по другому адрессу
// Route::redirect('/user', '/users');
// 301 ресур был перемещён навсегда
// Route::redirect('/user', '/users', 301);

// Route::get('/users', function (Request $request) {
//     dump($request);
//     dump($request->query);
//     dump($request->method());
// });

Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

