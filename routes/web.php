<?php

use Illuminate\Http\Request;

//------Auth-------------
//Auth::routes();
Auth::routes(['verify' => true]);


//-------First Page-------------
//Route::get('/','JobController@index');
//jobs
Route::get('/', 'JobController@index')->name('welcome');
Route::get('/jobs/alljobs', 'JobController@allJobs')->name('alljobs');


//-----test First Page------

/*    return view('welcome');
}); */
Route::view('demo', 'demo');
Route::view('testmap', 'testmap');
/*
Route::get('/', function () {
    return view('home');
});*/

//---------Visitor--------------

Route::view('visitor/register', 'auth/visitor-register')->name('visitor.register');
Route::post('visitor/register', 'VisitorRegisterController@visitorRegister')->name('vst.register');




//--------Edit profile--------------
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'Job2controller@index')->name('home');
//---------Test export/import data to excel------




//------Display Job Detail---------------
Route::get('/jobs/{id}', 'JobController@show')->name('jobs.show');

//-------test Vue.JS---------------
Route::get('/welcomevuejs', function () {
    return view('welcomevuejs');
});


//-------test REST API and VueJS--------------
//Route::resource('jobs2','Job2controller');


//--REST API --/Api/Job2controller
Route::post('jobapi', 'Api\Job2controller@store');
Route::get('jobapi', 'Api\Job2controller@index');
Route::get('jobapi/{id}', 'Api\Job2controller@show');


//----------Upload single file---------
Route::get('upload1', 'UploadController@index');
Route::post('upload1', 'UploadController@upload');
//----------Upload Multiple file-------
Route::get('uploadfile', 'FileController@index');
//Route::post('/docsearch/{id}/update','DocSearchController@update')->name('docsearch.update');
Route::post('uploadfile/{id}', 'FileController@upload')->name('image.upload');

//-----test menubar------------
Route::get('/test', function () {
    return view('dashboard/400');
});

//---Write data to PDF-----------------cdcd
Route::get('/downloadPDF/{id}', 'JobController@downloadPDF');

//---embled veiwer PDF-----
Route::get('/viewpdf', function () {
    return view('test.viewpdf');
});

//------Search the data-------
Route::get('test/search', 'SearchController@search')->name('test.search');
Route::get('test/action', 'SearchController@action')->name('test.action');

//-----display data table---
Route::get('showdatatable', 'DisplayController@create');
Route::get('showindexdatatable', 'DisplayController@index');

//-----narmal multiple upload image----------
Route::get('multipleimage', function () {
    return view('test/multipleimage');
});
Route::post('multiplefileupload', 'imageController@multiplefileupload');

//---binding dropdown
Route::get('/province', 'DropdownController@index');
Route::post('/province/fetch', 'DropdownController@fetch')->name('dropdown.fetch');
Route::post('/amphure/fetch', 'DropdownController@fetch_amphure')->name('dropdown.fetch_amphure');

//---auto complet
Route::get('/auto', 'AutoCompleteController@index');
Route::post('/auto', 'AutoCompleteController@show')->name('autocomplete.show');

//---one to many
Route::resource('product', 'ProductController');

//----jobproject section
Route::get('/jobproject', 'JobProject_Controller@index');
Route::get('/jobproject/create', 'JobProject_Controller@create')->name('jobproject.create');
//Create data
Route::resource('jobproject', 'JobProject_Controller');

//-----Display Feed image------
Route::get('showimage', 'FoodController@loadmore');

//--------upload image to storage------------
Route::get('/testalbum', 'imageController@testalbum');
//Route::get('/album','imageController@index');
Route::get('/album/create', 'imageController@index');
Route::post('/album', 'imageController@store')->name('album.store');
Route::post('/album/image', 'imageController@addImage')->name('album.image');


Route::get('/welcomalbum', 'imageController@album');
Route::get('albums/{id}', 'imageController@show');
Route::post('image/delete', 'imageController@destroy')->name('image.delete');

Route::get('albums/{id}/images', 'imageController@add')->name('add');
Route::post('add/album/image', 'imageController@albumImage')->name('add.album.image');
/*IMAGE RESIZE*/
Route::get('/upload', 'imageController@upload');
Route::post('/upload', 'imageController@postUpload')->name('upload');
/*....*/

//open file list
Route::get('/folder', 'FileController@getFiles');

//upload file to dropbox
Route::get('/upload-to-dropbox', 'DropboxController@uploadToDropbox');
Route::post('/upload_to_dropbox', 'DropboxController@uploadToDropboxFile');

Route::get('/upload-to-dropbox-show', 'DropboxController@show');

//upload file to google drive
Route::get('/upload-to-google', function () {
    return view("test.googledrive");
});
Route::get('/upload-to-google-show', 'DropboxController@showgoogle');

Route::post('/upload-to-google', function (Request $request) {
    dd($request->file("thing")->store('', 'google'));
});


//excel import old version
Route::get('/import_excel_old', 'ImportExcelController_old@index');
Route::post('/import_excel_old/import', 'ImportExcelController_old@import');

