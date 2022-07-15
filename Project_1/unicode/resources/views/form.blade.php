<!-- <form method="Post" action ='/home'>
    <div>
        <input type="text" name ='username' placeholder ='Nhập Username .... '>
        <input type="hidden" name ="_token" value ="<?php echo csrf_token() ?>">
        <?php 
       
        
        ?>

    </div>
    <button type ="submit">Submit</button>
</form> -->

<form method ="Post" action="/product">
    <div>
        <input type="text" name ="Tên Sản Phẩm" placeholder ="Nhập Tên Sản Phẩm">
        <input type="hidden" name ="_token" value ="<?php echo csrf_token()?>">


    </div>

    <div>
        <button type ="submit">Tìm Kiếm</button>
    </div>
</form>

