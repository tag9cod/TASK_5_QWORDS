<?php

use Illuminate\Support\Facades\Route;
use App\Models\menuweb;
use App\Models\menufooter;
use App\Http\Controllers\Controller;

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

Route::get('/index', [MenuFront::class, 'index']);

Route::get('/', function () {
    
    return view('index', [
        "title" => "Qwords - Tri Adhi Gunawan",
        "heder" => "TAG-Dev",
        "menu" => menuweb::cloud(),
        "menu1" => menuweb::men(),
        "menu2" => menuweb::per(),
        "menu3" => menuweb::ac(),
        "menu4" => menuweb::ser(),
        "menu5" => menuweb::em(),
        "menu6" => menuweb::srv(),
        "menu7" => menuweb::cus(),
        "menu8" => menuweb::log(),
        "fut" => menufooter::km(),
        "fut1" => menufooter::ms(),
        "fut2" => menufooter::lay(),
        "fut3" => menufooter::ktr()
    ]);
});


