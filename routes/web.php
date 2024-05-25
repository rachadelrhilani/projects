<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\projetController;
use Illuminate\Support\Facades\Auth;
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
//les routes des pages de site
Route::get('/',[projetController::class,"Déconnection"])->name('Déconnection');
Route::get('/architecture',[projetController::class,"archi"])->name('archi');
Route::get('/switch',[projetController::class,"switch"])->name('go');
Route::get('/citrix',[projetController::class,"citrix"])->name('citrix');
Route::get('/citrixBEC',[projetController::class,"citrix2"])->name('citrixBEC');
Route::get('/citrixRSUS',[projetController::class,"citrix3"])->name('citrixRSUS');
Route::get('/serveurs',[projetController::class,"serveurs"])->name('serveurs');
Route::get('/Systèmesinfomation',[projetController::class,"sys"])->name('Systemesinfo');
Route::get('/Guides',[projetController::class,"guide"])->name('guide');
Route::get('/ajoute1',[projetController::class,"ajoute1"])->name('ajoute1');
Route::get('/ajoute2',[projetController::class,"ajoute2"])->name('ajoute2');
Route::get('/ajoute3',[projetController::class,"ajoute3"])->name('ajoute3');
Route::get('/ajoute4',[projetController::class,"ajoute4"])->name('ajoute4');
Route::get('/ajoute5',[projetController::class,"ajoute5"])->name('ajoute5');
Route::get('/ajoute6',[projetController::class,"ajoute6"])->name('ajoute6');
Route::get('/modifie1/{id}/modifieswitch',[projetController::class,"modifie1"])->name('modifie1');
Route::get('/modifie2/{id}/modifieAncien',[projetController::class,"modifie2"])->name('modifie2');
Route::get('/modifie3/{id}/modifieBEC',[projetController::class,"modifie3"])->name('modifie3');
Route::get('/modifie4/{id}/modifieRSUS',[projetController::class,"modifie4"])->name('modifie4');
Route::get('/modifie5/{id}/serveur',[projetController::class,"modifie5"])->name('modifie5');
Route::get('/modifie6/{id}/info',[projetController::class,"modifie6"])->name('modifie6');
//Les CRUD DE SITE
Route::post('/logino',[projetController::class,'login'])->name('log_in');
Route::delete('/citrix/{id}', [ProjetController::class, 'ancienDelete'])->name('delete_ancien');
Route::delete('/citrix/BEC/{id}', [ProjetController::class, 'BECDelete'])->name('BECDelete');
Route::delete('/citrix/RSUS/{id}', [ProjetController::class, 'RSUSDelete'])->name('RSUSDelete');
Route::delete('/serveurs/{id}', [ProjetController::class, 'serveurdelete'])->name('serveurdelete');
Route::delete('/Systèmesinfomation/DELETE/{id}', [ProjetController::class, 'deletesysinfo'])->name('deletesysinfo');
Route::delete('/switch/{id}', [ProjetController::class, 'switchdelete'])->name('switchdelete');
Route::put('/put/{id}', [ProjetController::class, 'ancienupdate'])->name('ancienupdate');
Route::put('/put2/{id}/BEC', [ProjetController::class, 'BECupdate'])->name('BECupdate');
Route::put('/put3/{id}/RSUS', [ProjetController::class, 'RSUSupdate'])->name('RSUSupdate');
Route::put('/put4/{id}/info', [ProjetController::class, 'infoUpdate'])->name('infoUpdate');
Route::put('/put6/{id}/switch', [ProjetController::class, 'switchupdate'])->name('switchupdate');
Route::put('/put5/{id}/serveur', [ProjetController::class, 'serveurupdate'])->name('serveurupdate');
Route::post('/ajouteAncien',[projetController::class,'ajouteAncien'])->name('ajouteAncien');
Route::post('/ajouteBEC',[projetController::class,'ajouteBEC'])->name('ajouteBEC');
Route::post('/ajouteRSUS',[projetController::class,'ajouteRSUS'])->name('ajouteRSUS');
Route::post('/Systèmesinfomation',[projetController::class,'sysinfo'])->name('sysinfo');
Route::post('/Systèmesinfomation/ajouter',[projetController::class,'ajouteinfo'])->name('ajouteinfo');
Route::post('/serveurs',[projetController::class,'serveursshow'])->name('serveursshow');
Route::post('/serveur/ajouter',[projetController::class,'ajouteserveur'])->name('ajouteserveur');
Route::post('/switch',[projetController::class,'switchshow'])->name('switchshow');
Route::post('/switch/ajouter',[projetController::class,'switchajoute'])->name('switchajoute');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
