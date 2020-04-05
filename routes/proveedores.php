<?php

Route::post('proveedor/store','ProveedorController@store')->name('proveedor.store')
->middleware('can:proveedores.create');

Route::get('proveedor','ProveedorController@index')->name('proveedor.index')
->middleware('can:proveedores.index');

Route::get('proveedor/create','ProveedorController@create')->name('proveedor.create')
->middleware('can:proveedores.create');

Route::put('proveedor','ProveedorController@update')->name('proveedor.update')
->middleware('can:proveedores.edit');

Route::get('proveedor/{proveedor}','ProveedorController@show')->name('proveedor.show')
->middleware('can:proveedores.show');

Route::delete('proveedor/{proveedor}','ProveedorController@destroy')->name('proveedor.destroy')
->middleware('can:proveedores.destroy');

Route::get('proveedor/{proveedor}/edit','ProveedorController@edit')->name('proveedor.edit')
->middleware('can:proveedores.edit');

