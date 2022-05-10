<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\permisos\Models\Role;
use App\Models\permisos\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\HomeController;

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

Route::get('/integrantes', function () {
    return view('integrantes');
});

Auth::routes();

// Route::get('/perfil/edit/user/{id}')
Route::get('/perfil/user/{id}', [PerfilController::class,'index'])->middleware('userperfil')->name('perfil');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/test', function () {
    
    $user =User::find(2);

    //$user->roles()->sync([2]);
    Gate::authorize('haveaccess','role.show');
    return $user;
    //return $user->havePermission('role.create'); 
});

Route::get('/registeruser', [UserController::class, 'index_regis'])->name('user.register');

Route::get('/roles',[RoleController::class,'index'])->name('role.index');

Route::post('/roles/store',[RoleController::class,'store'])->name('role.store'); 

Route::get('/roles/create',[RoleController::class,'create'])->name('role.create');

Route::get('/roles/show',[RoleController::class,'show'])->name('role.show');

Route::get('/roles/edit/{id}',[RoleController::class,'edit'])->name('role.edit');

Route::post('/roles/update',[RoleController::class,'update'])->name('role.update');

Route::delete('/roles/destroy/{roles}',[RoleController::class,'destroy'])->name('role.destroy'); 

Route::get('/users/{id}', [VistasController::class, 'index'])->name('test');

Route::get('/user',[UserController::class,'index'])->name('user.index');

Route::get('/user/show',[UserController::class,'show'])->name('user.show');

Route::get('/user/edit',[UserController::class,'edit'])->name('user.edit');

Route::get('/user/update',[UserController::class,'update'])->name('user.update');

Route::delete('/user/destroy/{user}',[UserController::class,'destroy'])->name('user.destroy'); 

Route::post('/perfil/student',[PerfilController::class,'store_student'])->name('perfil.student'); 

Route::get('/prueba', function () {
    
     

    //$user->roles()->sync([2]);
    Gate::authorize('haveaccess','role.show');
    return $user;
});

//Son llamadas por form
Route::post('/perfil/store', [PerfilController::class,'store'])->name('perfil.store');

/* Primero crea laruta para enviar a la vista de editar perfil-> retornar vista con controlador.,
Segundo tiene que hacer la vista.
Tercero  crear metodo en el controller Perfil (Hacer logica de actualizar datos)

 */
