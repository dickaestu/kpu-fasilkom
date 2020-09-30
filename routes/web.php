<?php

use Illuminate\Support\Facades\Route;

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
#----------INDEX----------
Route::get('/', 'PagesController@home')->name('home');
Route::get('/perhitunganlangsung', 'PagesController@perhitunganlangsung');
Route::get('/dukungan/{id}', 'DukunganController@dukungan')->name('dukungan')->middleware('auth');
Route::get('/settings', 'SettingsController@index')->name('settings')->middleware('auth');
Route::post('/settings', 'SettingsController@settings')->name('password-update')->middleware('auth');
Route::post('/dukungan/{id_kandidat}/{id_user}', 'DukunganController@create')->name('dukungan-create')->middleware('auth');
Route::get('/refreshcaptcha', 'DukunganController@refreshCaptcha')->middleware('auth');


#----------KANDIDAT-------
Route::get('/kandidat/dpm', 'KandidatController@dpm');
Route::get('/kandidat/bem', 'KandidatController@bem');
Route::get('/kandidat/himti', 'KandidatController@himti');
Route::get('/kandidat/himsisfo', 'KandidatController@himsisfo');


#----------PEMUNGUTAN SUARA-------
Route::get('/pemungutan-suara/dpm', 'PemungutanSuaraController@dpm')
        ->middleware('auth');
Route::post('/pemungutan-suara/dpm/create/{id_kandidat}/{id_user}', 'PemungutanSuaraController@dpm_vote')
        ->name('vote-create-dpm')->middleware('auth');
Route::get('/pemungutan-suara/bem', 'PemungutanSuaraController@bem')
        ->middleware('auth');
Route::post('/pemungutan-suara/bem/create/{id_kandidat}/{id_user}', 'PemungutanSuaraController@bem_vote')
        ->name('vote-create-bem')->middleware('auth');
Route::get('/pemungutan-suara/himti', 'PemungutanSuaraController@himti')->name('vote-himti')
        ->middleware('auth');
Route::post('/pemungutan-suara/himti/create/{id_kandidat}/{id_user}', 'PemungutanSuaraController@himti_vote')
        ->name('vote-create-himti')->middleware('auth');
Route::get('/pemungutan-suara/himsisfo', 'PemungutanSuaraController@himsisfo')->name('vote-himsisfo')
        ->middleware('auth');
Route::post('/pemungutan-suara/himsisfo/create/{id_kandidat}/{id_user}', 'PemungutanSuaraController@himsisfo_vote')
        ->name('vote-create-himsisfo')->middleware('auth');


// ----------ADMIN--------//
Route::prefix('kpu-admin')
        ->middleware(['auth', 'isAdmin'])
        ->namespace('Admin')
        ->group(function () {
                Route::get('/', 'DashboardController@index')
                        ->name('dashboard');
                Route::get('/data-pemilih', 'DataPemilihController@index')
                        ->name('data-pemilih');
                Route::get('/komentar', 'KomentarController@index')
                        ->name('data-komentar');
                Route::post('/komentar{id}', 'KomentarController@hapus')
                        ->name('hapus-komentar');
                Route::get('/laporan-suara-dpm', 'LaporanSuaraController@dpm')
                        ->name('laporan-suara-dpm');
                Route::get('/laporan-suara-bem', 'LaporanSuaraController@bem')
                        ->name('laporan-suara-bem');
                Route::get('/laporan-suara-himti', 'LaporanSuaraController@himti')
                        ->name('laporan-suara-himti');
                Route::get('/laporan-suara-himsisfo', 'LaporanSuaraController@himsisfo')
                        ->name('laporan-suara-himsisfo');
                Route::get('/verifikasi', 'VerifikasiController@index')
                        ->name('verifikasi');
                Route::get('/verifikasi/{id}', 'VerifikasiController@verifikasi')
                        ->name('verifikasi-akun');
                Route::post('/verifikasi/tolak/{id}', 'VerifikasiController@tolak')
                        ->name('verifikasi-tolak');
                Route::resource('/kandidat', 'KandidatController');

                #----------EXPORT PDF DATA PEMILIH-------
                Route::get('/export/exportpdf-pemilih', 'DataPemilihController@exportPdf')
                        ->name('export-exportpdf-pemilih');

                #----------EXPORT PDF LAPORAN SUARA-------
                Route::get('/export/exportpdf-dpm', 'LaporanSuaraController@exportDpm')
                        ->name('export-exportpdf-dpm');
                Route::get('/export/exportpdf-bem', 'LaporanSuaraController@exportBem')
                        ->name('export-exportpdf-bem');
                Route::get('/export/exportpdf-himti', 'LaporanSuaraController@exportHimti')
                        ->name('export-exportpdf-himti');
                Route::get('/export/exportpdf-himsisfo', 'LaporanSuaraController@exportHimsisfo')
                        ->name('export-exportpdf-himsisfo');

                #----------EXPORT EXCEL DATA PEMILIH-------
                Route::get('/export/export-excel', 'DataPemilihController@exportExcel')
                        ->name('export-export-excel');

                #----------EXPORT EXCEL LAPORAN SUARA-------
                Route::get('/export/exportexcel-dpm', 'LaporanSuaraController@exportExcelDpm')
                        ->name('export-exportexcel-dpm');
                Route::get('/export/exportexcel-bem', 'LaporanSuaraController@exportExcelBem')
                        ->name('export-exportexcel-bem');
                Route::get('/export/exportexcel-himti', 'LaporanSuaraController@exportExcelHimti')
                        ->name('export-exportexcel-himti');
                Route::get('/export/exportexcel-himsisfo', 'LaporanSuaraController@exportExcelHimsisfo')
                        ->name('export-exportexcel-himsisfo');
        });

Auth::routes(['register' => false]);
