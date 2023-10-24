<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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
    return view('welcome');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



//securing the view for NON_AUTHORIZE logins
Route::middleware('auth')->group(function (){
    
    //routes all about task
    Route::get('/task', [TaskController::class, 'index'])->name('task.index'); //the route that shows all task
    Route::get('/task/new', [TaskController::class, 'newtask'])->name('task.newtask'); // route for generating new task
    Route::post('/task', [TaskController::class, 'store'])->name('task.store'); // route for storing or posting  the task in the db
    Route::get('/task/{tasks}/edit', [TaskController::class, 'edit'])->name('task.edit'); // getting the ID of the task on the DB and showing it
    Route::put('/task/{tasks}/update', [TaskController::class, 'update'])->name('task.update');// also based on ID and will update the data
    Route::delete('/task/{tasks}/delete', [TaskController::class, 'delete'])->name('task.delete');// deleteing the data
    

});



require __DIR__.'/auth.php';
