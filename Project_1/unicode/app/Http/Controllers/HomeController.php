<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        //phương thức - thuộc tính của http request
        $allData = $request->all();
        echo $allData['id'];
        dd($allData);
        
        
    }
    public function GetHome(Request $request){
        $title = '<h1 style = "text-align:center">CHÀO MỪNG ĐẾN VỚI FOOD HOME CRAYFISH</h1>';
        $content = 'Food Home Crayfish | Kết nối đam mê tôm kiểng';
        $allData = $request->all();
        $allData['name'] = $content;
        $footer = 'Sđt : 0986746450 | Địa chỉ : 20 Giang Cự Vọng , Phường Trung Mỹ Tây , Q12, TP.Hồ Chí Minh';
        
        // $DataView = [
        //     'title' => $title,
        //     'content' => $content ,
        //     'footer' => $footer,
        // ];
        echo $allData['name'];
        return view('home',compact('title','content','footer'));
        
    }
    public function GetProduct(){
        return view('product');
    }
    public function GetNews(){
        return view('news');
    }
    
}
?>
