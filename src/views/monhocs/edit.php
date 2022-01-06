<?php
    
    require "header.php";
?>

<div style="color: red">
    <?php echo $error; ?>
</div>
<div style = "width:60%" class="container">
    <h1 style="display: flex;align-items: center;justify-content: center;margin-bottom:30px;margin-top:50px;color:green">Chỉnh sửa thông tin giảng viên</h1>
<form action="" method="post">
Tên môn học:
    <input class="form-control" type="text"
           name="ten_mh"
           value="<?php
           echo isset($_POST['ten_mh']) ? $_POST['ten_mh'] : $monhoc['ten_mh']?>"
    />
    <br />
    Số tín chỉ:
    <input class="form-control" type="text"
           name="sotinchi"
           value="<?php
           echo isset($_POST['sotinchi']) ? $_POST['sotinchi'] : $monhoc['sotinchi']?>"
    />
    <br />
    Số tiết lý thuyết:
    <input class="form-control" type="text"
           name="sotiet_lt"
           value="<?php
           echo isset($_POST['sotiet_lt']) ? $_POST['sotiet_lt'] : $monhoc['sotiet_lt']?>"
    />
    <br />
    Số tiết bài tập:
    <input class="form-control" type="text"
           name="sotiet_bt"
           value="<?php
           echo isset($_POST['sotiet_bt']) ? $_POST['sotiet_bt'] : $monhoc['sotiet_bt']?>"
    />
    <br />
    Số tiết thực hành:
    <input class="form-control" type="text"
           name="sotiet_thtn"
           value="<?php
           echo isset($_POST['sotiet_thtn']) ? $_POST['sotiet_thtn'] : $monhoc['sotiet_thtn']?>"
    />
    <br />
    Số giờ tự học:
    <input class="form-control" type="text"
           name="sogio_tuhoc"
           value="<?php
           echo isset($_POST['sogio_tuhoc']) ? $_POST['sogio_tuhoc'] : $monhoc['sogio_tuhoc']?>"
    />
    <br />
    <input type="submit" name="submit" value="Update" />
    
</form>
</div>