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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/admindashboard', function () {
    return view('backend.adminDashboard');
})->middleware(['auth'])->name('dashboard');

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

    //sub Category controller
    Route::group(['prefix'=>'/subcategory'],function(){
        //add subcategory
        Route::get('/addsubcategory', 'App\Http\Controllers\Backend\SubCategory\SubcategoryController@index')->name('subcategory.add');
        Route::post('/subcategoryStore', 'App\Http\Controllers\Backend\SubCategory\SubcategoryController@store')->name('addsubcategory.add');
        Route::get('/manage', 'App\Http\Controllers\Backend\SubCategory\SubcategoryController@create')->name('subcategory.manage');
        Route::get('/subcategorydelete/{id}','App\Http\Controllers\Backend\SubCategory\SubcategoryController@destroy')->name('subcategory.delete');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\SubCategory\SubcategoryController@edit')->name('subcategory.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\SubCategory\SubcategoryController@update')->name('subcategory.update');
    });

    //for iteam
    Route::group(['prefix'=>'item'], function(){
        Route::get('/add','App\Http\Controllers\Backend\Items\Itemcontroller@index')->name('item.add');
        Route::post('/iteminsert','App\Http\Controllers\Backend\Items\Itemcontroller@store')->name('item.insert');
        Route::get('/manageitem','App\Http\Controllers\Backend\Items\Itemcontroller@create')->name('item.manage');
        

    });

}); //end main group


require __DIR__.'/auth.php';
