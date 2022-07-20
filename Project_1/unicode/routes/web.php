<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Middleware\CheckLoginAdmin;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminController;


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



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home',function(){
//     return view('home');

// });
// Route::get('/product',function(){
//     echo view('product');
//     return view('form');

// });

// Route::post('/product',function(){
//     return 'Học Lavarel cơ bản ';\
// });

Route::get('/',[HomeController::class,'index'])->name('home');
Route::prefix('/home')->group(function(){
    Route::get('/',[HomeController::class,'GetHome'])->name('gethome');
    Route::get('/product',[HomeController::class,'GetProduct'])->name('getproduct');
});


Route::prefix('/product')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('product.list');

    //lấy chi tiết 1 sản phẩm (áp dụng show form sửa chữa )
    Route::get('/edit/{id}',[ProductController::class,'GetProduct'])->name('product.edit');

    //xử lý update sản phẩm 
    Route::post('/edit/{id}',[ProductController::class,'UpdateProduct']);
    
    // Hiển thị form thêm sản phẩm 
    Route::get('/add',[ProductController::class,'AddProduct'])->name('product.add');
    //Xử lý thêm sản phẩm (phương thức post )

    Route::post('/add',[ProductController::class,'HandleAddProduct']);

}) ;

Route::middleware(CheckLoginAdmin::class)->prefix('/admin')->group(function(){
    
    Route::get('/',[AdminController::class,'index']);
    Route::prefix('/customer')->group(function() {
        Route::get('/',[CustomerController::class,'index']);
        Route::get('/edit',[CustomerController::class,'GetCustomer'])->name('admin.customer.edit');
        Route::post('/edit',[CustomerController::class,'UpdateCustomer']);
        Route::get('/add',[CustomerController::class,'AddCustomer'])->name('admin.customer.add');
        Route::post('/add',[CustomerController::class,'HandleCustomer']);
        
    });
});





Route::get('/news/{slug?}-{name?}',function($slug,$name){
    $content = 'Hello '.$name.'<br>';
    $content.= "Course : " .$slug;
    echo view('news').'<br>';
    return $content;
},[HomeController::class,'Getnews'])->name('admin.news');

//Route::get('/news/{slug?}-{name?}.html',function($slug,$name ){
//    $content = 'Hello '.$name.'<br>';
//    $content.= "Course : " .$slug;
//    echo view('news').'<br>';
//    return $content;

    //where : tạo rằng buộc 

//})->name('admin.news'); //->where(['slug' => '[a-z-]+','id' => '[0-9]+']) 






// Phần Admin


// Route::prefix('admin') -> group(function(){
//     Route::get('/',function(){
//         return view('admin');
//     });

//     Route::prefix('/product') -> group(function(){
//         Route::get('/',function(){
//             return view('admin_product');

    
//         });
        
    
//         Route::get('/add',function(){
//             echo view('admin_product').'<br>';
//             return 'THÊM SẢN PHẨM THÀNH CÔNG'.'<br>';
        
//         })->name('admin.add');
//         Route::get('/delete',function(){
//             echo view('admin_product').'<br>';
//             return 'XOÁ SẢN PHẨM THÀNH CÔNG' ;
//         })->name('admin.delete');

//     });

    

// });
