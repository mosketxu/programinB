<?php

Route::post('empresa/store','EmpresaController@store')->name('empresa.store')
->middleware('can:empresas.create');

Route::get('empresa','EmpresaController@index')->name('empresa.index')
->middleware('can:empresas.index');

Route::get('empresa/create','EmpresaController@create')->name('empresa.create')
->middleware('can:empresas.create');

Route::put('empresa','EmpresaController@update')->name('empresa.update')
->middleware('can:empresas.edit');

Route::get('empresa/{empresa}','EmpresaController@show')->name('empresa.show')
->middleware('can:empresas.show');

Route::delete('empresa/{empresa}','EmpresaController@destroy')->name('empresa.destroy')
->middleware('can:empresas.destroy');

Route::get('empresa/{empresa}/edit','EmpresaController@edit')->name('empresa.edit')
->middleware('can:empresas.edit');

// Route::get('empresa/{empresa}/go','EmpresaController@go')->name('empresa.go')
// ->middleware('can:empresas.edit'); 

