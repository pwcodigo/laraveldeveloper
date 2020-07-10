
Route::get('listagem-usuario', 'UserController@listUser');

/*
    forma de agrupar as urls
*/

Route::group(['namespace' => 'Form'], function () {


    //Route::verb('uri', 'Controller@method')->name('route_name');
    /** 
     *  VERBO GET
     */

    /* Observe uma coisa no caso do /usuarios/{user}  coloque ele sempre embaixo
    como são tipo palavras reservadas ele vai detectar no post e acha que está 
    enviando os dados e não querendo acessar uma rota
*/
    Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}', 'TestController@listUser')->name('users.list');

    /**
     * VERSO POST
     */
    Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');
    /**
     * VERBO PUT/PUTCH
     */
    Route::put('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');

    /**
     *  VERBO DELETE
     */
    Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('users.destroy');
});
