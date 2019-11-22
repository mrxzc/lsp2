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

Route::prefix('superadmin')->group(function(){
	Route::get('/', 'SuperAdminController@dashboard')->name('superadmin');

	Route::prefix('brand')->group(function(){
		Route::get('/', 'BrandController@brand')->name('brand');

		Route::post('/edit', 'BrandController@edit')->name('brand_edit');
		Route::get('/proses-edit/{id}', 'BrandController@proses_edit')->name('brand_proses_edit');
	});

	Route::prefix('pengguna')->group(function(){
		Route::get('/', 'PenggunaController@pengguna')->name('pengguna');

		Route::get('/tambah', 'PenggunaController@tambah')->name('pengguna_tambah');
		Route::post('/proses-tambah', 'PenggunaController@proses_tambah')->name('pengguna_proses_tambah');

		Route::get('/detail/{id}', 'PenggunaController@detail')->name('pengguna_detail');
		Route::post('/proses_detail', 'PenggunaController@proses_detail')->name('pengguna_proses_detail');

		Route::get('/hapus/{id}', 'PenggunaController@hapus')->name('pengguna_hapus');
	});
});

Route::prefix('admin')->group(function(){
	Route::get('/', 'AdminController@dashboard')->name('admin');

	Route::prefix('kategori')->group(function(){
		Route::get('/', 'KategoriController@kategori')->name('kategori');

		Route::get('/tambah', 'KategoriController@tambah')->name('kategori_tambah');
		Route::post('/proses-tambah', 'KategoriController@proses_tambah')->name('kategori_proses_tambah');

		Route::get('/hapus/{id}', 'KategoriController@hapus')->name('kategori_hapus');
		Route::post('/proses-hapus', 'KategoriController@proses_hapus')->name('kategori_proses_hapus');
	});

	Route::prefix('mata-uang')->group(function(){
		Route::get('/', 'MataUangController@matauang')->name('matauang');

		Route::get('/tambah', 'MataUangController@tambah')->name('matauang_tambah');
		Route::post('/proses-tambah', 'MataUangController@proses_tambah')->name('matauang_proses_tambah');

		Route::get('/hapus/{id}', 'MataUangController@hapus')->name('matauang_hapus');
	});

	Route::prefix('unit')->group(function(){
		Route::get('/', 'UnitController@unit')->name('unit');

		Route::get('/tambah', 'UnitController@tambah')->name('unit_tambah');
		Route::post('/proses-tambah', 'UnitController@proses_tambah')->name('unit_proses_tambah');

		Route::get('/hapus/{id}', 'UnitController@hapus')->name('unit_hapus');
	});

	Route::prefix('laba')->group(function(){
		Route::get('/', 'PersentaseLabaController@laba')->name('laba');

		Route::get('/tambah', 'PersentaseLabaController@tambah')->name('laba_tambah');
		Route::post('/proses-tambah', 'PersentaseLabaController@proses_tambah')->name('laba_proses_tambah');

		Route::get('/hapus/{id}', 'PersentaseLabaController@hapus')->name('laba_hapus');
	});

	Route::prefix('stok-ppn')->group(function(){
		Route::get('/', 'StokPpnController@stokppn')->name('stokppn');

		Route::get('/tambah', 'StokPpnController@tambah')->name('stokppn_tambah');
		Route::post('/proses-tambah', 'StokPpnController@proses_tambah')->name('stokppn_proses_tambah');

		Route::get('/hapus/{id}', 'StokPpnController@hapus')->name('stokppn_hapus');
	});

	Route::prefix('produk')->group(function(){
		Route::get('/', 'ProdukController@produk')->name('produk');

		Route::get('/tambah', 'ProdukController@tambah')->name('produk_tambah');
		Route::post('/proses-tambah', 'ProdukController@proses_tambah')->name('produk_proses_tambah');

		Route::get('/hapus/{id}', 'ProdukController@hapus')->name('produk_hapus');

		Route::get('/detail/{barcode}', 'ProdukController@detail')->name('produk_detail');
		Route::post('/proses-detail/', 'ProdukController@proses_detail')->name('produk_proses_detail');
	});
});

Route::prefix('kasir')->group(function(){
	Route::get('/', 'KasirController@dashboard')->name('kasir');

	Route::prefix('transaksi')->group(function(){
		Route::get('/', 'KasirController@transaksi')->name('transaksi');
		Route::post('/proses-transaksi', 'KasirController@proses_transaksi')->name('transaksi_proses_transaksi');

		Route::get('/proses_hapus/{id}', 'KasirController@proses_hapus')->name('transaksi_hapus');
		Route::get('/proses_hapusall', 'KasirController@proses_hapus_all')->name('transaksi_hapus_all');

		Route::get('/checkout', 'KasirController@checkout')->name('transaksi_checkout');
		Route::post('/proses_checkout', 'KasirController@proses_checkout')->name('transaksi_proses_checkout');

		Route::get('/kode_unik', 'KasirController@kode_unik')->name('kode_unik');
		Route::get('/invoice', 'KasirController@invoice')->name('invoice');
	});

	Route::prefix('laporan')->group(function(){
		Route::get('/', 'KasirController@laporan')->name('laporan');
	});
});

Route::get('/', 'PagesController@login')->name('login');
Route::post('/proses_login', 'PagesController@proses_login')->name('proses_login');

Route::get('/logout', 'PagesController@logout')->name('logout');