//---------Test export/import data to excel new version------
Route::get('/excel', 'ExcelController@index')->name('excel');
Route::get('/excel_export', 'ExcelController@export')->name('excel_export');
Route::post('/excel_import', 'ExcelController@import')->name('excel_import');

//------Import condo project temp---
Route::get('/excel_condo', 'ExcelWebCondoTempController@index')->name('excel_condo');
Route::get('/excel_condoexport', 'ExcelWebCondoTempController@export')->name('excel_condoexport');
Route::post('/excel_condoimport', 'ExcelWebCondoTempController@import')->name('excel_condoimport');


//----------laravel insert from another table without duplicates---------->
Route::get('/testdb', 'PropertyWebController@index')->name('testdb');
Route::post('/testdb_insert', 'PropertyWebController@Insert_update')->name('testdb_insert');
//Route::post('/testdb_update', 'PropertyWebController@update')->name('testdb_update');




//docsearch for town plan
Route::get('/docsearch', 'DocSearchController@index')->name('docsearch');
Route::post('/docsearch', 'DocSearchController@index')->name('docsearch');

Route::get('/docsearch/create', 'DocSearchController@create');
Route::post('/docsearch/create', 'DocSearchController@store')->name('docsearch.store');
Route::get('/docsearch/{id}/edit', 'DocSearchController@edit')->name('docsearch.edit');
Route::post('/docsearch/{id}/update', 'DocSearchController@update')->name('docsearch.update');
Route::post('/docsearch/destroy', 'DocSearchController@destroy')->name('docsearch.delete');
Route::get('/docsearch/trash', 'DocSearchController@trash')->name('docsearch.trash');
Route::get('/docsearch/{id}/trash', 'DocSearchController@restore')->name('docsearch.restore');

//user management
Route::get('/user', 'UserController@index')->name('user');
Route::post('/user', 'UserController@index')->name('user');

Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store')->name('user.store');
Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::post('/user/{id}/update', 'UserController@update')->name('user.update');
Route::post('/user/destroy', 'UserController@destroy')->name('user.delete');
Route::get('/user/trash', 'UserController@trash')->name('user.trash');
Route::get('/user/{id}/trash', 'UserController@restore')->name('user.restore');

//PDF by Note
//PDF by Note
Route::get('/print-order/{id}', 'JobController@pdf_order')->name('print-order.show');
Route::get('/print-invoice/{id}', 'JobController@pdf_invoice')->name('print-invoice.show');
Route::get('/print-receipt/{id}', 'JobController@pdf_receipt')->name('print-receipt.show');


//AdminInput Job order
//Route::view('admininput','admin.index');
//admin
Route::get('/admininput', 'AdminInputController@index')->name('admininput')->middleware('admin');

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admininput/create', 'AdminInputController@create')->name('admininputjob.create');
    Route::post('/admininput/create', 'AdminInputController@store')->name('admininputjob.store');
    Route::post('/admininput/create/fetch', 'AdminInputController@fetch')->name('admininputdropdown.fetch');
});



Route::post('/admininput/destroy', 'AdminInputController@destroy')->name('admininputjob.delete');
Route::get('/admininput/{id}/edit', 'AdminInputController@edit')->name('admininputjob.edit');
Route::post('/admininput/{id}/update', 'AdminInputController@update')->name('admininputjob.update');
Route::post('/admininput/{id}/update2', 'AdminInputController@update2')->name('admininputjob.update2');
Route::get('/admininput/trash', 'AdminInputController@trash');
Route::get('/admininput/{id}/trash', 'AdminInputController@restore')->name('admininputjob.restore');
Route::post('/admininput/updateprogress', 'AdminInputController@updateprogress')->name('admininputjob.updateprogress');


//dashboard
//Route::view('/dashboard', 'dashboard.index');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboardsearch', 'DashboardController@search');




//invoice
//Route::view('/invoice', 'invoice.index')->name('invoice');
//Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::view('/showinvoice', 'invoice.invoice')->name('showinvoice');
Route::get('/invoice', 'InvoiceController@index')->name('invoice');
Route::get('/invoicesearch', 'InvoiceController@search');

Route::get('/invoice/create', 'InvoiceController@create')->name('invoice.create');
Route::post('/invoice/create', 'InvoiceController@store')->name('invoice.store');

Route::post('/invoice/destroy', 'InvoiceController@destroy')->name('invoice.delete');
Route::post('/invoice/{id}/update', 'InvoiceController@update')->name('invoice.update');
Route::get('/invoice/{id}/edit', 'InvoiceController@edit')->name('invoice.edit');


//Drag and Drop File in [Recent Jobs]
Route::get('/drag', 'JobController@drop');
Route::post('/jobs/fileupload/{id}', 'JobController@pdf_dragdrop')->name('jobs.pdf_dragdrop');
Route::get('/preview-pdf', 'JobController@pdf_dragdrop');


//report 
Route::get('/report/{id}/edit', 'ReportController@edit')->name('report.edit');
Route::post('/report/{id}/update', 'ReportController@update')->name('report.update');
Route::post('/report/fetch', 'ReportController@fetch')->name('report.fetch');
Route::get('/report/{id}/preview', 'ReportController@preview')->name('report.preview');


