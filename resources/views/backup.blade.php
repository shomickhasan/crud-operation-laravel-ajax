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

Route::get('/', function () {
    return view('backend.adminDashboard');
})->name('dashboard');

Route::group(['prefix'=>'/admin'],function(){
    //all product route
    Route::group(['prefix'=>'/product'], function(){
        //use for product save button
        Route::post('/save',
            'App\Http\Controllers\Backend\addProductController@store')->name("addProduct");
        // use for add product button
        Route::get('/add','App\Http\Controllers\Backend\addProductController@create')->name('addproductbtn');

        //use for manage product
        Route::get('/manage','App\Http\Controllers\Backend\addProductController@index')->name('viewProduct');
        //route for eidt and show in form
            //{id} parameter of edit method
        Route::get('/edit/{id}','App\Http\Controllers\Backend\addProductController@edit')->name('editProduct');

        //for update product when click on update button

        Route::post('/update/{id}','App\Http\Controllers\Backend\addProductController@update')->name('updateProduct');
        //route for delete

        Route::get('/delete/{id}','App\Http\Controllers\Backend\addProductController@destroy')->name('delete');


    });//end all product

    //for all catagories
    Route::group(['prefix'=>'/catagories'],function(){
        
            //for showing category manage table
        Route::get('/show','App\Http\Controllers\Backend\Catagorys\CatagoriesController@manageCatagories')->name('manageCatagories');
            //for catagories manege data
        Route::get('/view','App\Http\Controllers\Backend\Catagorys\CatagoriesController@ShowallCatagories');
        //for add new category
        Route::post('/add','App\Http\Controllers\Backend\Catagorys\CatagoriesController@addCategory');
        //show for edit category

        Route::get('/editcategory/{id}', 'App\Http\Controllers\Backend\Catagorys\CatagoriesController@editforShow');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\Catagorys\CatagoriesController@updateCatagory');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\Catagorys\CatagoriesController@DeleteCatagory');

    });//end all categorys

});//end main group


