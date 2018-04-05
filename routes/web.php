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



Auth::routes();





Route::get('/', function() {
	return view('frontend.landingpage.index');
})->name('tampil.index');

// Route::get('/no-access', function () {
//     return view('no-access');
// })->name('no-access');


Route::group(['namespace' => 'Frontend'], function() {
	// Guest
	Route::get('/blog', 'BlogController@index')->name('blog.page');
	Route::get('/blog/{slug}', 'BlogController@post')->name('blog.post');

	Route::get('/simulasi','SimulasiController@create')->name('simulasi.create');
	Route::post('/success','SimulasiController@store')->name('simulasi.store');

});


Route::post('/login','Auth\LoginController@showLoginForm')->name('login.form');
Route::post('/login','Auth\LoginController@login')->name('login.submit');
Route::get('/logout','Auth\LoginController@logout')->name('logout.submit');




Route::group(['namespace' => 'Backend', 'as' => 'admin', 'middleware' => 'auth:web','prefix' => 'admin'], function(){
		Route::get('/','AdminController@index')->name('admin.index');



	Route::group(['prefix' => 'post'], function() {
                  Route::get('/','PostController@index')->name('post.index');
                  Route::get('/new','PostController@create')->name('post.create');
									Route::post('/store','PostController@store')->name('post.store');
                  Route::get('/{post}/edit','PostController@edit')->name('post.edit');
                  Route::put('/{post}/update','PostController@update')->name('post.update');
                  Route::post('/delete', 'PostController@destroy')->name('post.delete');
          });

        //   Route::group(['prefix' => 'product'], function() {
        //           Route::get('/','ProductController@index')->name('product.index');
        //           Route::post('/', 'ProductController@ajax')->name('product.ajax');
        //           Route::get('/new','ProductController@create')->name('product.create');
        //           Route::get('/{product}/edit','ProductController@edit')->name('product.edit');
        //           Route::post('/store','ProductController@store')->name('product.store');
        //           Route::post('/{product}/update','ProductController@update')->name('product.update');
        //           Route::delete('/{product}/delete', 'ProductController@delete')->name('product.delete');
        //   });

        //   Route::group(['prefix' => 'tarif'], function() {
        //           Route::get('/','TarifController@index')->name('tarif.index');
        //           Route::post('/', 'TarifController@ajax')->name('tarif.ajax');
        //           Route::get('/new','TarifController@edit')->name('tarif.create');
        //           Route::get('/{tarif}/edit','TarifController@edit')->name('tarif.edit');
        //           Route::post('/store','TarifController@store')->name('tarif.store');
        //           Route::post('/{tarif}/update','TarifController@update')->name('tarif.update');
        //           Route::delete('/{tarif}/delete', 'TarifController@delete')->name('tarif.delete');
        //   });

});
