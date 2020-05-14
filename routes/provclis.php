<?php

Route::post('provcli/store','ProvcliController@store')->name('provcli.store')
->middleware('can:provclis.create');

Route::get('provcli','ProvcliController@index')->name('provcli.index')
->middleware('can:provclis.index');

Route::get('provcli/categoriairpf/{prov_id}','ProvcliController@categoriairpf')->name('provcli.categoriairpf')
->middleware('can:provclis.index');

Route::get('provcli/create','ProvcliController@create')->name('provcli.create')
->middleware('can:provclis.create');

Route::put('provcli','ProvcliController@update')->name('provcli.update')
->middleware('can:provclis.edit');

Route::get('provcli/{provcli}','ProvcliController@show')->name('provcli.show')
->middleware('can:provclis.show');

Route::delete('provcli/{provcli}','ProvcliController@destroy')->name('provcli.destroy')
->middleware('can:provclis.destroy');

Route::get('provcli/{provcli}/edit','ProvcliController@edit')->name('provcli.edit')
->middleware('can:provclis.edit');

