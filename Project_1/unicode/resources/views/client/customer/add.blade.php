<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Thêm khách hàng</title>
</head>
<body>
    <h1>Trang Thêm Khách Hàng</h1>
    <form method ="post" action="<?php echo route('admin.customer.add') ?>">

    <div>
    <input type="text" name="Customer_Add_Name" placeholder ="Nhập Tên Khách Hàng" >
    <input type="text" name="id" placeholder ="Nhập ID Khách Hàng">
    <input type="hidden" name ="_token" value ="<?php echo csrf_token()?>">

    </div>
    <button type ="submit">Thêm Khách Hàng </button>
   
    </form>
    


    
</body>
</html>