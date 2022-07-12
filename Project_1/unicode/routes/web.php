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

Route::get('/home',function(){
    return view('home');

});





Route::prefix('admin') -> group(function(){
    Route::get('/news/{slug?}-{id?}.html',function($slug,$id ){
        $content = 'ID = '.$id.'<br>';
        $content.= "Name : " .$slug;
        echo view('news').'<br>';
        return $content;

        //where : tạo rằng buộc 

    })->name('admin.news'); //->where(['slug' => '[a-z-]+','id' => '[0-9]+']) 
    

    Route::get('/product',function(){
        return view('product');

    })->name('admin.product');
    Route::get('/add',function(){
        echo view('product').'<br>';
        return 'THÊM SẢN PHẨM THÀNH CÔNG'.'<br>';

    })->name('admin.add');
    Route::get('/delete',function(){
        echo view('product').'<br>';
        return 'XOÁ SẢN PHẨM THÀNH CÔNG' ;
    })->name('admin.delete');

});
