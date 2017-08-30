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

Route::get('/', [
'as'=>'home',
'uses'=>'PagesController@home'
]);

Route::get('/SuccessReg', function(){
    Flashy::message('You have successfully registered to nerdy', 'http://your-awesome-link.com');
    return redirect('/');
});

Route::get('/Question', [
    'as'=>'Question',
    'uses'=>'ForumController@Question'
    ]);

Route::post('/EditQuestion', [
        'as'=>'Edit_Question',
        'uses'=>'ForumController@EditQuestion'
        ]);
    
    
    
Route::get('/articles', [
    'as'=>'Article_page',
    'uses'=>'PagesController@article'
    ]);
    
Route::get('/about', [
        'as'=>'about',
        'uses'=>'PagesController@about'
        ]);
        
Route::get('/MemberArea', [
'as'=>'Login_user',
'uses'=>'PagesController@MemberArea'
]);

Route::get('{slug}', [
        'as'=>'view_post',
        'uses'=>'ForumController@viewpost'
        ]);
    
Route::post('/Registration', [
'as'=>'Register_user',
'uses'=>'RegisterController@registeruser'
]);

Route::post('/Deletereply', [
    'as'=>'Delete_reply',
    'uses'=>'ForumController@DeleteReply'
    ]);

Route::post('/SaveEditQuestion', [
        'as'=>'save_edit_que',
        'uses'=>'ForumController@SaveEditQuestion'
        ]);
    
Route::post('/DeleteQuestion', [
    'as'=>'Delete_Question',
    'uses'=>'ForumController@DeleteQuestion'
    ]);

Route::post('/PostQuestion', [
    'as'=>'Post_Question',
    'uses'=>'ForumController@PostQuestion'
    ]);
    
Route::post('/SaveReply', [
    'as'=>'Save_Reply',
    'uses'=>'ForumController@SaveReply'
    ]);
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
