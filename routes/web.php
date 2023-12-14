<?php

use App\Http\Controllers\NotifController;
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

Route::get('/', [NotifController::class, 'index']);
Route::get('/administrator', [NotifController::class, 'show'])->name('administrator');

Route::get('/administrator/test', [NotifController::class, 'sendNotifToClient'])->name('notif.realtime.client');
Route::get('/administrator/test-admin', [NotifController::class, 'SendNotifToAdmin'])->name('notif.realtime.admin');
