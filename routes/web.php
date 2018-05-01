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

	Route::group(['prefix' => 'blog'],function(){
		Route::get('/', 'BlogController@index')->name('blog.page');
		Route::get('/promo', 'BlogController@showBlog')->name('promo.page');
		Route::get('/{slug}', 'BlogController@post')->name('blog.post');
		Route::post('/search', 'BlogController@search')->name('search.template');
	});

	Route::group(['prefix' => 'product'],function(){
		Route::get('/', 'ProdukController@index')->name('produk.page');
		Route::get('/{slug}', 'ProdukController@produk')->name('produk.post');
		Route::post('/search', 'ProdukController@search')->name('produk-search.template');
	});

	Route::group(['prefix' => 'award'],function(){
		Route::get('/', 'AwardController@index')->name('award.page');
		Route::post('/search', 'AwardController@search')->name('search.template');
	});

	Route::get('/simulasi','SimulasiController@create')->name('simulasi.create');
	Route::post('/store','SimulasiController@store')->name('simulasi.store');
	Route::get('/contact','ContactController@create')->name('contact.create');
	Route::post('/contact','ContactController@store')->name('contact.store');
	Route::get('/laporan-publikasi','LaporanController@createPublikasi')->name('publikasi.create');
	Route::get('/laporan-kelola','LaporanController@createKelola')->name('kelola.create');

});



Route::get('/login','Auth\LoginController@showLoginForm')->name('login.form');
Route::post('/login','Auth\LoginController@login')->name('login.submit');
Route::any('/logout','Auth\LoginController@logout')->name('logout');




Route::group(['namespace' => 'Backend', 'as' => 'admin', 'middleware' => 'admin','prefix' => 'admin'], function(){

		Route::get('/','AdminController@countData')->name('admin.index');
		Route::any('/logout','AdminController@logout')->name('logout.submit');


	Route::group(['prefix' => 'post'], function() {
                  Route::get('/','PostController@index')->name('post.index');
									Route::post('/','PostController@ajax')->name('post.ajax');
                  Route::get('/new','PostController@create')->name('post.create');
									Route::post('/store','PostController@store')->name('post.store');
                  Route::get('/{post}/edit','PostController@edit')->name('post.edit');
                  Route::put('/{post}/update','PostController@update')->name('post.update');
                  Route::post('/delete', 'PostController@destroy')->name('post.delete');
          });

  Route::group(['prefix' => 'product'], function() {
                  Route::get('/','ProductController@index')->name('product.index');
									Route::post('/','ProductController@ajax')->name('product.ajax');
                  Route::get('/new','ProductController@create')->name('product.create');
									Route::post('/store','ProductController@store')->name('product.store');
                  Route::get('/{product}/edit','ProductController@edit')->name('product.edit');
                  Route::put('/{product}/update','ProductController@update')->name('product.update');
                  Route::post('/delete', 'ProductController@destroy')->name('product.delete');
          });

  Route::group(['prefix' => 'biodata'], function() {
									Route::get('/','BiodataController@index')->name('biodata.index');
									Route::post('/','BiodataController@ajax')->name('biodata.ajax');
									Route::get('/new','BiodataController@create')->name('biodata.create');
									Route::post('/store','BiodataController@store')->name('biodata.store');
									Route::get('/{biodata}/edit','BiodataController@edit')->name('biodata.edit');
									Route::put('/{biodata}/update','BiodataController@update')->name('biodata.update');
									Route::post('/delete', 'BiodataController@destroy')->name('biodata.delete');
								});

	Route::group(['prefix' => 'tarif'], function() {
									Route::get('/','TarifController@index')->name('tarif.index');
									Route::post('/','TarifController@ajax')->name('tarif.ajax');
									Route::get('/new','TarifController@create')->name('tarif.create');
									Route::post('/store','TarifController@store')->name('tarif.store');
									Route::get('/{tarif}/edit','TarifController@edit')->name('tarif.edit');
									Route::put('/{tarif}/update','TarifController@update')->name('tarif.update');
									Route::post('/delete', 'TarifController@destroy')->name('tarif.delete');
								});

	Route::group(['prefix' => 'penghargaan'], function() {
									Route::get('/','PenghargaanController@index')->name('penghargaan.index');
									Route::post('/','PenghargaanController@ajax')->name('penghargaan.ajax');
									Route::get('/new','PenghargaanController@create')->name('penghargaan.create');
									Route::post('/store','PenghargaanController@store')->name('penghargaan.store');
									Route::get('/{penghargaan}/edit','PenghargaanController@edit')->name('penghargaan.edit');
									Route::put('/{penghargaan}/update','PenghargaanController@update')->name('penghargaan.update');
									Route::post('/delete', 'PenghargaanController@destroy')->name('penghargaan.delete');
								});

	Route::group(['prefix' => 'laporan'], function() {
									Route::get('/','ReportController@index')->name('report.index');
									Route::post('/','ReportController@ajax')->name('report.ajax');
									Route::get('/new','ReportController@create')->name('report.create');
									Route::post('/store','ReportController@store')->name('report.store');
									Route::get('/{report}/edit','ReportController@edit')->name('report.edit');
									Route::put('/{report}/update','ReportController@update')->name('report.update');
									Route::post('/delete', 'ReportController@destroy')->name('report.delete');
								});



});
