<?php
    
    require "header.php";
?>

<div class="container">
    <h5 class="text-center text-primary mt-5">Thêm mới môn học</h5>
<div>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="container">
<form method="post" action="">
    <div class="form-group">
    Tên môn học :
    <input type="text" class="form-control" name="ten_mh" value="" />
    </div>
    <br />
    Số tín chỉ :
    <input type="text" class="form-control" name="sotinchi" value="" />
    <br />
    Số tiết lý thuyết :
    <input type="text" class="form-control" name="sotiet_lt" value="" />
    <br />
    Số tiết bài tập :
    <input type="text" class="form-control" name="sotiet_bt" value="" />
    <br />
    Số tiết thực hành :
    <input type="text" class="form-control" name="sotiet_thtn" value="" />
    <br />
    Số giờ tự học :
    <input type="text" class="form-control" name="sogio_tuhoc" value="" />
    <br />
    <input type="submit" name="submit" value="Save" />
</form>
</div>
