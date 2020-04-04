<?php

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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes([
    'register' => false,
]);

Route::group(['middleware' => ['auth']], function () {
    //User
    require __DIR__ .'/user.php';
    //Roles
    require __DIR__ .'/roles.php';
    //Permisos
    require __DIR__ .'/permisos.php';
    //Empresas
    require __DIR__ .'/empresas.php';
    //Contactos
    require __DIR__ .'/contactos.php';
    //EmpresaContactos
    require __DIR__ .'/empresacontactos.php';
    //Pus
    require __DIR__ .'/pus.php';
});

