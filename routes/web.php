<?php

use App\Http\Controllers\Dashboard\ClientController;
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
    return redirect()->route('login');
});

Route::group([
    'prefix' => 'dashboard/clientes',
    'as' => 'client.',
    'controller' => ClientController::class,
    'middleware' => [
        'auth',
    ],
], function () {
    Route::get('/', 'index')->name('index');

    Route::post('/datatable', 'datatable')->name('datatable');

    Route::get('{id}/show', 'show')->name('show');

    Route::get('/create', 'create')->name('create');

    Route::post('/', 'store')->name('store');

    Route::get('{id}/edit', 'edit')->name('edit');

    Route::put('{id}/update', 'update')->name('update');

    Route::get('{id}/confirm-delete', 'confirmDelete')->name('confirm_delete');

    Route::delete('{id}/delete', 'delete')->name('delete');
});

require __DIR__.'/auth.php';
