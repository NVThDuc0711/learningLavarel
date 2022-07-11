<form method="Post" action ='/home'>
    <div>
        <input type="text" name ='username' placeholder ='Nhập Username .... '>
        <input type="hidden" name ="_token" value ="<?php echo csrf_token() ?>">
    </div>
    <button type ="submit">Submit</button>
</form>