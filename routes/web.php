<?php
//Rotas especificas para SuperAdministrador
Route::middleware(['auth', 'isSuper'])->group(function () {

    Route::resource('modalities', 'ModalityController');

});

Route::middleware(['auth', 'verified', 'isAdmin'])->group(function () {

    Route::resource('clubs', 'ClubController');
    Route::resource('athletes', 'AthleteController');

    //Pagina inicial
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    //Usuario
    Route::get('/editar-usuario', 'UserController@edit')->name('user.edit');
    Route::put('/editando-usuario', 'UserController@update')->name('user.update');

});

Auth::routes(['verify' => true]);

