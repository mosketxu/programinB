<?php


Route::get('empresacontacto','EmpresaContactoController@index')->name('empresacontacto.index')
->middleware('can:empresacontactos.index');

Route::get('empresacontacto/create','EmpresaContactoController@create')->name('empresacontacto.create')
->middleware('can:empresacontactos.create');

Route::put('empresacontacto/{empresa}','EmpresaContactoController@update')->name('empresacontacto.update')
->middleware('can:empresacontactos.edit');

Route::get('empresacontacto/{empresa}','EmpresaContactoController@show')->name('empresacontacto.show')
->middleware('can:empresacontactos.show');

Route::delete('empresacontacto/{empresa}','EmpresaContactoController@destroy')->name('empresacontacto.destroy')
->middleware('can:empresacontactos.destroy');

Route::get('empresacontacto/{empresa}/edit','EmpresaContactoController@edit')->name('empresacontacto.edit')
->middleware('can:empresacontactos.edit');

Route::get('empresacontacto/{empresa}/go','EmpresaContactoController@go')->name('empresacontacto.go')
->middleware('can:empresacontactos.edit');

