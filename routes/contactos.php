<?php

Route::post('contacto/store','ContactoController@store')->name('contacto.store')
->middleware('can:contactos.create');

Route::get('contacto','ContactoController@index')->name('contacto.index')
->middleware('can:contactos.index');

Route::get('contacto/create','ContactoController@create')->name('contacto.create')
->middleware('can:contactos.create');

Route::put('contacto/{contacto}','ContactoController@update')->name('contacto.update')
->middleware('can:contactos.edit');

Route::get('contacto/{contacto}','ContactoController@show')->name('contacto.show')
->middleware('can:contactos.show');

Route::delete('contacto/{contacto}','ContactoController@destroy')->name('contacto.destroy')
->middleware('can:contactos.destroy');

Route::get('contacto/{contacto}/edit','ContactoController@edit')->name('contacto.edit')
->middleware('can:contactos.edit');

