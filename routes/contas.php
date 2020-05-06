<?php

Route::post('conta/store','ContaController@store')->name('conta.store')
->middleware('can:contas.create');

Route::get('conta/{empresa}','ContaController@index')->name('conta.index')
->middleware('can:contas.index');

Route::get('conta/{conta}/{anyo}/{periodo}/edit','ContaController@edit')->name('conta.edit')
->middleware('can:contas.edit');

Route::get('conta/controlfactura/{empresa}/{provcli}/{factura}','ContaController@controlfactura2')->name('conta.controlfactura2')
->middleware('can:contas.edit');

Route::get('conta/contas/{empresa}/{tipo}','ContaController@conta')->name('conta.contas')
->middleware('can:contas.edit');

Route::get('conta/create','ContaController@create')->name('conta.create')
->middleware('can:contas.create');

Route::post('conta/update','ContaController@update')->name('conta.update')
->middleware('can:contas.edit');

Route::get('conta/{empresa}/{tipo}','ContaController@show')->name('conta.show')
->middleware('can:contas.show');

Route::post('conta/controlfactura','ContaController@controlfactura')->name('conta.controlfactura')
->middleware('can:contas.edit');

Route::post('conta/{conta}','ContaController@destroy')->name('conta.destroy')
->middleware('can:contas.destroy');


Route::get('conta/{conta}/go','ContaController@go')->name('conta.go')
->middleware('can:contas.edit');


