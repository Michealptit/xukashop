<?php
// get param from url

Route::get('/', function () {
    return view('fontend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function(){
	return view('backend.index');
});
///=============
Route::group(['prefix'=>'admin'], function(){
    Route::group(['prefix'=>'customers'], function(){
        Route::get('index', 'CustomerCtrl@index')->name('admin.customers.index');
        Route::post('search', 'CustomerCtrl@searchCustomer')->name('admin.customers.search');
        Route::get('create', 'CustomerCtrl@create')->name('admin.customers.create');
        Route::post('store', 'CustomerCtrl@store')->name('admin.customers.store');
        Route::get('show/{id}', 'CustomerCtrl@show')->name('admin.customers.show');
        Route::get('destroy/{id}', 'CustomerCtrl@destroy')->name('admin.customers.destroy');
    });
    Route::group(['prefix'=>'producers'], function(){
        Route::get('index', 'ProducerCtrl@index')->name('admin.producers.index');
        Route::get('create', 'ProducerCtrl@create')->name('admin.producers.create');
        Route::post('store', 'ProducerCtrl@store')->name('admin.producers.store');
        Route::get('destroy/{id}', 'ProducerCtrl@destroy')->name('admin.producers.destroy');
    });
    Route::group(['prefix'=>'catalogs'], function(){
        Route::get('index', 'CatalogCtrl@index')->name('admin.catalogs.index');
        Route::get('create', 'CatalogCtrl@create')->name('admin.catalogs.create');
        Route::post('store', 'CatalogCtrl@store')->name('admin.catalogs.store');
        Route::get('destroy/{id}', 'CatalogCtrl@destroy')->name('admin.catalogs.destroy');
    });
    Route::group(['prefix'=>'qualities'], function(){
        Route::get('index', 'QualitieCtrl@index')->name('admin.qualities.index');
        Route::get('create', 'QualitieCtrl@create')->name('admin.qualities.create');
        Route::post('store', 'QualitieCtrl@store')->name('admin.qualities.store');
        Route::get('edit/{id}', 'QualitieCtrl@edit');
        Route::post('update/{id}', 'QualitieCtrl@update');
        Route::get('destroy/{id}', 'QualitieCtrl@destroy')->name('admin.qualities.destroy');
    });
    Route::group(['prefix'=>'sexes'], function(){
        Route::get('index', 'SexeCtrl@index')->name('admin.sexes.index');
        Route::get('create', 'SexeCtrl@create')->name('admin.sexes.create');
        Route::post('store', 'SexeCtrl@store')->name('admin.sexes.store');
        Route::get('edit/{id}', 'SexeCtrl@destroy')->name('admin.sexes.edit');
        Route::post('update/{id}', 'SexeCtrl@update')->name('admin.sexes.update');
        Route::get('destroy/{id}', 'SexeCtrl@destroy')->name('admin.sexes.destroy');
    });
    Route::group(['prefix'=>'sizes'], function(){
        Route::get('index', 'SizeCtrl@index')->name('admin.sizes.index');
        Route::get('create', 'SizeCtrl@create')->name('admin.sizes.create');
        Route::post('store', 'SizeCtrl@store')->name('admin.sizes.store');
        Route::get('edit/{id}', 'SizeCtrl@destroy')->name('admin.sizes.edit');
        Route::post('update/{id}', 'SizeCtrl@update')->name('admin.sizes.update');
        Route::get('destroy/{id}', 'SizeCtrl@destroy')->name('admin.sizes.destroy');
    });
    Route::group(['prefix'=>'colors'], function(){
        Route::get('index', 'ColorCtrl@index')->name('admin.colors.index');
        Route::get('create', 'ColorCtrl@create')->name('admin.colors.create');
        Route::post('store', 'ColorCtrl@store')->name('admin.colors.store');
        Route::get('edit/{id}', 'ColorCtrl@edit')->name('admin.colors.edit');
        Route::post('update/{id}', 'ColorCtrl@update')->name('admin.colors.update');
        Route::get('destroy/{id}', 'ColorCtrl@destroy')->name('admin.colors.destroy');
    });
    
    Route::group(['prefix'=>'products'], function(){
        Route::get('index', 'ProductCtrl@index')->name('admin.products.index');
        Route::get('hide', 'ProductCtrl@hide')->name('admin.products.hide');
        Route::get('ajax-catalog/{idProducer}', 'ProductCtrl@getCatalogbyProducer');
        Route::get('search', 'ProductCtrl@searchCustomer')->name('admin.products.search');
        Route::get('create', 'ProductCtrl@create')->name('admin.products.create');
        Route::post('store', 'ProductCtrl@store')->name('admin.products.store');
        Route::get('show/{id}', 'ProductCtrl@show')->name('admin.products.show');
        Route::get('destroy/{id}', 'ProductCtrl@destroy')->name('admin.products.destroy');
        //---
        Route::get('clickshow/{id}', 'ProductCtrl@clickShow');
        Route::get('clickhide/{id}', 'ProductCtrl@clickHide');
    });
    Route::group(['prefix'=>'cskd'], function(){
        Route::get('cskd', 'pricetableCtrl@index')->name('admin.cskd.index');
        Route::get('edit-price/{id}', 'pricetableCtrl@editprice');
        Route::post('update-price/{id}', 'pricetableCtrl@updateprice');
        Route::post('search', 'pricetableCtrl@searchPrice')->name('admin.cskd.search');
    });
    //=== PHẦN BÀI VIẾT 
    Route::group(['prefix'=>'posts'], function(){
        Route::get('index', 'postCtrl@index')->name('admin.posts.index');
        Route::get('create', 'postCtrl@create')->name('admin.posts.create');
        Route::post('store', 'postCtrl@store')->name('admin.posts.store');
        Route::get('edit/{id}', 'postCtrl@edit')->name('admin.posts.edit');
        Route::post('update', 'postCtrl@update')->name('admin.posts.update');
        Route::get('destroy/{id}', 'postCtrl@destroy');
        Route::post('seach', 'postCtrl@searchPost')->name('admin.posts.search');
    });
    Route::group(['prefix'=>'inventory'], function(){
        Route::get('index', 'inventoryCtrl@index')->name('admin.inventory.index');
        Route::get('create', 'inventoryCtrl@create')->name('admin.inventory.create');
        Route::post('store', 'inventoryCtrl@store')->name('admin.inventory.store');
        Route::get('edit/{$id}', 'inventoryCtrl@edit')->name('admin.inventory.edit');
        Route::post('update', 'inventoryCtrl@update')->name('admin.inventory.update');
    });
});
Route::group(['prefix'=>'shop'], function(){
    Route::post('search', 'SearchCtrl@index');
});