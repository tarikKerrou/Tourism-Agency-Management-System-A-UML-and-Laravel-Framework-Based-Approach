<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\TourController ;
use App\Http\Controllers\JourController ;
use App\Http\Controllers\PlanController ;
use App\Http\Controllers\GuideController ;
use App\Http\Controllers\ChoiceController ;
use App\Http\Controllers\PaiementController ;

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

Route::get('/welcome', function () {return view('welcome');});
    
Route::get('/', [TourController::class, 'viewTour'])->name('index');
//Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function(){
   Route::get('/dashboard', function() { return view('dashboard');
})->name('dashboard');});

Route::get('/redirect',[HomeController::class  ,'redirect']) ;

//Route::get('/', [TourController::class, 'listTour'])->name('index');
//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/addtour/{id}',[TourController::class, 'addTour']);
Route::post('/savetour', [TourController::class, 'saveTour'])->name('tour.save');
Route::get('/tours',[TourController::class, 'index']);
Route::get('/tour/edit/{id}',[TourController::class, 'editTour'])->name('tour.edit');
Route::put('/tour/update/{id}',[TourController::class, 'updateTour'])->name('tour.update');
Route::get('/tour/delete/{id}',[TourController::class, 'deleteTour'])->name('tour.delete');
Route::get('/tour/{id}/detail',[TourController::class, 'detailTour']);
Route::get('/dashboard',[TourController::class, 'viewTour'])->name('dashboard');
//Route::get('/tour/detail/{id}',[TourController::class, 'getTour']);

Route::get('/addguide',[GuideController::class, 'addGuide']);
Route::post('/saveguide', [GuideController::class, 'saveGuide'])->name('guide.save');
Route::get('/guides',[GuideController::class, 'index']);
Route::get('/guide/edit/{id}',[GuideController::class, 'editGuide'])->name('guide.edit');
Route::get('/guide/delete/{id}',[GuideController::class, 'deleteGuide'])->name('guide.delete');
Route::put('/guide/update/{id}',[GuideController::class, 'updateGuide'])->name('guide.update');
Route::get('/guide/{id}/detail',[GuideController::class, 'detailGuide']);

Route::get('/addjour/{id}',[JourController::class, 'addJour']);
Route::post('/savejour', [JourController::class, 'saveJour'])->name('jour.save');
//Route::get('/jours',[JourController::class, 'index']);
Route::get('/jour/edit/{id}',[JourController::class, 'editJour'])->name('jour.edit');
Route::get('/jour/delete/{id}',[JourController::class, 'deleteJour'])->name('jour.delete');
Route::put('/jour/update/{id}',[JourController::class, 'updateJour'])->name('jour.update');
Route::get('/jour/{id}/detail',[JourController::class, 'detailJour']);

Route::get('/addplan',[PlanController::class, 'addPlan']);
Route::post('/saveplan', [PlanController::class, 'savePlan'])->name('plan.save');
Route::get('/plans',[PlanController::class, 'index']);
Route::get('/plan/edit/{id}',[PlanController::class, 'editPlan'])->name('plan.edit');
Route::get('/plan/delete/{id}',[PlanController::class, 'deletePlan'])->name('plan.delete');
Route::put('/plan/update/{id}',[PlanController::class, 'updatePlan'])->name('plan.update');
Route::get('/plan/{id}/detail',[PlanController::class, 'detailPlan']);

//Route::get('/reserve',[ChoiceController::class, 'addChoice']);
Route::post('/save', [ChoiceController::class, 'saveChoice'])->name('choice.save');
Route::get('/choices',[ChoiceController::class, 'index']);
Route::get('/panier',[ChoiceController::class, 'listChoice'])->name('panier');
Route::get('/tour/detail/{id}',[ChoiceController::class, 'addChoice']);

Route::get('/pay/{id}',[PaiementController::class, 'addPaiement']);
Route::post('/savepay', [PaiementController::class, 'savePaiement'])->name('paiement.save');
Route::get('/reserved',[PaiementController::class, 'listPaiement']);
Route::get('/cancel/{id}',[PaiementController::class, 'annulerChoice'])->name('Choice.delete');


//Route::get('/tours','TourController@index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
