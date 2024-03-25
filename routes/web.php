<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BonlivraisonController;

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
////////////////////////////////////////
Route::get('/clients', [ClientController::class, 'index'])->name('Clients.clients');
Route::match(['get', 'post'], '/createclient', [ClientController::class, 'create'])->name('createclient');
Route::post('/createclient', [ClientController::class, 'store'])->name('Clients.store');
Route::get('/editclient/{id}', [ClientController::class, 'edit'])->name('Clients.editclient');
Route::put('/editclient/{id}', [ClientController::class, 'update'])->name('Clients.updateclient');
Route::delete('/deleteclient/{id}', [ClientController::class, 'destroy'])->name('Clients.deleteclient');
///////////////////////////////////////
Route::get('/bonlivraisons', [BonlivraisonController::class, 'index'])->name('bonlivraisons.index');
Route::get('/createbonlivraison', [BonlivraisonController::class, 'create'])->name('createbonlivraison');
Route::post('/storebonlivraison', [BonlivraisonController::class, 'store'])->name('storebonlivraison');
Route::get('/editbonlivraison/{id}', [BonlivraisonController::class, 'edit'])->name('editbonlivraison');
Route::put('/editbonlivraison/{id}', [BonlivraisonController::class, 'update'])->name('updatebonlivraison');
Route::delete('/deletebonlivraison/{id}', [BonlivraisonController::class, 'destroy'])->name('deletebonlivraison');
