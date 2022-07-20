<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function __constructor(){

    }
    //Hiện Dánh sách sản phẩm 

    public function index(){
        return view('client\product\list');
    }

    //Lấy 1 sản phẩm theo id (phường thức get )
    public function GetProduct($id){
        return view('client\product\edit');
    }

    //Sửa 1 sản phẩm 
    public function UpdateProduct($id)
    {
        return 'Update Sản Phẩm Thành Công '.$id;

    }


    //Show form thêm dữ liệu(dùng phương thức post)

    public function AddProduct(){
        return view('client\product\add');

    }
    //Thêm dữ liệu vào sản phẩm (phương thức post)

    public function HandleAddProduct(Request $request){
        $allData = $request->all();
        dd($allData);
        

    }
    //Xoá dữ liệu (phương thức delete)
    public function DeleteProduct($id){

    }


}
