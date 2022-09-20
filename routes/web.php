<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'index']);
Route::get('/about',[FrontendController::class,'about']);
Route::get('/software',[FrontendController::class,'software']);
Route::get('/hardware',[FrontendController::class,'hardware']);
Route::get('/digitalmarketing',[FrontendController::class,'digitalmarketing']);
Route::get('/blog',[FrontendController::class,'blog']);
Route::get('/blogdetail',[FrontendController::class,'blogdetail']);
Route::get('/contact',[FrontendController::class,'contact']);
Route::get('/privacypolicy',[FrontendController::class,'privacypolicy']);
Route::post('/submit-contact-form',[FrontendController::class,'storecontactform'])->name('Store-Contact-Form');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [BackendController::class, 'index'])->name('Dashboard');
    Route::get('/profile', [BackendController::class, 'profile'])->name('Profile');
    Route::post('/update-profile', [BackendController::class, 'updateprofile'])->name('Update-Profile');
    Route::get('/reset-password', [BackendController::class, 'resetpassword'])->name('Reset-Password');
    Route::post('/store-reset-password', [BackendController::class, 'storeresetpassword'])->name('Store-Reset-Password');
    Route::get('/contacts',[BackendController::class,'contacts'])->name('Contacts');
    Route::get('/delete/{id}',[BackendController::class,'destroycontacts'])->name('Delete-Contact');
});

require __DIR__.'/auth.php';
