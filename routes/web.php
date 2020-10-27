<?php

Route::middleware(['auth', 'isSuper'])->group(function () {

    Route::resource('modalities', 'ModalityController');

});

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'verified', 'isAdmin'])->group(function () {

    Route::resource('clubs', 'ClubController');
    Route::resource('athletes', 'AthleteController');

    //Home
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    //My User
    Route::get('/editar-usuario', 'UserController@edit')->name('user.edit');
    Route::put('/editando-usuario', 'UserController@update')->name('user.update');

    //My modality
    Route::get('/edit-modality', 'ModalityController@editMy')->name('modality.edit.my');
    Route::get('/update-modality', 'ModalityController@updateMy')->name('modality.updateMy');

});

Route::namespace('Site')->group(function () {

    //Pagina inicial
    Route::get('/', 'HomeController@index');

});

Auth::routes(['verify' => true]);

