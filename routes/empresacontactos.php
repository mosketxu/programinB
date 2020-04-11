<?php

Route::post('empresacontacto/store','EmpresaContactoController@store')->name('empresacontacto.store')
->middleware('can:empresacontactos.create');

Route::post('empresacontacto/storeempresas','EmpresaContactoController@storeempresas')->name('empresacontacto.storeempresas')
->middleware('can:empresacontactos.create');

Route::post('empresacontacto/storecontacto/{empresa_id}','EmpresaContactoController@storecontacto')->name('empresacontacto.storecontacto')
->middleware('can:empresacontactos.create');

Route::get('empresacontacto/','EmpresaContactoController@index')->name('empresacontacto.index')
->middleware('can:empresacontactos.index');

Route::get('empresacontacto/create/{empresa}','EmpresaContactoController@create')->name('empresacontacto.create')
->middleware('can:empresacontactos.create');

Route::put('empresacontacto','EmpresaContactoController@update')->name('empresacontacto.update')
->middleware('can:empresacontactos.edit');

Route::get('empresacontacto/{empresa_id}','EmpresaContactoController@show')->name('empresacontacto.show')
->middleware('can:empresacontactos.show');

Route::delete('empresacontacto/{empresacontacto}','EmpresaContactoController@destroy')->name('empresacontacto.destroy')
->middleware('can:empresacontactos.destroy');

Route::get('empresacontacto/{empresacontacto}/edit','EmpresaContactoController@edit')->name('empresacontacto.edit')
->middleware('can:empresacontactos.edit');


