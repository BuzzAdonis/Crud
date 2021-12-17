<?php
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

/* en este caso accede a la carpeta empleado y tiene acceso a todas las vistas  Y tiene que estar logiado para poder acceder*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('employee', EmployeeController::class)->middleware('auth');
Auth::routes();
Route::get('/home', [EmployeeController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'], function (){
Route::get('/', [EmployeeController::class, 'index'])->name('home');
});

Auth::routes();
