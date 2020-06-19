<?php

Route::post('empresaimpuesto/store','EmpresaImpuestoController@store')->name('empresaimpuesto.store')
->middleware('can:empresaimpuestos.create');

Route::get('empresaimpuesto/{empresa}','EmpresaImpuestoController@index')->name('empresaimpuesto.index')
->middleware('can:empresaimpuestos.index');

Route::get('empresaimpuesto/create/{empresa}','EmpresaImpuestoController@create')->name('empresaimpuesto.create')
->middleware('can:empresaimpuestos.create');

Route::put('empresacontacto','EmpresaImpuestoController@update')->name('empresaimpuesto.update')
->middleware('can:empresaimpuestos.edit');

Route::get('empresaimpuesto/{empresa_id}','EmpresaImpuestoController@show')->name('empresaimpuesto.show')
->middleware('can:empresaimpuestos.show');

Route::delete('empresaimpuesto/{empresacontacto}','EmpresaImpuestoController@destroy')->name('empresaimpuesto.destroy')
->middleware('can:empresaimpuestos.destroy');

Route::get('empresaimpuesto/{empresacontacto}/edit','EmpresaImpuestoController@edit')->name('empresaimpuesto.edit')
->middleware('can:empresaimpuestos.edit');