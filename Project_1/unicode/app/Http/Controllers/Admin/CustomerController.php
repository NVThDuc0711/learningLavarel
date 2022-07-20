<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function __construct() {
        
    }
    public function index()
    {
        return view('client/customer/list');
    }

    //Lấy 1 khách hàng theo id (phường thức get )
    public function GetCustomer(Request $request){
        return view('client/customer/edit');

    }

    //Sửa 1 khách hàng theo id 
    public function UpdateCustomer(Request $request)
    {

        $allData= $request->all();
        echo ' Lấy thông tin '.'ID : '.$allData['id'].' Name : '.$allData['Customer_Name'].' thành công';


    }

    //Form thêm khách hàng (phương thức get )
    public function AddCustomer(Request $request)
    {
        return view('client/customer/add');

    }

    //Hoàn tất thêm Khách hàng 
    public function HandleCustomer(Request $request)
    {
        $allData = $request ->all();
        echo ' Thêm Khách Hàng '.'ID : '.$allData['id'].' Name : '.$allData['Customer_Add_Name'].' thành công';

        

    }
}
