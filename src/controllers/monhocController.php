<?php
require_once 'models/monhoc.php';
class monhocController {
    public function index() {
        
        $monhoc = new monhoc();
        $monhocs = $monhoc->index();

        require_once 'views/monhocs/index.php';
    }

    public function add() {
        $error = '';
        
        if (isset($_POST['submit'])) {
            $ten_mh = $_POST['ten_mh'];
            $sotinchi = $_POST['sotinchi'];
            $sotiet_lt = $_POST['sotiet_lt'];
            $sotiet_bt = $_POST['sotiet_bt'];
            $sotiet_thtn = $_POST['sotiet_thtn'];
            $sogio_tuhoc = $_POST['sogio_tuhoc'];
 
           
            if (empty($ten_mh) && empty($sotinchi) && empty($sotiet_lt) && empty($sotiet_bt) && empty($sotiet_thtn) && empty($sogio_tuhoc)) {
                $error = "Name không được để trống";
            }
            else {
                
                $monhoc = new monhoc();
                
                $monhocArr = [
                    'ten_mh' => $ten_mh,
                    'sotinchi' => $sotinchi,
                    'sotiet_lt' => $sotiet_lt,
                    'sotiet_bt' => $sotiet_bt,
                    'sotiet_thtn' => $sotiet_thtn,
                    'sogio_tuhoc' => $sogio_tuhoc
                    

                ];
                $isInsert = $monhoc->insert($monhocArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                }
                else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=monhoc&action=index");
                exit();
            }
        }
        
        require_once 'views/monhocs/add.php';
    }

    public function edit() {
        
        if (!isset($_GET['mamh'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=monhoc&action=index");
            return;
        }
        if (!is_numeric($_GET['mamh'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=monhoc&action=index");
            return;
        }
        $mamh = $_GET['mamh'];
        
        $monhocModel = new monhoc();
        $monhoc = $monhocModel->getmonhocById($mamh);

        
        $error = '';
        if (isset($_POST['submit'])) {
            $ten_mh = $_POST['ten_mh'];
            $sotinchi = $_POST['sotinchi'];
            $sotiet_lt = $_POST['sotiet_lt'];
            $sotiet_bt = $_POST['sotiet_bt'];
            $sotiet_thtn = $_POST['sotiet_thtn'];
            $sogio_tuhoc = $_POST['sogio_tuhoc'];
            //check validate dữ liệu
            if (empty($ten_mh) && empty($sotinchi) && empty($sotiet_lt) && empty($sotiet_bt) && empty($sotiet_thtn) && empty($sogio_tuhoc)) {
                $error = "Name không được để trống";
            }
            else {
               
                $monhoc = new monhoc();
                
                $monhocArr = [
                    'mamh' => $mamh,
                    'ten_mh' => $ten_mh,
                    'sotinchi' => $sotinchi,
                    'sotiet_lt' => $sotiet_lt,
                    'sotiet_bt' => $sotiet_bt,
                    'sotiet_thtn' => $sotiet_thtn,
                    'sogio_tuhoc' => $sogio_tuhoc

                ];
                $isUpdate = $monhocModel->update($monhocArr);
                if ($isUpdate) {
                    $_SESSION['success'] = "Update bản ghi #$mamh thành công";
                }
                else {
                    $_SESSION['error'] = "Update bản ghi #$mamh thất bại";
                }
                header("Location: index.php?controller=monhoc&action=index");
                exit();
            }
        }
        
        require_once 'views/monhocs/edit.php';
    }

    public function delete() {
 
        $mamh = $_GET['mamh'];
        if (!is_numeric($mamh)) {
            header("Location: index.php?controller=monhoc&action=index");
            exit();
        }

        $monhoc = new monhoc();
        $isDelete = $monhoc->delete($mamh);

        if ($isDelete) {
            
            $_SESSION['success'] = "Xóa bản ghi #$mamh thành công";
        }
        else {
            
            $_SESSION['error'] = "Xóa bản ghi #$mamh thất bại";
        }

        header("Location: index.php?controller=monhoc&action=index");
        exit();


    }
}