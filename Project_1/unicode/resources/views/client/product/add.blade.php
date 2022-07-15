<h1>Thêm Sản Phẩm </h1>

<form method ="post" action="<?php echo route('product.add') ?>">
<div>
    <input type="text" name ="Product Name" placeholder ="Input Product Name">
    <input type="hidden" name ="_token" value ="<?php echo csrf_token()?>">
</div>

<button type ="submit">Add Product</button>


</form>