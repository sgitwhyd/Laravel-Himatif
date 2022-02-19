<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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

Route::get('/', function () {
    return view('index');
});

// route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register route
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store']);


// dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'user' => User::find(auth()->user()->id)
    ]);
})->middleware('auth');

Route::resource('/dashboard/user', UserDashboardController::class)->middleware('auth')->scoped(['user' => 'username']);

// print pdf
Route::get('/print-data-pdf/{user:username}', function () {
    $pdf = PDF::setOptions(['isHtml5ParseEnabled' => true, 'isRemoteEnabled' => true])->loadView('pdf.user', [
        'user' => User::find(auth()->user()->id),
    ]);
    return $pdf->stream(auth()->user()->username . '.pdf', ['Attachment' => false]);
})->middleware('auth');
