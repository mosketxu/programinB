<?php

Route::post('conta/store','ContaController@store')->name('conta.store')
->middleware('can:contas.create');

Route::get('conta/{empresa}','ContaController@index')->name('conta.index')
->middleware('can:contas.index');

Route::get('conta/create','ContaController@create')->name('conta.create')
->middleware('can:contas.create');

Route::put('conta','ContaController@update')->name('conta.update')
->middleware('can:contas.edit');

Route::get('conta/{empresa}/{tipo}','ContaController@show')->name('conta.show')
->middleware('can:contas.show');

Route::delete('conta/{conta}','ContaController@destroy')->name('conta.destroy')
->middleware('can:contas.destroy');

Route::get('conta/{conta}/edit','ContaController@edit')->name('conta.edit')
->middleware('can:contas.edit');

Route::get('conta/{conta}/go','ContaController@go')->name('conta.go')
->middleware('can:contas.edit');

