<?php
require_once 'configs/database.php';
class monhoc {
    public $mamh;
    public $ten_mh;
    public $sotinchi;
    public $sotiet_lt;
    public $sotiet_bt;
    public $sotiet_thtn;
    public $sogio_tuhoc;

    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO monhoc(`ten_mh`,`sotinchi`,`sotiet_lt`,`sotiet_bt`,`sotiet_thtn`,`sogio_tuhoc`) 
        VALUES ('{$param['ten_mh']}','{$param['sotinchi']}','{$param['sotiet_lt']}','{$param['sotiet_bt']}','{$param['sotiet_thtn']}','{$param['sogio_tuhoc']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);
        return $isInsert;
    }

    public function getmonhocById($mamh = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM monhoc WHERE mamh=$mamh";
        $results = mysqli_query($connection, $querySelect);
        $monhoc = [];
        if (mysqli_num_rows($results) > 0) {
            $monhocs = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $monhoc = $monhocs[0];
        }
        $this->closeDb($connection);

        return $monhoc;
    }

    /**
     * Truy vấn lấy ra tất cả sách trong CSDL
     */
    public function index() {
        $connection = $this->connectDb();
        //truy vấn
        $querySelect = "SELECT * FROM monhoc";
        $results = mysqli_query($connection, $querySelect);
        $monhocs = [];
        if (mysqli_num_rows($results) > 0) {
            $monhocs = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $monhocs;
    }

    public function update($monhoc = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE monhoc 
    SET `ten_mh` = '{$monhoc['ten_mh']}', `sotinchi` = '{$monhoc['sotinchi']}', `sotiet_lt` = '{$monhoc['sotiet_lt']}', `sotiet_bt` = '{$monhoc['sotiet_bt']}', `sotiet_thtn` = '{$monhoc['sotiet_thtn']}', `sogio_tuhoc` = '{$monhoc['sogio_tuhoc']}' WHERE `mamh` = {$monhoc['mamh']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }

    public function delete($mamh = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM monhoc WHERE mamh = $mamh";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

    public function connectDb() {
        $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
}