<?php

use App\Http\Controllers\ArretController;
use App\Http\Controllers\EnginController;
use App\Http\Controllers\NavireController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});



Route::get('/rapport',[RapportController::class,'create'])->middleware(['auth', 'verified'])->name('rapport');
Route::post('/rapport',[RapportController::class,'store'])->middleware(['auth', 'verified'])->name('rapport');
Route::get('/rapports',[RapportController::class,'index'])->middleware(['auth', 'verified'])->name('rapport.index');
Route::get('/rapport/show/{id}',[RapportController::class,'show'])->middleware(['auth', 'verified'])->name('rapport.show');
Route::get('/rapport/{id}',[RapportController::class,'destroy'])->middleware(['auth', 'verified'])->name('rapport.destroy');
Route::get('/rapports/search',[RapportController::class,'search'])->middleware(['auth', 'verified'])->name('rapports.search');
Route::get('/rapport/edit/{id}',[RapportController::class,'edit'])->middleware(['auth', 'verified'])->name('rapport.edit');
Route::post('/rapport/edit/{id}',[RapportController::class,'update'])->middleware(['auth', 'verified'])->name('rapport.update');



Route::get('/users',[UserController::class,'index'])->middleware(['auth', 'verified'])->name('users');
Route::get('/users/{id}',[UserController::class,'destroy'])->middleware(['auth', 'verified'])->name('users.destroy');




Route::get('/navires',[NavireController::class,'index'])->middleware(['auth', 'verified'])->name('navires');
Route::get('/navires/search',[NavireController::class,'search'])->middleware(['auth', 'verified'])->name('navires.search');
Route::get('/navires/show/{id}',[NavireController::class,'show'])->middleware(['auth', 'verified'])->name('navires.show');
Route::get('/navires/create',[NavireController::class,'create'])->middleware(['auth', 'verified'])->name('navires.create');
Route::post('/navires/create',[NavireController::class,'store'])->middleware(['auth', 'verified'])->name('navires.store');
Route::get('/navires/{id}',[NavireController::class,'destroy'])->middleware(['auth', 'verified'])->name('navires.destroy');
Route::get('/navires/edit/{id}',[NavireController::class,'edit'])->middleware(['auth', 'verified'])->name('navires.edit');
Route::post('/navires/edit/{id}',[NavireController::class,'update'])->middleware(['auth', 'verified'])->name('navires.update');


Route::get('/personnel/create',[PersonnelController::class,'create'])->middleware(['auth', 'verified'])->name('personnel.create');
Route::post('/personnel/create',[PersonnelController::class,'store'])->middleware(['auth', 'verified'])->name('personnel.store');
Route::get('/personnel/{id}',[PersonnelController::class,'destroy'])->middleware(['auth', 'verified'])->name('personnel.destroy');
Route::get('/personnel/edit/{id}',[PersonnelController::class,'edit'])->middleware(['auth', 'verified'])->name('personnel.edit');
Route::post('/personnel/edit/{id}',[PersonnelController::class,'update'])->middleware(['auth', 'verified'])->name('personnel.update');






Route::get('/engin/create',[EnginController::class,'create'])->middleware(['auth', 'verified'])->name('engin.create');
Route::post('/engin/create',[EnginController::class,'store'])->middleware(['auth', 'verified'])->name('engin.store');
Route::get('/engin/{id}',[EnginController::class,'destroy'])->middleware(['auth', 'verified'])->name('engin.destroy');
Route::get('/engin/edit/{id}',[EnginController::class,'edit'])->middleware(['auth', 'verified'])->name('engin.edit');
Route::post('/engin/edit/{id}',[EnginController::class,'update'])->middleware(['auth', 'verified'])->name('engin.update');




Route::get('/arret/create',[ArretController::class,'create'])->middleware(['auth', 'verified'])->name('arret.create');
Route::post('/arret/create',[ArretController::class,'store'])->middleware(['auth', 'verified'])->name('arret.store');
Route::get('/arret/{id}',[ArretController::class,'destroy'])->middleware(['auth', 'verified'])->name('arret.destroy');
Route::get('/arret/edit/{id}',[ArretController::class,'edit'])->middleware(['auth', 'verified'])->name('arret.edit');
Route::post('/arret/edit/{id}',[ArretController::class,'update'])->middleware(['auth', 'verified'])->name('arret.update');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::get('getEngin/{id}', function ($id) {
    $engins = App\Models\Engin::where('navire_id','=',$id)->get();
    return response()->json($engins);
});



require __DIR__.'/auth.php';

