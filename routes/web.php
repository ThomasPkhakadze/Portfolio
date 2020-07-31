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
Route::redirect('/', '/en');
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function(){
    Route::get('/', 'front\FrontController@getMain')->name('home');
    Route::post('/', 'front\MailController@send')->name('mail.send');
    Route::get('/download', 'front\FrontController@convertToPDF')->name('pdf.download');
     
});




Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard', 'admin\AdminController@getDashboard')->name('admin.dashboard');
    Auth::routes();
    Route::resource('intro' , 'admin\IntroController');
    Route::resource('about' , 'admin\AboutController');
    Route::resource('work' , 'admin\WorkController');
    Route::resource('skill' , 'admin\SkillController');
    Route::resource('article' , 'admin\ArticleController');
    Route::resource('fact' , 'admin\FactController');
    Route::resource('menuItem', 'admin\MenuItemsController');
    Route::resource('SliderSkill', 'admin\SliderSkillController');
    
    
});



