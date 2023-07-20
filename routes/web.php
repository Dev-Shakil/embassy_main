<?php


use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmbassyController;
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
    return view('welcome');
});

#verification route
Route::any('/signup', [ViewController::class, 'signup'])->name('signup');
Route::any('/login', [ViewController::class, 'login'])->name('login');

#user routes
Route::any('/user/index', [UserController::class, 'index'])->name('user/index');
Route::any('/user/visaadd/{id}', [UserController::class, 'visa_add'])->name('user/visaadd');
Route::any('/user/edit/{id}', [UserController::class, 'edit'])->name('user/edit');
Route::any('/user/personal_edit/{id}', [UserController::class, 'personal_edit'])->name('user/personal_edit');
Route::any('/user/visa_edit/{id}', [UserController::class, 'visa_edit'])->name('user/visa_edit');
Route::any('/user/embassy_list', [UserController::class, 'embassy_list'])->name('user/embassy_list');
Route::any('/user/update', [UserController::class, 'update'])->name('user/update');
Route::any('/user/print/{id}', [UserController::class, 'printer'])->name('user/print');
Route::any('/user/get', [UserController::class, 'get'])->name('getpassport');
// Route::post('/user/addcandidate', 'CandidateController@addCandidate')->name('user.addcandidate');
Route::any('user/logout', [UserController::class, 'logout'])->name('user/logout');
#admin routes
Route::any('/admin/index', [AdminController::class, 'index'])->name('admin');
Route::any('/ádmin/edit/{id}', [AdminController::class, 'edit'])->name('admin/edit');
Route::any('/ádmin/view/{id}', [AdminController::class, 'view'])->name('admin/view');
Route::any('/ádmin/delete/{id}', [AdminController::class, 'delete'])->name('admin/delete');

#embassy routes
Route::get('/user/embassy/{id}', [EmbassyController::class, 'sendcandidate'])->name('user/embassy');