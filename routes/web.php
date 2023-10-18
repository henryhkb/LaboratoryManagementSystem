<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\labResultController;
use App\Http\Controllers\addIronStudyController;

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
    return view('login');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

//Route for Reproductive Essay
Route::get('/reproAssay', function(){
    return view('Hormones.reproductiveAssay');
});
Route::post('addLabResult', [labResultController::class, 'addLabResult']);
Route::get('/ViewreproAssay', [labResultController::class, 'viewReproAssay']);


//Route for Iron Study
Route::get('/ironStudy', function(){
    return view('IronStudy.studyIron');
});
Route::post('/addIronStudy', [addIronStudyController::class, 'addIronStudy']);
Route::get('/viewIronStudy', [addIronStudyController::class,'viewIronStudy']);