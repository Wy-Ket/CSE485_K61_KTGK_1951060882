<?php
//file hiển thị thông báo lỗi
require_once 'views/commons/message.php';
require "header.php";
?>


<div class="container">
    <div class="row">
        <div class="col-md-12 ms-auto mt-5" style="display:flex; justify-content:flex-end">
        </div>
        <div style = "width:60%" class="container">
            <h1 style="display: flex;align-items: center;justify-content: center;margin-bottom:30px;margin-top:50px;color:green">Thông tin môn học</h1>
        <form action="" method="post">
        <div class="col-md-12" style="display:flex; align-items: center; justify-content:center">
        <table class="table table-striped" style="border:1px"  cellspacing="0" cellpadding="8">
            <tr class="table-success">
                <th>ID</th>
                <th>Tên môn học</th>
                <th>Số tín chỉ</th>
                <th>Số tiết lý thuyết</th>
                <th>Số tiết bài tập</th>
                <th>Số tiết thực hành</th>
                <th>Học hàm</th>
 
                <th>Chỉnh sửa</th>
            </tr>
    <?php if (!empty($monhocs)): ?>
        <?php foreach ($monhocs AS $monhoc) : ?>
            <tr>
                <td ><?php echo $monhoc['mamh'] ?></td>
                <td><?php echo $monhoc['ten_mh'] ?></td>
                <td><?php echo $monhoc['sotinchi'] ?></td>
                <td><?php echo $monhoc['sotiet_lt'] ?></td>
                <td><?php echo $monhoc['sotiet_bt'] ?></td>
                <td><?php echo $monhoc['sotiet_thtn'] ?></td>
                <td><?php echo $monhoc['sogio_tuhoc'] ?></td>
                <td>
                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=monhoc&action=detail&mamh=" . $monhoc['mamh'];
                    $urlEdit =
                        "index.php?controller=monhoc&action=edit&mamh=" . $monhoc['mamh'];
                    $urlDelete =
                        "index.php?controller=monhoc&action=delete&mamh=" . $monhoc['mamh'];
                    ?>
                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>
</div>
<div style="margin-top : 20px" class="container">
<a href="index.php?controller=monhoc&action=add">
    <button type="button" class="btn btn-success">Thêm mới môn hoc</button>
</a>
</div>


<?php 
    require "footer.php";
?>