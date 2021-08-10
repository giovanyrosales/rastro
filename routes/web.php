<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// login administrador
//Route::get('admin', 'Auth\LoginController@loginForm')->name('admin.login');
//lo cambie para hacer el login la pantalla inicial, con la siguiente linea

Route::get('/', 'Auth\LoginController@loginForm')->name('admin.login');
Route::post('admin', 'Auth\LoginController@login');

// proteger rutas con middleware AccessAdmin.php
Route::group(['middleware' => 'auth', 'auth.admin'], function () { 
    Route::get('admin/dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('admin/inicio', 'DashboardController@getInicio')->name('admin.inicio');

    //PROCESOS
        
        
        //VENTAS
        Route::get('admin/crear_venta', 'VentasController@crear_venta');
        Route::get('admin/load_ventas', 'VentasController@load_ventas');
        Route::post('admin/anular_venta', 'VentasController@anular_venta');
        //guardar venta
        Route::post('admin/add_venta', 'VentasController@add_venta');
        Route::get('admin/pdf_venta/{id}', 'VentasController@pdf_venta');
            
    

           //Generacion de PDFs
           //pdf reforma_apertura
           Route::get('admin/pdf_reforma_apertura/{id}', 'PdfController@pdf_reforma_apertura');
           Route::get('pdf_rep_comprasal/{id}', 'PdfController@pdf_rep_comprasal');

           //PDF Orden de Compra
                //desde controlador
           Route::get('admin/pdf_orden/{id}', 'OrdenController@pdf_orden');
                //desde vista
           Route::get('create-item1/{id}', [
            'as' => 'pdf.orden.create', 
            'uses' => 'OrdenController@pdf_orden'
           ]);
        

           
           

           //PDF Orden de Compra
            //desde controlador
            Route::get('admin/pdf_acta/{id}', 'ActaController@pdf_acta');
            //desde vista
            Route::get('create-item2/{id}', [
                'as' => 'pdf.acta.create', 
                'uses' => 'ActaController@pdf_acta'
            ]);


    //INFORMACION DE USUARIOS
    Route::get('/admin/editarusuario', 'UserController@index')->name('admin.EditarUsuario');
    Route::post('/admin/actualizar-usuario','UserController@update');
    Route::get('admin/logout', 'Auth\LoginController@logout');
});