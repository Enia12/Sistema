<?php



Route::get('/', 'LoginController@form')->name('login') ;//pegar controler e chamar form
   

//Route::get('/painel', function () {
//    return view('painel.index');//acessar barra painel para pagina principal
//});
//tudo  que esta dentro do gruop é para utilizador logado
Route::post('/login','LoginController@login');//retorna login

Route::group(['middleware' => ['auth']], function(){

Route::get('/logout',function(){
    Auth::logout();
    return redirect()->action('LoginController@form');

})->name('logout');

Route::get('/Utilizador/add','UtilizadorController@create')->name('Utilizador-add');
Route::post('/Utilizador/add','UtilizadorController@store');
Route::get('/Utilizador/edit/{idutilizador}','UtilizadorController@edit');
Route::get('/Utilizador/del/{idutilizador}','UtilizadorController@destroy');
Route::get('/Cliente/add','ClienteController@create');
Route::post('/Cliente/add','ClienteController@store')->name('Cliente-add');
Route::get('/Cliente/edit/{idClientes}','ClienteController@edit');
Route::get('/Cliente/del/{idClientes}','ClienteController@destroy');
Route::get('/Servico/add','ServicoController@create')->name('Servico-add');
Route::post('/Servico/add','ServicoController@store');

Route::get('/Servico/edit/{idservico}','ServicoController@edit');
Route::get('/Servico/del/{idservico}','ServicoController@destroy');

Route::get('/Lista/add','ListaController@create')->name('Lista-add');
Route::post('/Lista/add','ListaController@searchLista')->name('lista.search');
Route::get('perfil','UtilizadorController@profile')->name('profile')->middleware('auth');
Route::get('/Agendamento/add','AgendamentoController@create')->name('Agendamento-add');

});