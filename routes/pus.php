<?php

Route::post('pu/store','PuController@store')->name('pu.store')
->middleware('can:pus.create');

Route::get('pu','PuController@index')->name('pu.index')
->middleware('can:pus.index');

Route::get('pu/create','PuController@create')->name('pu.create')
->middleware('can:pus.create');

Route::put('pu','PuController@update')->name('pu.update')
->middleware('can:pus.edit');

Route::get('pu/{pu}','PuController@show')->name('pu.show')
->middleware('can:pus.show');

Route::delete('pu/{pu}','PuController@destroy')->name('pu.destroy')
->middleware('can:pus.destroy');

Route::get('pu/{pu}/edit','PuController@edit')->name('pu.edit')
->middleware('can:pus.edit');

