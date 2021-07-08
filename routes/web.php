<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return redirect()->route('auth.login.page');
});

Route::get('login', [AuthController::class,'loginPage'])->name('auth.login.page');
Route::post('login', [AuthController::class,'login'])->name('auth.login');
Route::get('logout', [AuthController::class,'logout'])->name('auth.logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::prefix('/dashboard')->group(function (){
     // Income Controller : CRUD
    Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');
    Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');
    Route::post('/incomes', [IncomeController::class, 'store'])->name('incomes.store');
    Route::get('/incomes/{id}/edit', [IncomeController::class, 'edit'])->name('incomes.edit');
    Route::put('/incomes/{id}', [IncomeController::class, 'update'])->name('incomes.update');
    Route::get('/incomes/{id}', [IncomeController::class, 'delete'])->name('incomes.delete');


});
