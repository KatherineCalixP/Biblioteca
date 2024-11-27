<?php

use Illuminate\Support\Facades\Route;


///     Systema     ///////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/', function () {       return view('index');   });     ///Ruta Index
Route::get('/index', function () {  return view('index');   });     ///Ruta Index
Route::get('/login',function () {   return view('login.login'); }); ///Ruta del login

///     MODULOS     ///////////////////////////////////////////////////////////////////////////////////////////////

///SEGURIDAD Y PERSONAS
Route::get('/table_material',function () {   return view('Modulos.Material.tablaMaterial'); });

///MATERIAL


///PROCESOS Y GESTIONES




Route::get('/table',function () {
    return view('tabla_persona');
});



