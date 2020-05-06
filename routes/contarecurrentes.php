<?php

Route::post('contarecurrente/store','ContarecurrenteController@store')->name('contarecurrente.store')
->middleware('can:contarecurrentes.create');

Route::get('contarecurrente/{empresa}','ContarecurrenteController@index')->name('contarecurrente.index')
->middleware('can:contarecurrentes.index');

Route::get('contarecurrente/create','ContarecurrenteController@create')->name('contarecurrente.create')
->middleware('can:contarecurrentes.create');

Route::post('contarecurrente/update','ContarecurrenteController@update')->name('contarecurrente.update')
->middleware('can:contarecurrentes.edit');

Route::get('contarecurrente/{empresa}/{tipo}','ContarecurrenteController@show')->name('contarecurrente.show')
->middleware('can:contarecurrentes.show');

Route::get('contarecurrente/{empresa}/edit','ContarecurrenteController@edit')->name('contarecurrente.edit')
->middleware('can:contarecurrentes.edit');

Route::post('contarecurrente/{conta}','ContarecurrenteController@destroy')->name('contarecurrente.destroy')
->middleware('can:contarecurrentes.destroy');