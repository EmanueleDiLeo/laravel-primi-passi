<?php

use Illuminate\Support\Facades\Route;

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
    $title = 'Hello World';
    return view('home', compact('title'));
});

Route::get('/about', function () {
    $title = 'About';
    $message='Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores magnam repudiandae necessitatibus explicabo esse praesentium hic expedita in voluptas dicta delectus cupiditate iusto ipsam inventore aperiam vel, quo maxime fugiat nobis quaerat, voluptatum enim, quis quia. Rerum, culpa reiciendis, consequuntur harum quis nihil asperiores quas, quidem delectus voluptatem optio voluptatum.';
    return view('about',compact('title','message'));
});
